<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\Post;
use App\Models\Payments;
use App\Models\Upload;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportPost;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Http;
// use Atymic\Twitter\Twitter as TwitterContract;
use Illuminate\Http\JsonResponse;
// use Twitter;
// use Atymic\Twitter\Facade\Twitter;
// require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
use Coderjerk\BirdElephant\BirdElephant;
use Smolblog\OAuth2\Client\Provider\Twitter;
// require_once('bootstrap.php');
// session_start();

class DashboardController extends Controller
{
    public function index()
    {
        // $payments = Payments::all();
        return Inertia::render('Admin/Dashboard', [
            'refreshed' => false,
        ]);
    }

    public function payments()
    {
        $completedPayments = Payments::where('completed', true)->latest()->get();
        $incompletePayments = Payments::where('completed', false)->latest()->get();
        return Inertia::render('Admin/Payments', [
            'completedPayments' => $completedPayments,
            'incompletePayments' => $incompletePayments
        ]);
    }

    public function twitter()
    {
        $freeTender = Post::latest()->limit(1)->get();
        return Inertia::render('Admin/Twitter', [
            'freeTender' => $freeTender,
            'tweetPosted' => null,
        ]);
    }

    public function tenders()
    {
        return Inertia::render('Admin/Dashboard');
    }
    public function subscriptions()
    {
        return Inertia::render('Admin/Subscriptions');
    }
    public function wishlist()
    {
        return Inertia::render('Admin/Subscriptions');
    }

