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

use function PHPUnit\Framework\isNull;

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
        $posts = $request->posts;

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
                        // ->where('restart', '=', false)
                        ->first();

        $transactionRestart = Payments::where('info', '=', $post_id )
                        ->where('phone', '=', $payment_number)
                        ->where('completed', '=', false)
                        ->where('waiting', '=', false)
                        ->where('restart', '=', true)
                        ->first();


        if ($transaction!=null){

            if($posts != null){


                return Inertia::render('ViewCart', [
                    'Tenders' => $posts,
                    'transId' => $transaction->trans_id,
                    'status' => 'Success',
                    'email' => $user['userEmail'],
                ]);
            }else{
                return Inertia::render('Selected', [
                    'post' => Post::where('_id', '=', $post_id)->first(),
                    'transId' => $transaction->trans_id,
                    'status' => 'Success'
                ]);
            }
        }
        
        if($transactionWaiting!=null){
            if($posts != null){
                // Log::info($posts);
                return Inertia::render('InvoiceMultiple', [
                    'posts' => $posts,
                    'user' => $user,
                    'transId' => $transactionWaiting->trans_id,
                    'status' => 'Waiting',
                    'invoiceStatus' => $paidStatus,
                    'invoiceDetails' => $invoiceDetails,
                ]);
            }else{
                
                return Inertia::render('Invoice', [
                    'post' => Post::where('_id', '=', $post_id)->first(),
                    'user' => $user,
                    'transId' => $transactionWaiting->trans_id,
                    'status' => 'Waiting',
                    'invoiceStatus' => $paidStatus,
                    'invoiceDetails' => $invoiceDetails,
                ]);
            }
        }
        
        if($transactionFail!=null){
            if($posts != null){
                return Inertia::render('InvoiceMultiple', [
                    'posts' => $posts,
                    'user' => $user,
                    'transId' => $transactionFail->trans_id,
                    'status' => 'Cancelled',
                    'invoiceStatus' => $paidStatus,
                    'invoiceDetails' => $invoiceDetails,
                ]);
            }else{
                return Inertia::render('Invoice', [
                    'post' => Post::where('_id', '=', $post_id)->first(),
                    'user' => $user,
                    'transId' => $transactionFail->trans_id,
                    'status' => 'Cancelled',
                    'invoiceStatus' => $invoicePaid,
                    'invoiceDetails' => $invoiceDetails,
                ]);
            }
        }
        
        if($transactionRestart!=null){
                if($posts != null){
                    return Inertia::render('InvoiceMultiple', [
                        'posts' => $posts,
                        'user' => $user,
                        'transId' => $transactionDetails->trans_id,
                        'status' => '',
                        'invoiceStatus' => $paidStatus,
                        'invoiceDetails' => $invoiceDetails,
                    ]);
                }else{
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

    }


    public function triggerStk(Request $request)
    {

        $request->validate(['phone'=>'required'],['amount'=>'required'],['user_name'=>'required'],['account'=>'required'],['user_phone'=>'required'],['user_email'=>'required'],['post'=>'required'],['user'=>'required']);

        $phone=$request->phone;
        $amount=$request->amount;
        $userName=$request->user_name;
        $account=$request->account;
        $userPhone=$request->user_phone;
        $userEmail=$request->user_email;
        $post=$request->post;
        $posts=$request->posts;

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

        
        $mpesa = new Mpesa();
        $BusinessShortCode=env('MPESA_STK_SHORTCODE');
        $LipaNaMpesaPasskey=env('MPESA_PASSKEY');
        $TransactionType="CustomerPayBillOnline";
        // $Amount=1;
        $Amount=1500;
        $PartyA=$phone;
        $PartyB=env('MPESA_STK_SHORTCODE');
        $PhoneNumber=$phone;
        $CallBackURL=env('MPESA_TEST_URL').'/api/stkpush';
        $AccountReference=$account;
        $TransactionDesc="Bidders Portal Account";
        $Remarks="Bidders Portal Kenya";

        // return dd($CallBackURL);


        $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
        $stkPushSimulation=json_decode($stkPushSimulation);
        $result_code = $stkPushSimulation->ResponseCode ?? null;
        if (isset($result_code) and $result_code=="0"){
            $trans_id =$stkPushSimulation->MerchantRequestID;

            if(Payments::where('info', '=', $post_id)->where('phone', '=', $phone)->where('completed', '!=', true)->exists()){
                Payments::where('info', '=', $post_id)->where('phone', '=', $phone)->where('completed', '!=', true)
                ->update([
                    'waiting' => true,
                    'trans_id' => $trans_id,
                ]);
            }else{
                Payments::create([
                  "user_name"=>$userName,
                  "trans_id"=>$trans_id,
                  "amount"=>$Amount,
                  "phone"=> $phone,
                  "account"=>$account,
                  "info"=>$post_id,
                  "user_phone"=>$userPhone,
                  "user_email"=>$userEmail,
                  "completed"=>false,
                  "waiting"=> true,
                ]);
            }

        }

        // $error_msg = $stkPushSimulation->errorMessage ?? '';
        $restart = $request->restartTrans;

        if($restart == true){
            $statusClear = '';
        }else{
            $statusClear = '';
        }

        // return Inertia::render('Invoice', [
        //     // 'post' => $request->post,
        //     'post' => $post,
        //     'user' => $user,
        //     'status' => $statusClear
        //     // 'invoiceStatus' => $invoicePaid,
        //     // 'invoiceDetails' => json_decode($createdInvoice),

        // ]);


        if(is_string($post)){

            return Inertia::render('Invoice', [
                // 'post' => $request->post,
                'post' => $post,
                'user' => $user,
                'status' => $statusClear
                // 'invoiceStatus' => $invoicePaid,
                // 'invoiceDetails' => json_decode($createdInvoice),

            ]);
        }else{
            return Inertia::render('InvoiceMultiple', [
                'posts' => $posts,
                'user' => $user,
                'status' => $statusClear,
                // 'transId' => $transactionWaiting->trans_id,
                // 'invoiceStatus' => $paidStatus,
                // 'invoiceDetails' => $invoiceDetails,
            ]);

        }


    }

}