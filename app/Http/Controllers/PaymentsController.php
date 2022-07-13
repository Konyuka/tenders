<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Safaricom\Mpesa\Mpesa;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use App\Models\Post;
use Carbon\Carbon;


class PaymentsController extends Controller
{

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

    public function setTransactionDetails(Request $request)
    {
        // return dd(json_decode($request));
        $payment_number = $request->payment_number;
        $invoicePaid = $request->invoicePaid;
        $invoiceDetails = $request->invoiceDetails;
        $user = $request->user;
        $restart = $request->restart;
        $invoiceNumber = $request->invoiceNumber;

        if($invoicePaid==1){
            $paidStatus = true;
        }else {
            $paidStatus = false;
        }


        $post_id = $request->post_id;

        $transactionDetails = Payments::where('info', '=', $post_id )
        ->where('phone', '=', $payment_number)
        ->where('completed', '=', false)
        ->where('account', '=', $invoiceNumber)
        ->first();

        // return dd($transactionDetails);

        if($restart==true){
                $transactionDetails->restart=true;
                $transactionDetails->save();
        }else{
                // $transaction->restart=false;
                // $transaction->save();
        }

        $transaction = Payments::where('info', '=', $post_id )
                        ->where('phone', '=', $payment_number)
                        ->where('completed', '=', true)
                        ->where('waiting', '=', false)
                        ->first();

        $transactionWaiting = Payments::where('info', '=', $post_id )
                        ->where('phone', '=', $payment_number)
                        ->where('completed', '=', false)
                        ->where('waiting', '=', true)
                        ->first();
        $transactionFail = Payments::where('info', '=', $post_id )
                        ->where('phone', '=', $payment_number)
                        ->where('completed', '=', false)
                        ->where('waiting', '=', false)
                        ->where('restart', '=', false)
                        ->first();

        $transactionRestart = Payments::where('info', '=', $post_id )
                        ->where('phone', '=', $payment_number)
                        ->where('completed', '=', false)
                        ->where('waiting', '=', false)
                        ->where('restart', '=', true)
                        ->first();
                    //    return dd($transaction);
        if ($transaction!=null){
            // return Inertia::render('Unlocked', [
            //         'post' => Post::where('_id', '=', $post_id)->first(),
            //         'status' => 'Unlocked',
            //         'transId' => $post_id,
            //         'payment' => null,
            // ]);

            return Inertia::render('Selected', [
                'post' => Post::where('_id', '=', $post_id)->first(),
                'transId' => $transaction->trans_id,
                'status' => 'Success'
            ]);

        }else if($transactionWaiting!=null){
            return Inertia::render('Invoice', [
                'post' => Post::where('_id', '=', $post_id)->first(),
                'user' => $user,
                'transId' => $transactionWaiting->trans_id,
                'status' => 'Waiting',
                'invoiceStatus' => $paidStatus,
                'invoiceDetails' => $invoiceDetails,
            ]);
        }else if($transactionFail!=null){
            return Inertia::render('Invoice', [
                'post' => Post::where('_id', '=', $post_id)->first(),
                'user' => $user,
                'transId' => $transactionFail->trans_id,
                'status' => 'Cancelled',
                'invoiceStatus' => $invoicePaid,
                'invoiceDetails' => $invoiceDetails,
            ]);
        }else if($transactionRestart!=null){
                return Inertia::render('Invoice', [
                'post' => Post::where('_id', '=', $post_id)->first(),
                'user' => $user,
                'transId' => $transactionDetails->trans_id,
                'status' => '',
                'invoiceStatus' => $invoicePaid,
                'invoiceDetails' => $invoiceDetails,
            ]);
        }

    }

    public function setTransaction($trans_id)
    {
        // Log::info('setTransactionDetails');
        // Log::info($trans_id);
        // Log::info($post);
        $mpesa=new Mpesa();
        $callBackData = $mpesa->getDataFromCallback();
        $object = json_decode($callBackData);
        dump($request->post_id);
        dump($object);
        return;
        $trans_id= $object->Body->stkCallback->MerchantRequestID;
        return  dd($request->trans_id);
        // return Redirect::route('confirm', $post);
        // return redirect()->route('confirm', [$post]);
        // return Inertia::render('Checkout', [
        //     'Status' => $trans_id,
        //     // 'Status' => 'Cancelled'
        //     // 'Status' => Inertia::lazy(fn () => $trans_id),
        // ]);
    }

