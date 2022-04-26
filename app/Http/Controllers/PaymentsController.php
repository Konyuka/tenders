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
        $post_id = $request->post_id;
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
                        ->first();
                    //    return dd($transaction);
        if ($transaction){
            return Inertia::render('Selected', [
                'post' => Post::where('_id', '=', $post_id)->first(),
                'transId' => $transaction->trans_id,
                'status' => 'Success'
            ]);
            // return dd('Paid');
        }else if($transactionWaiting){
            return Inertia::render('Checkout', [
                'post' => Post::where('_id', '=', $post_id)->first(),
                'transId' => $transactionWaiting->trans_id,
                'status' => 'Waiting'
            ]);
        }else if($transactionFail){
            return Inertia::render('Checkout', [
                'post' => Post::where('_id', '=', $post_id)->first(),
                'transId' => $transactionFail->trans_id,
                'status' => 'Cancelled'
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
        $request->validate(['phone'=>'required'], ['amount'=>'required'], ['post'=>'required']);

        $phone=$request->phone;
        $amount=$request->amount;
        $post=$request->post;
        // $phone="254716202298";
        // $phone="254". substr($phone,1);
        $mpesa = new Mpesa();
        $BusinessShortCode=env('MPESA_STK_SHORTCODE');
        $LipaNaMpesaPasskey=env('MPESA_PASSKEY');
        $TransactionType="CustomerPayBillOnline";
        $Amount=$amount;
        // $PartyA="254716202298";
        $PartyA=$phone;//"254724806056";
        $PartyB=env('MPESA_STK_SHORTCODE');
        $PhoneNumber=$phone;
        // $CallBackURL="http://dairyapp1-env.na3uctjjui.us-east-2.elasticbeanstalk.com/confirm/ebook/payment";
        $CallBackURL=env('MPESA_TEST_URL'). '/api/stkpush';
        // $CallBackURL=env('MPESA_TEST_URL'). '/confirm/ebook/payment';
        $AccountReference="Bidders Portal";
        $TransactionDesc="Bidders Portal";
        $Remarks="Bidders Portal Kenya";

        $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
        $stkPushSimulation=json_decode($stkPushSimulation);
        // Log::info('Validation endpoint hit');
        // Log::info($request->all());
        // Log::info($stkPushSimulation->all());
        // return dd($stkPushSimulation);
        $result_code =$stkPushSimulation->ResponseCode ?? null;

        if (isset($result_code) and $result_code=="0"){
            $trans_id =$stkPushSimulation->MerchantRequestID;

            Payments::create([
            //   "user_id"=>auth()->user()->id,
              "trans_id"=>$trans_id,
              "phone"=>$PhoneNumber,
              "amount"=>$Amount,
              "info"=>$post,
              "completed"=>false,
              "waiting"=> true,
            //   "info"=>"ebook/".$request->ebook_id
            ]);
            // $this->setTransaction($trans_id, $post);
            // redirect()->action([HomeController::class, 'index']);
            // return Redirect::route('checkout');
            // return Inertia::render('Success', [
            //     'Payment' => $trans_id,
            // ]);
            // return back()->with('success','Please complete transaction on your phone by entering your MPESA pin');
        }

        // dd($stkPushSimulation);
        $error_msg = $stkPushSimulation->errorMessage ?? '';
        return back()->withInput()->with('failed','We could not complete this transaction please try again. ' .$error_msg);

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