    public function tweetAuth()
    {
        // session_start();

        // require_once('bootstrap.php');

        $provider = new Twitter([
            'clientId'     => $_ENV['TWITTER_CLIENT_ID'],
            'clientSecret' => $_ENV['TWITTER_CLIENT_SECRET'],
            'redirectUri'  => $_ENV['TWITTER_CALLBACK_URL'],
        ]);

        if (!isset($_GET['code'])) {
            unset($_SESSION['oauth2state']);
            unset($_SESSION['oauth2verifier']);

            //list of poible scopes. Only use the scopes you actually need in practice.
            $options = [
                'scope' => [
                    'tweet.read',
                    'tweet.write',
                    'tweet.moderate.write',
                    'users.read',
                    'follows.read',
                    'follows.write',
                    'offline.access',
                    'space.read',
                    'mute.read',
                    'mute.write',
                    'like.read',
                    'like.write',
                    'list.read',
                    'list.write',
                    'block.read',
                    'block.write',
                    'bookmark.read',
                    'bookmark.write'
                ]
            ];

            // If we don't have an authorization code then get one
            $authUrl = $provider->getAuthorizationUrl($options);
            $_SESSION['oauth2state'] = $provider->getState();

            // We also need to store the PKCE Verification code so we can send it with
            // the authorization code request.
            $_SESSION['oauth2verifier'] = $provider->getPkceVerifier();

            header('Location: ' . $authUrl);
            exit;

            // Check given state against previously stored one to mitigate CSRF attack
        } elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {

            unset($_SESSION['oauth2state']);

            exit('Invalid state');
        } else {
            try {
                // Try to get an access token (using the authorization code grant)
                $token = $provider->getAccessToken('authorization_code', [
                    'code' => $_GET['code'],
                    'code_verifier' => $_SESSION['oauth2verifier']
                ]);
            } catch (Exception $e) {
                echo '<pre>';
                print_r($e);
                echo '</pre>';

                exit('There has been an error.');
            }
            //save token object to session
            $_SESSION['oauth-2-access-token'] = $token;

            // session_write_close();

            header("Location: http://{$_SERVER['HTTP_HOST']}/tweet");
        }
    }
    public function tweet()
    {
        session_start();

        if (isset($_SESSION['oauth-2-access-token'])) {
            $token = $_SESSION['oauth-2-access-token'];
        }

        if (isset($_SESSION['oauth-2-access-token']) && $token->hasExpired()) {

            $provider = new Twitter([
                'clientId'     => $_ENV['TWITTER_CLIENT_ID'],
                'clientSecret' => $_ENV['TWITTER_CLIENT_SECRET'],
                'redirectUri'  => $_ENV['TWITTER_CALLBACK_URL'],
            ]);

            $newToken = $provider->getAccessToken('refresh_token', [
                'refresh_token' => $token->getRefreshToken()
            ]);

            $_SESSION['oauth-2-access-token'] = $newToken;

            $token = $newToken;
        }

        if (!isset($_SESSION['oauth-2-access-token'])) {
            // echo "<a href='authenticate.php'>Login With Twitter</a>";
            $this->tweetAuth();
            // echo "<a href='twitter_auth'>Login With Twitter</a>";
            exit(1);
        }


        $credentials = array(
            //these are values that you can obtain from developer portal:
            'consumer_key' => env('TWITTER_CONSUMER_KEY'), // identifies your app, always needed
            'consumer_secret' => env('TWITTER_CONSUMER_SECRET'), // app secret, always needed
            'bearer_token' => env('TWITTER_BEARER_TOKEN'), // OAuth 2.0 Bearer Token requests

            //this is a value created duting an OAuth 2.0 with PKCE authentication flow:
            'auth_token' => env('TWITTER_BEARER_TOKEN'), // OAuth 2.0 auth token
            'auth_token' => $token->getToken(),

            //these are values created during an OAuth 1.0a authentication flow to act ob behalf of other users, but these can also be obtained for your app from the developer portal in order to act on behalf of your app.
            'token_identifier' => env('TWITTER_ACCESS_TOKEN'), // OAuth 1.0a User Context requests
            'token_secret' => env('TWITTER_ACCESS_TOKEN_SECRET'), // OAuth 1.0a User Context requests
        );

        $twitter = new BirdElephant($credentials);
        // $twitter = new \Coderjerk\BirdElephant\BirdElephant($credentials);

        $freeTender = Post::latest()->limit(1)->get();
        $tenderBrief = $freeTender[0]->tender_brief;   
        $purchasingAuthority = $freeTender[0]->purchasing_authority;   
        $tenderNumber = $freeTender[0]->tender_number;   
        $fundedBy = $freeTender[0]->funded_by;   
        $expiry = $freeTender[0]->expiry;   
        $tenderID = $freeTender[0]->_id;   
        $tenderURL = 'http://biddersportal.com/unlock/'.$tenderID;

        // try {
        //     $tweet = (new \Coderjerk\BirdElephant\Compose\Tweet)->text("Find Free Tenders Daily At https://www.biddersportal.com/ \r\n\r\n \r\nFree Tender Brief: " .$tenderBrief."\r\nPurchasing Authority: " .$purchasingAuthority."\r\nTender Number: " .$tenderNumber."\r\nFunded By: " .$fundedBy."\r\nTender Expiry: " .$expiry);
        //     $tweetContent = $twitter->tweets()->tweet($tweet);
        // } catch (Exception $e) {
        //     var_dump($e->getResponse()->getBody()->getContents());
        //     // return dd('error');
        // }
        // return $tweetContent;
        // $posts = Post::latest()->limit(6)->get();
        // return Inertia::render('Landing', [
        //     'allPosts' => $posts,
        // ]);

        // $tweet = (new \Coderjerk\BirdElephant\Compose\Tweet)->text("Find Free Tenders Daily At https://www.biddersportal.com/ \r\n\r\n \r\nFree Tender Brief: " .$tenderBrief."\r\nPurchasing Authority: " .$purchasingAuthority."\r\nTender Number: " .$tenderNumber."\r\nFunded By: " .$fundedBy."\r\nTender Expiry: " .$expiry);
        $tweet = (new \Coderjerk\BirdElephant\Compose\Tweet)->text('Thanks @biddersportal '.$tenderURL);
        $tweetContent = $twitter->tweets()->tweet($tweet);
        $posts = Post::latest()->limit(6)->get();
        return Inertia::render('Landing', [
            'allPosts' => $posts,
        ]);
        // return $tweetContent;
        

        // tweet text with image
        // $image = $twitter->tweets()->upload('./img/1.png');
        // $media = (new \Coderjerk\BirdElephant\Compose\Media)->mediaIds(
        //     [
        //         $image->media_id_string
        //     ]
        // );
        // $tweet = (new \Coderjerk\BirdElephant\Compose\Tweet)->text('Thanks bidders')
        //     ->media($media);
        // $tweetContent = $twitter->tweets()->tweet($tweet);
        // return $tweetContent;

       

       

    }

    public function tweetcbk(Request $request)
    {

        return dd($request->all());
        // return Inertia::render('Admin/Subscriptions');
    }

    public function refresh(Request $request)
    {
        $apiURL = env('TENDER_API_URL');
        $response = Http::get($apiURL, ['auth' =>  ['C62A8CB5DD405E768CAD792637AC0446', 'F4454993C1DE1AB1948A9D33364FA9CC']]);
        $data = json_decode($response, true);
        $posts = $data['TenderDetails'][0]['TenderLists'];

        set_time_limit(50000);
        foreach ($posts as $post => $value) {
            if (!Post::where('bdr_no', $value['BDR_No'])->exists()) {
                $createdPost = Post::Create([
                    'bdr_no' => $value['BDR_No'],
                    'purchasing_authority' => $value['Purchasing_Authority'],
                    'tender_number' => $value['Tender_No'],
                    'tender_brief' => $value['Tender_Brief'],
                    'competition_type' => $value['CompetitionType'],
                    'funded_by' => $value['Funding'],
                    'country' => $value['Geographical_Addresses'],
                    'value' => $value['Tender_Value'],
                    'work_detail' => $value['Work_Detail'],
                    'email' => $value['Email_Address'],
                    'link' => $value['FileUrl'],
                    'expiry' => $value['Tender_Expiry']
                ]);
            }
        };
        return Inertia::render('Admin/Dashboard', [
            'refreshed' => true,
        ]);
    }