    public function stkPush(Request $request)
    {
        $request->validate(['phone'=>'required'],['amount'=>'required'],['user_name'=>'required'],['account'=>'required'],['user_phone'=>'required'],['user_email'=>'required'],['post'=>'required'],['user'=>'required']);

        $phone=$request->phone;
        $amount=$request->amount;
        $userName=$request->user_name;
        $account=$request->account;
        $userPhone=$request->user_phone;
        $userEmail=$request->user_email;
        $post=$request->post;
        $post_id=$request->post['_id'];
        $user=$request->user;

        $url = 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $curl_post_data = [
            'BusinessShortCode' =>env('MPESA_STK_SHORTCODE'),
            'Password' => $this->lipaNaMpesaPassword(),
            'Timestamp' => Carbon::rawParse('now')->format('YmdHms'),
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $amount,
            'PartyA' => $phone,
            'PartyB' => env('MPESA_STK_SHORTCODE'),
            'PhoneNumber' => $phone,
            'CallBackURL' => env('MPESA_TEST_URL'). '/api/stkpush',
            'AccountReference' => "Bidders Portal",
            'TransactionDesc' => "lipa Na M-PESA"
        ];
        $data_string = json_encode($curl_post_data);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$this->newAccessToken()));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);
        $stkPushSimulation=json_decode($curl_response);
        return $stkPushSimulation;
        return redirect('/confirm');



     }

    public function triggerStk(Request $request)
    {
        //stk push here
        // return  dd($request);
        // return dd( json_decode($request) );

        $request->validate(['phone'=>'required'],['amount'=>'required'],['user_name'=>'required'],['account'=>'required'],['user_phone'=>'required'],['user_email'=>'required'],['post'=>'required'],['user'=>'required']);

        $phone=$request->phone;
        $amount=$request->amount;
        $userName=$request->user_name;
        $account=$request->account;
        $userPhone=$request->user_phone;
        $userEmail=$request->user_email;
        $post=$request->post;

        // $payment_number = $request->payment_number;
        // $invoicePaid = $request->invoicePaid;
        // $invoiceDetails = $request->invoiceDetails;
        // $user = $request->user;
        // $invoiceNumber = $request->invoiceNumber;


        if(is_string($post)){
            $post_id=$post;
        }else{
            $post_id=$request->post['_id'];
        };
        $user=$request->user;

        // return dd($post_id);

        $mpesa = new Mpesa();
        $BusinessShortCode=env('MPESA_STK_SHORTCODE');
        // $LipaNaMpesaPasskey=$this->lipaNaMpesaPassword();
        $LipaNaMpesaPasskey=env('MPESA_PASSKEY');
        $TransactionType="CustomerPayBillOnline";
        $Amount=$amount;
        $PartyA=$phone;
        // $PartyA='254722326662';
        $PartyB=env('MPESA_STK_SHORTCODE');
        // $PhoneNumber='254722326662';
        $PhoneNumber=$phone;
        $CallBackURL=env('MPESA_TEST_URL'). '/api/stkpush';
        // $CallBackURL="https://tenderske.herokuapp.com/api/stkpush";
        $AccountReference=$account;
        $TransactionDesc="Bidders Portal Account";
        $Remarks="Bidders Portal Kenya";

        $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
        $stkPushSimulation=json_decode($stkPushSimulation);
        // return $stkPushSimulation;

        $result_code =$stkPushSimulation->ResponseCode ?? null;
        if (isset($result_code) and $result_code=="0"){
            $trans_id =$stkPushSimulation->MerchantRequestID;

            Payments::create([
              "user_name"=>$userName,
              "trans_id"=>$trans_id,
              "amount"=>$Amount,
              "phone"=>$PhoneNumber,
              "account"=>$account,
              "info"=>$post_id,
              "user_phone"=>$userPhone,
              "user_email"=>$userEmail,
              "completed"=>false,
              "waiting"=> true,
            ]);

            // return Inertia::render('Invoice', [
            // // 'post' => $request->post,
            //     'post' => $post,
            //     'user' => $user,
            //     'status' => $statusClear
            //     // 'invoiceStatus' => $invoicePaid,
            //     // 'invoiceDetails' => json_decode($createdInvoice),

            // ]);
            // return dd($request->all());
            // return dd($request);
            // $this->setTransactionDetails($request->all());
            // $validator = $this->setTransactionDetails($request);
            // echo $validator;
            // return $this->setTransactionDetails($request, $request->all());

            // return Inertia::render('Unlocked', [
            //         'post' => Post::where('_id', '=', $post_id)->first(),
            //         'status' => 'Unlocked',
            //         'transId' => $post_id,
            //         'payment' => null,
            // ]);

        }

            $error_msg = $stkPushSimulation->errorMessage ?? '';
            // return dd('done');
            $restart = $request->restartTrans;

            if($restart == true){
                $statusClear = '';
            }else{
                $statusClear = '';
            }

            // $validator = $this->setTransactionDetails($request);
            // echo $validator;
            // return $this->setTransactionDetails($request->all());

            return Inertia::render('Invoice', [
                // 'post' => $request->post,
                'post' => $post,
                'user' => $user,
                'status' => $statusClear
                // 'invoiceStatus' => $invoicePaid,
                // 'invoiceDetails' => json_decode($createdInvoice),

            ]);

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
        return $response;
    }

    public function newAccessToken()
    {
        $consumer_key=env('MPESA_CONSUMER_KEY');
        $consumer_secret=env('MPESA_CONSUMER_SECRET');
        $credentials = base64_encode($consumer_key.":".$consumer_secret);
        // $url = "https://api.safaricom.co.ke/oauth/v1/generate";
        $url = "https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";


        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Basic ".$credentials,"Content-Type:application/json"));
        curl_setopt($curl, CURLOPT_HEADER,false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        $access_token=json_decode($curl_response);
        curl_close($curl);

        return $access_token->access_token;

    }

    public function getAccessToken()
    {
        $url = env('MPESA_ENV') == 'sandbox'
        ? 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials'
        // : 'https://api.safaricom.co.ke/oauth/v1/generate';
        : 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
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

    public function lipaNaMpesaPassword()
    {
        //timestamp
        $timestamp = Carbon::rawParse('now')->format('YmdHms');
        //passkey
        $passKey =env('MPESA_PASSKEY');
        $businessShortCOde =env('MPESA_SHORTCODE');
        //generate password
        $mpesaPassword = base64_encode($businessShortCOde.$passKey.$timestamp);

        return $mpesaPassword;

    }

    public function triggerC2B(Request $request)
    {


        $request->validate(['phone'=>'required'],['amount'=>'required'],['user_name'=>'required'],['account'=>'required'],['user_phone'=>'required'],['user_email'=>'required'],['post'=>'required'],['user'=>'required']);

        $phone=$request->phone;
        $amount=$request->amount;
        $userName=$request->user_name;
        $account=$request->account;
        $userPhone=$request->user_phone;
        $userEmail=$request->user_email;
        $post=$request->post;
        $post_id=$request->post['_id'];
        $user=$request->user;

        $mpesa= new \Safaricom\Mpesa\Mpesa();
        $b2bTransaction=$mpesa->c2b($ShortCode, $CommandID, $Amount, $Msisdn, $BillRefNumber );

        $body = array(
            'ShortCode' => env('MPESA_SHORTCODE'),
            'Msisdn' => $phone,
            'Amount' => $request->amount,
            'BillRefNumber' => $request->account,
            'CommandID' => 'CustomerPayBillOnline'
        );
        $url =  '/c2b/v2/simulate';
        $response = $this->makeHttp($url, $body);
        return $response;

        $result_code = json_decode($response, true)['ResponseCode'] ?? null;
        $OriginatorConversationID = json_decode($response, true)['OriginatorCoversationID'] ?? null;

        if (isset($result_code) and $result_code=="0"){
            $trans_id =$OriginatorConversationID;

            Payments::create([
              "user_name"=>$userName,
              "trans_id"=>$trans_id,
              "amount"=>$amount,
              "phone"=>$phone,
              "account"=>$account,
              "info"=>$post_id,
              "user_phone"=>$userPhone,
              "user_email"=>$userEmail,
              "completed"=>false,
              "waiting"=> true,
            ]);
        }

        // return $response;

        // $error_msg = $response->errorMessage ?? '';
        // $restart = $request->restartTrans;

        // if($restart == true){
        //     $statusClear = '';
        // }else{
        //     $statusClear = 'WaitingC2B';
        // }


        return Inertia::render('Invoice', [
            // 'post' => $request->post,
            'post' => $post,
            'user' => $user,
            'status' => ''
            // 'status' => $statusClear
            // 'invoiceStatus' => $invoicePaid,
            // 'invoiceDetails' => json_decode($createdInvoice),

        ]);

    }

    public function makeHttp($url, $body)
    {
        // $url = 'https://mpesa-reflector.herokuapp.com' . $url;
        $url = 'https://api.safaricom.co.ke/mpesa/' . $url;
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                    CURLOPT_URL => $url,
                    CURLOPT_HTTPHEADER => array('Content-Type:application/json','Authorization: Bearer '. $this->newAccessToken()),
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => json_encode($body)
                )
        );
        $curl_response = curl_exec($curl);
        curl_close($curl);
        return $curl_response;
    }

    public function MpesaRes(Request $request)
     {
        $response = json_decode($request->getContent());

        $trn = new MpesaTransaction;
        $trn->response = json_encode($response);
        $trn->save();
        // return dd();
     }

    public function confirm(Request $request)
    {
        $mpesa=new Mpesa();
        $callBackData = $mpesa->getDataFromCallback();
        $object = json_decode($callBackData);
        $trans_id= $object->Body->stkCallback->MerchantRequestID;
        $result_code= $object->Body->stkCallback->ResultCode;
        if ($result_code==0){
            $payment = Payments::where(['trans_id'=>$trans_id])->first();
            if ($payment){
                $payment->completed=true;
                $payment->waiting=false;
                $payment->save();
                $info=$payment->info;
                $data= explode("/", $info);
                $id=$data[1];
                // EbookSubscription::create(['user_id'=>$payment->user_id,'ebook_id'=>$id]);
            }
        }
    }

}