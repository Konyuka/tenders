<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\payments\mpesa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Payments;
use Safaricom\Mpesa\Mpesa;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;



class MpesaResponseController extends Controller
{
    public function validation(Request $request){
        Log::info('Validation endpoint hit');
        Log::info($request->all());

        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }

    public function confirmation(Request $request){
        Log::info('Confirmation endpoint hit');
        Log::info($request->all());

        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];

        // $mpesa=new Mpesa();
        // $callBackData = $mpesa->getDataFromCallback();
        // $object = json_decode($callBackData);
        // return $object;

        // $trans_id= $object->Body->stkCallback->MerchantRequestID;
        // $payment = Payments::where(['trans_id'=>$trans_id])->first();

        // if ($payment){
        //         $payment->completed=true;
        //         $payment->waiting=false;
        //         $payment->save();
        //         $post=$payment->info;
        //     }

        // $content=json_decode($request->getContent(), true);
        // Payments::create([
        //       "user_name"=>$userName,
        //       "trans_id"=>$trans_id,
        //       "amount"=>$Amount,
        //       "phone"=>$PhoneNumber,
        //       "account"=>$account,
        //       "info"=>$post_id,
        //       "user_phone"=>$userPhone,
        //       "user_email"=>$userEmail,
        //       "completed"=>false,
        //       "waiting"=> true,
        //     ]);

        // return [
        //     'ResultCode' => 0,
        //     'ResultDesc' => 'Accept Service',
        //     'ThirdPartyTransID' => rand(3000, 10000)
        // ];
    }

    public function transactionStatusResponse(Request $request){
        Log::info('transactionStatusResponse  endpoint hit');
        Log::info($request->all());
        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }

    public function stkPush(Request $request){
        // return dd($request->all());
        Log::info('STK Push endpoint hit');
        Log::info($request->all());

        $mpesa=new Mpesa();
        $callBackData = $mpesa->getDataFromCallback();
        $object = json_decode($callBackData);
        $trans_id= $object->Body->stkCallback->MerchantRequestID;
        $result_code= $object->Body->stkCallback->ResultCode;
        $result_description= $object->Body->stkCallback->ResultDesc;
        if ($result_code==0){
            $payment = Payments::where(['trans_id'=>$trans_id])->first();
            if ($payment){
                $payment->completed=true;
                $payment->waiting=false;
                $payment->save();
                $post=$payment->info;
                // return Inertia::render('Success', [
                //     'Payment' => true,
                // ]);
                // $info=$payment->info;
                // $data= explode("/", $info);
                // $id=$data[1];
                // EbookSubscription::create(['user_id'=>$payment->user_id,'ebook_id'=>$id]);
            }
        }else if($result_code==1032){
                $payment = Payments::where(['trans_id'=>$trans_id])->first();
                $payment->completed=false;
                $payment->waiting=false;
                $payment->save();
                $post=$payment->info;
        }


        // return dd($request);
        // return redirect()->route('success');
        // return Inertia::render('Success', ['Status' => 'Cancelled' ]);

        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }

    public function b2cCallback(Request $request){
        Log::info('B2C endpoint hit');
        Log::info($request->all());
        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }

    public function transactionReversal(Request $request){
        Log::info('transactionReversal  endpoint hit');
        Log::info($request->all());
        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }



}

