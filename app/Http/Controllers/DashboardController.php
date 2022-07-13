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

    public function tweet()
    {
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