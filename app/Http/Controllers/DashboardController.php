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
use Atymic\Twitter\Twitter as TwitterContract;
use Illuminate\Http\JsonResponse;
// use Twitter;
// use Atymic\Twitter\Facade\Twitter;
// require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
use Coderjerk\BirdElephant\BirdElephant;
use Smolblog\OAuth2\Client\Provider\Twitter;

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
        // return dd('twende');
        // session_start();

        // require_once('bootstrap.php');

        $provider = new Twitter([
            'clientId'     => $_ENV['TWITTER_CLIENT_ID'],
            'clientSecret' => $_ENV['TWITTER_CLIENT_SECRET'],
            'redirectUri'  => $_ENV['TWITTER_CALLBACK_URL'],
        ]);
        // $provider = new Smolblog\OAuth2\Client\Provider\Twitter([
        //     'clientId'     => $_ENV['OAUTH2_CLIENT_ID'],
        //     'clientSecret' => $_ENV['OAUTH2_CLIENT_SECRET'],
        //     'redirectUri'  => $_ENV['TWITTER_CALLBACK_URI'],
        // ]);

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

            session_write_close();

            header("Location: https://{$_SERVER['HTTP_HOST']}/");
        }
    }
    public function tweet()
    {

        session_start();

        if (isset($_SESSION['oauth-2-access-token'])) {
            $token = $_SESSION['oauth-2-access-token'];
        }

        if (isset($_SESSION['oauth-2-access-token']) && $token->hasExpired()) {

            $provider = new Smolblog\OAuth2\Client\Provider\Twitter([
                'clientId'     => $_ENV['TWITTER_ACCESS_TOKEN'],
                'clientSecret' => $_ENV['TWITTER_ACCESS_TOKEN_SECRET'],
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

        // $followers = $twitter->user('biddersportal')->followers();
        // //pass your query params to the methods directly
        // $following = $twitter->user('biddersportal')->following([
        //     'max_results' => 20,
        //     'user.fields' => 'profile_image_url'
        // ]);
        //tweet something
        $tweet = (new \Coderjerk\BirdElephant\Compose\Tweet)->text(".@biddersportal is so cool");
        $twitter->tweets()->tweet($tweet);
        // You can also use the sub classes / methods directly if you like:
        // $user = new UserLookup($credentials);
        // $user = $user->getSingleUserByID('2244994945', null);

        return


        // $url = "https://api.twitter.com/2/tweets";
        $url = "https://api.twitter.com/2/tweets/counts/all";
        // $access_token = "1542467985151074304-HPshHmygORR037GxNp8QnqVqFpWsaB";
        $access_token = "AAAAAAAAAAAAAAAAAAAAAOiFeQEAAAAAV5Y5UdpJKcnBQjzRpSjD73ukR0c%3DFHXYRjEVUIP3SRl89BF8OYj5TIL3xRLwjbvHx8YCD1H7dARBsA";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $headers = array(
        // "Accept: application/json",
        "Authorization: Bearer $access_token",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        curl_close($curl);
        var_dump($resp);
        return dd(json_decode($resp));


        // $authorization = "Authorization: Bearer AAAAAAAAAAAAAAAAAAAAAOiFeQEAAAAAJszzWmhxepBPKIYtYFwqKDx5kZ0%3DafcyVYATBAN9ZlMNzWpnLM1QMYVr6MCsXNP8kgwl81ianB9WK1";
        // $withToken = Http::withToken($authorization)
        //     ->get("https://api.twitter.com/2/tweets");
        // return dd(json_decode($withToken));

        // $callback = route('tweet.cbk');
        // $callback = url('tweet.cbk');
        // $callback = 'tweet/cbk';
        $access_token = "1542467985151074304-HPshHmygORR037GxNp8QnqVqFpWsaB";
        $access_token_secret = "oFOkrHCKe0PXzEftq9cV36OkXopY6znCgWaWhqDNpQRfI";
        $connection = new TwitterOAuth("CpOJ9JnYou8kXAFL7eNi8XYNc","1aJlligmUpqW7TJRvzhjNqGlXcj6H6yZWjsgmOWjUTabtfm8md", $access_token, $access_token_secret);
        // $content = $connection->get("account/verify_credentials");
        // $content = $connection->get("statuses/home_timeline");
        $contents = $connection->get("https://api.twitter.com/2/tweets/counts/all");
        // $connection->setApiVersion('2');
        // $connection->setTimeouts(10, 15);
        // $statues = $connection->post("statuses/update", ["status" => "hello world"]);
        // $accessToken = $connection->oauth('oauth/request_token',['oauth_callback'=>$callback]);
        // $route = $connection->url('oauth/authorize',['oauth_token'=>$accessToken['oauth_token']]);
        // $content = $connection->get("account/verify_credentials");
        return dd($contents);
        // return redirect($content);
        // return Inertia::render('Admin/Subscriptions');
    }

    public function tweetcbk(Request $request)
    {
        // $callback = route('tweetcbk');
        // $connection = new TwitterOAuth("CpOJ9JnYou8kXAFL7eNi8XYNc","1aJlligmUpqW7TJRvzhjNqGlXcj6H6yZWjsgmOWjUTabtfm8md");
        // $accesToken = $connection->oauth('oauth/request_token',['oauth_callback'=>$callback]);
        // $route = $connection->url('oauth/authorize',['oauth_token'=>$accesToken['oauth_token']]);
        // return redirect($route);
        return dd($request->all());
        echo 'check';
        // return Inertia::render('Admin/Subscriptions');
    }

    public function refresh(Request $request)
    {
        $response = Http::get('https://www.biddetail.com/kenya/C62A8CB5DD405E768CAD792637AC0446/F4454993C1DE1AB1948A9D33364FA9CC', ['auth' =>  ['C62A8CB5DD405E768CAD792637AC0446', 'F4454993C1DE1AB1948A9D33364FA9CC']]);
        // $request->header('X-Header-Name');
        $data = json_decode($response, true);
        // $posts = $request->tenders;

        // return dd($data);

        $posts = $data['TenderDetails'][0]['TenderLists'];
        // return dd($posts);
        set_time_limit(50000);
        // set_time_limit(50000);
        foreach ($posts as $post => $value ) {
            if(!Post::where('bdr_no',$value['BDR_No'])->exists()){

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

                // return dd($createdPost);
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
            'tender_number' => ['required' ],
            'tender_brief' => [ ],
            'competition_type' => [ ],
            'category' => [ ],
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
        foreach($posts as $row){

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
        foreach($mongoPosts as $index => $row){
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

    public function checkUploadedFileProperties($extension, $fileSize) : void
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