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



class PaymentsController extends Controller
{

    public function index()
    {
        //
    }

    public function triggerStk(Request $request)
    {
        //stk push here
        $request->validate(['phone'=>'required'], ['amount'=>'required']);

        $phone=$request->phone;
        $amount=$request->amount;
        $phone="254716202298";
        // $phone="254". substr($phone,1);
        $mpesa = new Mpesa();
        $BusinessShortCode=env('MPESA_STK_SHORTCODE');
        $LipaNaMpesaPasskey=env('MPESA_PASSKEY');
        $TransactionType="CustomerPayBillOnline";
        $Amount=$amount;
        $PartyA="254716202298";
        // $PartyA=$phone;//"254724806056";
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
        Log::info('Validation endpoint hit');
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
            //   "info"=>"ebook/".$request->ebook_id
            ]);
            // return Redirect::route('checkout');
            // return Inertia::render('Success', [
            //     'Payment' => '1',
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
                $payment->save();
                $info=$payment->info;
                $data= explode("/", $info);
                $id=$data[1];
                // EbookSubscription::create(['user_id'=>$payment->user_id,'ebook_id'=>$id]);
            }
        }
    }

}
