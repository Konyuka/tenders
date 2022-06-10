<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;
use App\Models\Invoice;
use Safaricom\Mpesa\Mpesa;
use App\Models\Payments;
use App\Meta;
use Carbon\Carbon;
// use App\Http\Controllers\DateTime;
use DateTime;
use DB;

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
        // $posts = Post::all();
        // $posts = Post::take(6)->get();
        $posts = Post::latest()->limit(6)->get();

        // return Inertia::render('Landings');
        Meta::addMeta('title', 'Bidders Portal Tenders Kenya');
        Meta::addMeta('description', 'Tenders in Kenya | Government Tenders | Free Tenders Kenya | Public Tenders Kenya | Open tenders | Bidding Kenya | Kenya Tenders Today');
        return Inertia::render('Landing', ['allPosts' => $posts]);
    }

    public function selected($slug)
    {
        return Inertia::render('Selected', [

           'post' => Post::where('_id', '=', $slug)->first(),
           'Status' => ''
       ]);
    }

    public function free($slug)
    {
        return Inertia::render('Unlock', [
            'post' => Post::where('_id', '=', $slug)->first(),
            'status' => 'Unlocked',
            'transId' => null,
            'payment' => null,
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
        $clientInvoice = $payment->account;
        $clientEmail = $payment->user_email;
        $clientName = urlencode($payment->user_name);

        // return  dd($clientName);
        if($payment->email_sent == 0){

        }

        if($payment->sms_sent == 0){
            // return dd('sending');

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://portal.zettatel.com/SMSApi/send?userid=textduka&password=Ht7WGsX2&mobile={$clientNumber}&msg=Thank+you+{$clientName}+for+the+purchase%21+Your+invoice+number+is+{$clientInvoice}.+Tender+and+Invoice+details+have+been+mailed+to+the+submitted+email+{$clientEmail}.+Thank+you+for+choosing+Bidders+Portal&senderid=Bids-Portal&msgType=text&duplicatecheck=true&output=json&sendMethod=quick",
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

        return Inertia::render('Unlocked', [
           'post' => Post::where('_id', '=', $payment->info)->first(),
           'status' => 'Unlocked',
           'transId' => $slug,
           'payment' => $payment,

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
        $posts = Post::latest()->get();
        return Inertia::render('Listing', ['Posts' => json_decode($posts, true)]);
    }

    public function pricing($slug)
    {
        if($slug==150){
            $from = new DateTime();
            $to = new DateTime('-10 day');
            $posts = Post::select("*")
            ->whereBetween('created_at', [$to, $from])
            ->latest()->get();
        }else if($slug==100){
            $from = new DateTime('-10 day');
            $to = new DateTime('-20 day');
            $posts = Post::select("*")
            ->whereBetween('created_at', [$to, $from])
            ->latest()->get();
        }else if($slug==50){
            $from = new DateTime('-20 day');
            $to = new DateTime('-30 day');
            $posts = Post::select("*")
            ->whereBetween('created_at', [$to, $from])
            ->latest()->get();
        }

        return Inertia::render('Listing', [
            'Posts' => json_decode($posts, true),
            'Amount' => $slug
        ]);
    }

    public function blogs()
    {
        return Inertia::render('Blog',);
    }

    public function search()
    {

        // $key = \Request::get('payload');
        $key = \Request::get('keyword');
        $region = \Request::get('region');
        $entity = \Request::get('entity');
        $number = \Request::get('number');
        $price = \Request::get('price');
        $closing = \Request::get('closing');

        $search = Post::where('title', 'like', '%' . $key . '%')
                ->orWhere('tender_brief', 'like', '%' . $key . '%')
                ->orWhere('funded_by', 'like', '%' . $key . '%')
                ->orWhere('country', 'like', '%' . $key . '%')
                ->orWhere('work_detail', 'like', '%' . $key . '%')
                ->orWhere('address', 'like', '%' . $region . '%')
                ->orWhere('tender_number', 'like', '%' . $number . '%')
                ->orWhere('purchasing_authority', 'like', '%' . $entity . '%')
                ->orWhere('tender_brief', 'like', '%' . $entity . '%')
                ->orWhere('funded_by', 'like', '%' . $entity . '%')
                ->orWhere('address', 'like', '%' . $entity . '%')
                ->latest()->get();

        return Inertia::render('Listing', ['Posts' => json_decode($search, true)]);
    }

    public function invoice(Request $request)
    {
        // return dd( json_decode($request) );
        $post = $request->post;
        $post_id = $post['_id'];

        $user = $request->user;
        $user_phone = $user['userPhone'];
        $user_email = $user['userEmail'];
        $user_name = $user['userName'];

        $amount = $request->amount;

        $invoice = new Invoice();
        $lastInvoiceID = $invoice->orderBy('invoice_number', 'DESC')->pluck('invoice_number')->first();
        $newInvoiceID = $lastInvoiceID + 1;
        $current_date_time = Carbon::now()->timestamp;
        $invoiceRecord = Invoice::
                    //   where('unique_timestamp', '=', $current_date_time)
                    //   where('invoice_number', '=', $newInvoiceID)
                      where('post_id', '=', $post_id)
                    ->where('user_phone', '=', $user_phone)
                    ->where('user_email', '=', $user_email)
                    ->first();
        // return dd(\json_decode($invoiceRecord, true));
        if($invoiceRecord != null){
           $paymentStatus = $invoiceRecord->payment_status;
           $createdInvoice = $invoiceRecord;
        }
        if($invoiceRecord != null && $paymentStatus == 0){
            $invoicePaid= false;
        }else if($invoiceRecord != null && $paymentStatus == 1){
            $invoicePaid = true;
        }
        else{
            $createdInvoice =  Invoice::create([
              "invoice_number"=>$newInvoiceID,
              "unique_timestamp"=>$current_date_time,
              "amount"=>$amount,
              "post_id"=>$post_id,
              "user_phone"=>$user_phone,
              "user_email"=>$user_email,
              "user_name"=>$user_name,
              "payment_status"=>false,
            ]);
            $invoicePaid= false;
        };

        return Inertia::render('Invoice', [
            // 'post' => $request->post,
            'post' => $post,
            'user' => $user,
            'invoiceStatus' => $invoicePaid,
            'invoiceDetails' => json_decode($createdInvoice),

        ]);
    }

    public function checkout(Request $request, $slugs)
    {
        // return dd($request->membership);
        // if ($a > $b) {
        //     echo "a is bigger than b";
        // } elseif ($a == $b) {
        //     echo "a is equal to b";
        // } else {
        //     echo "a is smaller than b";
        // }

        return Inertia::render('Checkout', [
           'post' => Post::where('_id', '=', $slugs)->first(),
           'membership' => $request->membership,
           'user' => $request->user
       ]);

    }

    public function getAccessToken()
    {
        $url = env('MPESA_ENV') == 'sandbox'
        // ? 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials'
        ? 'https://api.safaricom.co.ke/oauth/v1/generate'
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

        $url = '/c2b/v2/registerurl';
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
        // $url = 'https://sandbox.safaricom.co.ke/mpesa/' . $url;
        $url = 'https://api.safaricom.co.ke/mpesa/' . $url;
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
            'Msisdn' => '254716202298',
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
