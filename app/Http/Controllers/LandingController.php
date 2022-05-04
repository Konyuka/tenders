<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;
use Safaricom\Mpesa\Mpesa;
use App\Models\Payments;
include('pdflayerController.php');


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
        // return Inertia::render('Landings');
        return Inertia::render('Landing', ['allPosts' => $posts]);
    }

    public function selected($slug)
    {
        return Inertia::render('Selected', [

           'post' => Post::where('_id', '=', $slug)->first(),
           'Status' => ''
       ]);
    }

    public function unlock($slug)
    {
        // return dd($slug);
        $payment = Payments::where('trans_id', '=', $slug)
                    ->where('completed', '=', true)
                    ->where('waiting', '=', false)
                    ->first();
        $clientNumber = $payment->phone;
        // return  dd($clientNumber);

        if($payment->sms_sent = 0){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://portal.zettatel.com/SMSApi/send?userid=Safaricom&password=password&mobile=${$clientNumber}&msg=Thank+you+For+the+Purchase%21+Bidders+Portal%21&senderid=Notify_MSG&msgType=text&duplicatecheck=true&output=json&sendMethod=quick",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
            echo "cURL Error #:" . $err;
            } else {
                $sms_sent = true;
                $payment = Payments::where(['trans_id'=>$slug])->first();
                if ($payment){
                    $payment->sms_sent=true;
                    $payment->save();
                }
            // echo $response;
            }
        }

        if($payment->sms_sent = 1){
            // echo 'Sms Sent Already';
        }

        return Inertia::render('Unlocked', [
           'post' => Post::where('_id', '=', $payment->info)->first(),
           'status' => 'Unlocked',
           'transId' => $slug
       ]);
    }

    public function downloadTender($slug)
    {
        // return dd($request->post_id);
        // $post_id = $request->post_id;
        $post = Post::where('_id', '=', $slug)
                        ->first();
        $link = $post->link;

        //Instantiate the class
        $html2pdf = new pdflayer();
        // return dd($link);

        $html2pdf->set_param(
            'document_url', $link
            // 'document_url','https://www.tenderfiles.com/GlobalTenderDocuments//GlobalDocuments//42022/20/b44c2a06-050c-400f-bd08-9993ff9f6461/b44c2a06-050c-400f-bd08-9993ff9f6461.html',
            // 'document_name', 'GlobalTenderDocuments'
        );
        // return ($link);
        //start the conversion
        $html2pdf->convert();

        //display the PDF file
        $html2pdf->display_pdf();

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

    public function getAccessToken()
    {
        $url = env('MPESA_ENV') == 0
        ? 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials'
        : 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        // return dd($url);
        $curl = curl_init($url);
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=utf8'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => false,
                CURLOPT_USERPWD => env('MPESA_CONSUMER_KEY') . ':' . env('MPESA_CONSUMER_SECRET')
            )
        );
        $response = json_decode(curl_exec($curl));
        // return dd($response);
        curl_close($curl);

        return $response->access_token;
    //     return Inertia::render('Checkout', [
    //        'accessTokenResponse' => $response
    //    ]);
    }

    public function registerURLS()
    {
        $body = array(
            'ShortCode' => env('MPESA_SHORTCODE'),
            'ResponseType' => 'Completed',
            'ConfirmationURL' => env('MPESA_TEST_URL') . '/api/confirmation',
            'ValidationURL' => env('MPESA_TEST_URL') . '/api/validation'
        );

        $url = '/c2b/v1/registerurl';
        $response = $this->makeHttp($url, $body);
        // return dd($response);

        return Inertia::render('Checkout', [
           'registeredURLSResponse' => $response
       ]);

        // return $response;
    }

    public function makeHttp($url, $body)
    {
        // $url = 'https://mpesa-reflector.herokuapp.com' . $url;
        $url = 'https://sandbox.safaricom.co.ke/mpesa/' . $url;
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                    CURLOPT_URL => $url,
                    CURLOPT_HTTPHEADER => array('Content-Type:application/json','Authorization:Bearer '. $this->getAccessToken()),
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => json_encode($body)
                )
        );
        $curl_response = curl_exec($curl);
        curl_close($curl);
        return $curl_response;
    }

    public function stkPush(Request $request)
    {
        $timestamp = date('YmdHis');
        $password = env('MPESA_STK_SHORTCODE').env('MPESA_PASSKEY').$timestamp;

        $curl_post_data = array(
            'BusinessShortCode' => env('MPESA_STK_SHORTCODE'),
            'Password' => base64_encode($password),
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $request->amount,
            'PartyA' => $request->phone,
            'PartyB' => env('MPESA_STK_SHORTCODE'),
            'PhoneNumber' => $request->phone,
            'CallBackURL' => env('MPESA_TEST_URL').'/api/stkpush',
            'AccountReference' => $request->account,
            'TransactionDesc' => $request->account
          );

        $url = '/stkpush/v1/processrequest';

        $response = $this->makeHttp($url, $curl_post_data);

        // return dd($response);

        // $result_code =$response ?? null;
        // if (isset($result_code) and $result_code=="0"){
        //     // $trans_id =$stkPushSimulation->MerchantRequestID;

        //     Payment::create([
        //     //   "user_id"=>auth()->user()->id,
        //     //   "trans_id"=>$trans_id,
        //       "phone"=>$PhoneNumber,
        //       "amount"=>$Amount,
        //     //   "info"=>"ebook/".$request->ebook_id
        //     ]);
        //     return back()->with('success','Please complete transaction on your phone by entering your MPESA pin');
        // }

        // $error_msg = $stkPushSimulation->errorMessage ?? '';

        return $response;
    }

    public function simulateTransaction(Request $request)
    {
        $body = array(
            'ShortCode' => env('MPESA_SHORTCODE'),
            'Msisdn' => 254716202298,
            'Amount' => $request->amount,
            'BillRefNumber' => $request->account,
            'CommandID' => 'CustomerPayBillOnline'
        );

        $url =  '/c2b/v1/simulate';
        $response = $this->makeHttp($url, $body);

        return $response;
        return $response;
    }

    public function transactionStatus(Request $request)
    {
        $body =  array(
            'Initiator' => env('MPESA_B2C_INITIATOR'),
            'SecurityCredential' => env('MPESA_B2C_PASSWORD'),
            'CommandID' => 'TransactionStatusQuery',
            'TransactionID' => $request->transactionid,
            'PartyA' => env('MPESA_SHORTCODE'),
            'IdentifierType' => '4',
            'ResultURL' => env('MPESA_TEST_URL'). '/api/transaction-status/result_url',
            'QueueTimeOutURL' => env('MPESA_TEST_URL'). '/api/transaction-status/timeout_url',
            'Remarks' => 'CheckTransaction',
            'Occasion' => 'VerifyTransaction'
          );

        $url =  'transactionstatus/v1/query';
        $response = $this->makeHttp($url, $body);

        return $response;
    }


}
