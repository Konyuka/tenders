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
            return Inertia::render('Selected', [
                'post' => Post::where('_id', '=', $post_id)->first(),
                'transId' => $transaction->trans_id,
                'status' => 'Success'
            ]);
            // return dd('Paid');
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
        // return Inertia::render('Checkout', [
        //         'post' => Post::where('_id', '=', $post_id)->first(),
        //         // 'transId' => $transactionFail->trans_id,
        //         'status' => ''
        //     ]);



        // dd($transaction);
        // return dd($transaction->trans_id);
        // if(){
        // }
    //     $paymentlogId = $transaction->trans_id;

    //     return Inertia::render('Selected', [
    //        'post' => Post::where('_id', '=', $post_id)->first(),
    //        'transId' => $paymentlogId

    //    ]);
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
        $post_id=$request->post['_id'];
        $user=$request->user;

        $mpesa = new Mpesa();
        $BusinessShortCode=env('MPESA_STK_SHORTCODE');
        $LipaNaMpesaPasskey=env('MPESA_PASSKEY');
        $TransactionType="CustomerPayBillOnline";
        $Amount=$amount;
        $PartyA=$phone;
        $PartyB=env('MPESA_STK_SHORTCODE');
        $PhoneNumber=$phone;
        $CallBackURL=env('MPESA_TEST_URL'). '/api/stkpush';
        // $CallBackURL="http://dairyapp1-env.na3uctjjui.us-east-2.elasticbeanstalk.com/confirm/ebook/payment";
        // $CallBackURL=env('MPESA_TEST_URL'). '/confirm/ebook/payment';
        $AccountReference="Bidders Portal";
        $TransactionDesc="Bidders Portal Account";
        $Remarks="Bidders Portal Kenya";

        $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
        $stkPushSimulation=json_decode($stkPushSimulation);
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
        }

        $error_msg = $stkPushSimulation->errorMessage ?? '';
        // return dd('done');
        $restart = $request->restartTrans;

        if($restart == true){
            $statusClear = '';
        }else{
            $statusClear = '';
        }

        return Inertia::render('Invoice', [
            // 'post' => $request->post,
            'post' => $post,
            'user' => $user,
            'status' => $statusClear
            // 'invoiceStatus' => $invoicePaid,
            // 'invoiceDetails' => json_decode($createdInvoice),

        ]);
        // return back()->withInput()->with('failed','We could not complete this transaction please try again. ' .$error_msg);

        // return Redirect::route('clients.show, $id')->with( ['data' => $data] );

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