    public function addPost(Request $request)
    {
        $validated = $request->validate([
            'purchasing_Authority' => ['max:50'],
            'tender_number' => ['required'],
            'tender_brief' => [],
            'competition_type' => [],
            'category' => [],
            'funded_by' => [],
            'country' => [],
            'work_detail' => [],
            'expiry' => [],
            'address' => [],
            'email' => [],
            'phone' => [],
            'link' => [],
        ]);

        $postData = Post::create([
            'purchasing_authority' => $validated['purchasing_authority'],
            'tender_number' => $validated['tender_number'],
            'tender_brief' => $validated['tender_brief'],
            'competition_type' => $validated['competition_type'],
            'funded_by' => $validated['funded_by'],
            'country' => $validated['country'],
            'title' => $validated['title'],
            'value' => $validated['value'],
            'work_detail' => $validated['work_detail'],
            'address' => $validated['address'],
            'email' => $validated['email'],
            'link' => $validated['link'],
            'expiry' => $validated['expiry'],
        ]);

        // return Redirect::route('success');
        return Inertia::render('Success', ['Status' => 'add']);
        // return Inertia::render('Dashboard');
    }

    public function import(Request $request)
    {
        if ($request->file) {
            $file = $request->file;
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            $this->checkUploadedFileProperties($extension, $fileSize);
            $import = new ImportPost();
            Excel::import($import, $request->file('file')->store('files'));
            $posts = DB::table('uploads')->get();
            // return dd($posts);
            foreach ($posts as $row) {

                Post::firstOrCreate([
                    'purchasing_authority'  => $row->purchasing_authority,
                    'tender_number'  => $row->tender_number,
                    'tender_brief'  => $row->tender_brief,
                    'competition_type'  => $row->competition_type,
                    'category'  => $row->category,
                    'funded_by'  => $row->funded_by,
                    'country'  => $row->country,
                    'value'  => $row->value,
                    'work_detail'  => $row->work_detail,
                    'expiry'  => $row->expiry,
                    'address'  => $row->address,
                    'email'  => $row->email,
                    'phone'  => $row->phone,
                    'link'  => $row->link
                ]);
            }

            $mongoPosts = Post::all();
            foreach ($mongoPosts as $index => $row) {
                Upload::where('tender_number', $row->tender_number)->update(
                    [
                        '_id' => $row->_id
                    ]
                );
            }
            return Inertia::render('Success', ['Status' => 'upload']);
        } else {
            return dd('not uploaded correctly');
        }
    }

    public function checkUploadedFileProperties($extension, $fileSize): void
    {
        $valid_extension = array("csv", "xlsx"); //Only want csv and excel files
        $maxFileSize = 2097152; // Uploaded file size limit is 2mb
        if (in_array(strtolower($extension), $valid_extension)) {
            if ($fileSize <= $maxFileSize) {
            } else {
                throw new \Exception('No file was uploaded', Response::HTTP_REQUEST_ENTITY_TOO_LARGE); //413 error
            }
        } else {
            throw new \Exception('Invalid file extension', Response::HTTP_UNSUPPORTED_MEDIA_TYPE); //415 error
        }
    }

    public function delete($post)
    {
        Upload::where('_id', '=', $post)->delete();
        Post::where('_id', '=', $post)->delete();
        return Inertia::render('Success', ['Status' => 'delete']);
    }

    public function update(Request $request, Post $post, Upload $upload)
    {
        $validated = $request->validate([
            'purchasing_authority' => ['required', 'max:50'],
            'tender_number' => ['max:50'],
            'tender_brief' => ['max:50'],
            'competition_type' => ['max:50'],
            'category' => ['max:50'],
            'funded_by' => ['max:50'],
            'country' => ['max:50'],
            'work_detail' => ['max:50'],
            'expiry' => ['max:50'],
            'address' => ['max:50'],
            'email' => ['max:50'],
            'phone' => ['max:50'],
            'link' => ['max:50'],
        ]);

        $post->update($validated);
        $upload->update($validated);
        return Inertia::render('Success', ['Status' => 'edit']);
    }

    public function download(Request $request)
    {
        $file_path = public_path('templates/upload_tenders.xlsx');
        return response()->download($file_path);
    }
}