<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return Inertia::render('Landing', ['allPosts' => $posts]);
    }

    public function selected($slug)
    {
        return Inertia::render('Selected', [

           'post' => Post::where('_id', '=', $slug)->first()
       ]);
    }

    public function listing()
    {
        $posts = Post::all();
        return Inertia::render('Listing', ['Posts' => $posts]);
    }

    public function checkout($slugs)
    {
        return Inertia::render('Checkout', [
           'post' => Post::where('_id', '=', $slugs)->first()
       ]);

    }

    public function stkPush(Request $request)
    {
        $timestamp = date('YmdHis');
        $password = env('MPESA_STK_SHORTCODE').env('MPESA_PASSKEY').$timestamp;

        $curl_post_data = array(
            'BusinessShortCode' => env('MPESA_STK_SHORTCODE'),
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $request->amount,
            'PartyA' => $request->phone,
            'PartyB' => env('MPESA_STK_SHORTCODE'),
            'PhoneNumber' => $request->phone,
            'CallBackURL' => env('MPESA_TEST_URL'). '/api/stkpush',
            'AccountReference' => $request->account,
            'TransactionDesc' => $request->account
          );

        $url = '/stkpush/v1/processrequest';

        $response = $this->makeHttp($url, $curl_post_data);

        return $response;
    }


}
