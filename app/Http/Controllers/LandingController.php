<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Invoice;
use Safaricom\Mpesa\Mpesa;
use App\Models\Payments;
use App\Models\Blog;
use App\Meta;
use Carbon\Carbon;
// use App\Http\Controllers\DateTime;
use DateTime;
// use DB;
use Illuminate\Support\Facades\DB;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use App\Mail\BiddersEmail;
use Illuminate\Support\Facades\Mail;
use Dompdf\Dompdf;

include('pdflayerController.php');

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use File;
use Spatie\Browsershot\Browsershot;


class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::
        select(['_id', 'created_at', 'expiry', 'tender_brief'])
        ->latest()
        ->limit(6)
        ->get();

        // return dd(json_decode($posts, true));

        // return Inertia::render('Landings');
        Meta::addMeta('title', 'Bidders Portal Tenders Kenya');
        Meta::addMeta('description', 'Tenders in Kenya | Government Tenders | Free Tenders Kenya | Public Tenders Kenya | Open tenders | Bidding Kenya | Kenya Tenders Today');
        return Inertia::render('Landing', ['allPosts' => $posts]);
    }

    public function indexSubscribed($slug)
    {

        $posts = Post::
        select(['_id', 'created_at', 'expiry', 'tender_brief'])
        ->latest()
        ->limit(6)
        ->get();

        $user = auth()->user();
       
        return Inertia::render('Landing', [
            'allPosts' => $posts,
            'subscription' => $user->membership,
            'confirmMessage' => $slug,
        ]);
    }

    public function viewCart(Request $request)
    {
        $bodyContent = json_decode($request->getContent());
        $tenders = [];
        foreach ($bodyContent as $tenderID ){
            $tender = Post::where('_id', $tenderID)->first();
            array_push($tenders, $tender);
        }
        return Inertia::render('ViewCart', [
            'Tenders' => $tenders,
        ]);
    }

    // public function viewCart()
    // {
        
    //     return Inertia::render('ViewCart', [
    //     ]);
    // }

    public function selected($slug)
    {
        return Inertia::render('Selected', [

            'post' => Post::where('_id', '=', $slug)->first(),
            'Status' => ''
        ]);
    }

    public function blogDetails(Request $request)
    {
        $blog = Blog::where('id', '=', $request->id)->first();
        // return dd($blog);
        return Inertia::render('Blogs/BlogTemplate', [
            'blog' => $blog,
        ]);
    }

    public function about()
    {
        return Inertia::render('About', [
        ]);
    }

    public function contacts()
    {
        return Inertia::render('Contacts', [
        ]);
    }

    public function faqs()
    {
        return Inertia::render('Faqs', [
        ]);
    }

    public function subscriptions()
    {
        return Inertia::render('Subscriptions', [
        ]);
    }

    public function free($slug)
    {
        // return dd($slug);
        return Inertia::render('Unlocked', [
            'post' => Post::where('_id', '=', $slug)->first(),
            'status' => 'Unlocked',
            'transId' => $slug,
            'payment' => null,
        ]);
    }
    

    public function toMail(Request $request)
    {
        // return dd($request);
        Mail::to($request->user['userEmail'])->send(new \App\Mail\SendMail($request));

        return Inertia::render('Unlocked', [
            // 'post' => Post::where('_id', '=', $slug)->first(),
            // 'status' => 'Unlocked',
            // 'transId' => $slug,
            // 'payment' => null,
        ]);
    }

    public function unlockMultiple(Request $request)
    {
        $payment = Payments::where('trans_id', '=', $request->transId)
            ->where('completed', '=', true)
            ->where('waiting', '=', false)
            ->first();
        $clientNumber = $payment->phone;
        $clientInvoice = $payment->account;
        $clientEmail = $payment->user_email;
        $clientName = urlencode($payment->user_name);
        $posts = $request->posts;

        // if ($payment->sms_sent == 0) {

        //     $curl = curl_init();

        //     curl_setopt_array($curl, array(
        //         CURLOPT_URL => "https://portal.zettatel.com/SMSApi/send?userid=textduka&password=Ht7WGsX2&mobile={$clientNumber}&msg=Thank+you+{$clientName}+for+the+purchase%21+Your+invoice+number+is+{$clientInvoice}.+Thank+you+for+choosing+Bidders+Portal&senderid=Bids-Portal&msgType=text&duplicatecheck=true&output=json&sendMethod=quick",
        //         // CURLOPT_URL => "https://portal.zettatel.com/SMSApi/send?userid=textduka&password=Ht7WGsX2&mobile={$clientNumber}&msg=Thank+you+{$clientName}+for+the+purchase%21+Your+invoice+number+is+{$clientInvoice}.+Tender+and+Invoice+details+have+been+mailed+to+the+submitted+email+{$clientEmail}.+Thank+you+for+choosing+Bidders+Portal&senderid=Bids-Portal&msgType=text&duplicatecheck=true&output=json&sendMethod=quick",
        //         CURLOPT_RETURNTRANSFER => true,
        //         CURLOPT_ENCODING => "",
        //         CURLOPT_MAXREDIRS => 10,
        //         CURLOPT_TIMEOUT => 30,
        //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //         CURLOPT_CUSTOMREQUEST => "GET",
        //         CURLOPT_HTTPHEADER => array(
        //             "cache-control: no-cache"
        //         ),
        //     ));

        //     $response = curl_exec($curl);
        //     $err = curl_error($curl);

        //     curl_close($curl);

        //     if ($err) {
        //         echo "cURL Error #:" . $err;
        //     } else {
        //         $sms_sent = true;
        //         $payment = Payments::where(['trans_id' => $request->transId])->first();
        //         if ($payment) {
        //             $payment->sms_sent = true;
        //             $payment->save();
        //         }
        //     }
        // }

        return Inertia::render('UnlockedMultiple', [
            'posts' => $posts,
            'status' => 'Unlocked',
            'transId' => $request->transId,
            'payment' => $payment,

        ]);
    }
    public function unlock($slug)
    {
        $user = auth()->user();

        if($user){
            if($user->membership=="Annualy"){
                $subscriptionDate = DateTime::createFromFormat('U', $user->membership_date);
                $now = new DateTime();
                $diffInYears = $now->diff($subscriptionDate)->y;

                if ($diffInYears <= 1) {
                    $payment = Payments::where('user_email', $user->email)
                      ->where('info', 'Annualy')
                      ->first();

                    return Inertia::render('Unlocked', [
                        'post' => Post::where('_id', '=', $slug)->first(),
                        'status' => 'Unlocked',
                        'transId' => 'Annualy',
                        'payment' => $payment,
            
                    ]);
                } else {
                    echo 'Subscription is not within 1 year duration from the current time.';
                    return Inertia::render('Selected', [
                        'post' => Post::where('_id', '=', $slug)->first(),
                        'Status' => ''
                    ]); 
                }

            }else if($user->membership=="Monthly"){
                // $subscriptionDate = new DateTime::createFromFormat('U', $user->membership_date);
                // $subscriptionDate = new DateTime('Y-m-d H:i:s', $user->membership_date);
                // $now = new DateTime();
                // $diffInMonths = $now->diff($subscriptionDate)->m + ($now->diff($subscriptionDate)->y * 12);

                $subscriptionDate = DateTime::createFromFormat('U', $user->membership_date);
                $now = new DateTime();
                $diffInMonths = $now->diff($subscriptionDate)->m + ($now->diff($subscriptionDate)->y * 12);

                if ($diffInMonths <= 1) {
                    $payment = Payments::where('user_email', $user->email)
                      ->where('info', 'Annualy')
                      ->first();

                    return Inertia::render('Unlocked', [
                        'post' => Post::where('_id', '=', $slug)->first(),
                        'status' => 'Unlocked',
                        'transId' => 'Annualy',
                        'payment' => $payment,
            
                    ]);
                } else {
                    echo 'Subscription is not within 1 year duration from the current time.';
                    return Inertia::render('Selected', [
                        'post' => Post::where('_id', '=', $slug)->first(),
                        'Status' => ''
                    ]); 
                }
            }
        }else{

            $payment = Payments::where('trans_id', '=', $slug)
                ->where('completed', '=', true)
                ->where('waiting', '=', false)
                ->first();
            
            $clientNumber = $payment->phone;
            $clientInvoice = $payment->account;
            $clientEmail = $payment->user_email;
            $clientName = urlencode($payment->user_name);
            $tenderID = $payment->info;
            $post = Post::where(['_id' => $tenderID])->first();
    
            if ($payment->sms_sent == 0) {
    
                $curl = curl_init();
    
                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://portal.zettatel.com/SMSApi/send?userid=textduka&password=Ht7WGsX2&mobile={$clientNumber}&msg=Thank+you+{$clientName}+for+the+purchase%21+Your+invoice+number+is+{$clientInvoice}.+Thank+you+for+choosing+Bidders+Portal&senderid=Bids-Portal&msgType=text&duplicatecheck=true&output=json&sendMethod=quick",
                    // CURLOPT_URL => "https://portal.zettatel.com/SMSApi/send?userid=textduka&password=Ht7WGsX2&mobile={$clientNumber}&msg=Thank+you+{$clientName}+for+the+purchase%21+Your+invoice+number+is+{$clientInvoice}.+Tender+and+Invoice+details+have+been+mailed+to+the+submitted+email+{$clientEmail}.+Thank+you+for+choosing+Bidders+Portal&senderid=Bids-Portal&msgType=text&duplicatecheck=true&output=json&sendMethod=quick",
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
                    $payment = Payments::where(['trans_id' => $slug])->first();
                    if ($payment) {
                        $payment->sms_sent = true;
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
    }

    public function downloadTender($slug)
    {
        $post = Post::where('_id', '=', $slug)
            ->first();
        $link = $post->link;
        $post_id = $post->_id;
        $fileName = $post->purchasing_authority;
        $apiKey = env('SEJDA_API_KEY');

        $url = "https://api.sejda.com/v2/html-pdf";
        $content = json_encode(array('url' => $link));
        // $content = json_encode(array('url' => 'https://example.com'));

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        "Content-type: application/json",
        "Authorization: Token: " . $apiKey));

        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

        $response = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($status == 200) {
        $fp = fopen("out.pdf", "w");
        fwrite($fp, $response);
        fclose($fp);
        print("PDF saved to disk");
        } else {
        print("Error: failed with status $status, response $response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }

        return

        
        

        // $savedFile = file_put_contents($fileName.'.pdf', fopen($url, 'r'));
        // return;
        // $savedFile = \Storage::disk('public')->put($fileName, $url);
        // $savedFile = \Storage::disk('public')->putFile($fileName, $url);
        // $savedFile = \Storage::disk('public')->file_put_contents($fileName, fopen($url, 'r'));
        // return dd($savedFile);

        // $c = curl_init($url);
        // curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        // $content = curl_exec($c);
        // if (curl_error($c))
        //     die(curl_error($c));
        // $status = curl_getinfo($c, CURLINFO_HTTP_CODE);
        // curl_close($c);
        // $encodings = [
        // 'CP1251',
        // 'UCS-2LE',
        // 'UCS-2BE',
        // 'UTF-8',
        // 'UTF-16',
        // 'UTF-16BE',
        // 'UTF-16LE',
        // 'UTF-32',
        // 'CP866',
        // ];
        // $html = mb_detect_encoding($content, $encodings, true); // Output UTF-16 as the encoding

        // echo $content;//display's correct character but with chinses huko chini
        // echo htmlspecialchars_decode($content);
        // return;

        // echo base_path().'\node_modules\\';
        // return Browsershot::url('https://example.com')->noSandbox()->addChromiumArguments([ 'no-sandbox', ])->save('example.pdf');
        // return Browsershot::url('https://example.com')->setNodeBinary('/usr/local/bin/node')->setNpmBinary('/usr/local/bin/npm')->save('example.pdf');
        // return Browsershot::url($url)->setNodeBinary('$PATH:C:\Program Files\nodejs')->setNpmBinary('$PATH:C:\Users\USER\AppData\Roaming\npm')->save('example.pdf');
        // return Browsershot::url($url)->setNodeBinary('C:\Program Files\nodejs')->setNpmBinary('C:\Users\USER\AppData\Roaming\npm')->save('example.pdf');
        // return Browsershot::url($url)->setNodeBinary('$PATH:/usr/local/bin/node')->setNpmBinary('$PATH:/usr/local/bin/npm')->save('example.pdf');
        // return Browsershot::url($url)->setIncludePath('C:\xampp7\htdocs\tenders\node_modules\\')->save('example.pdf');
        // return Browsershot::url($url)->setIncludePath('/C:/xampp7/htdocs/tenders/node_modules/')->save('example.pdf');

        // $savedFile = file_put_contents('tenderfiles/'.$fileName.'.html', fopen($url, 'r'));
        // return File::get(public_path() . '\tenderfiles\\'.$fileName.'.html');

        // // // PDF::loadHTML($url)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');
        // $pdf = \App::make('dompdf.wrapper');
        // $pdf->loadHTML($savedFile);
        // // echo storage_path('app');
        // // $pdf->loadHTML(Storage::get($fileName));
        // $pdf->loadHTML(Storage::get('\public\\'.$fileName));
        // return $pdf->stream();


        // $file = $link;
        // $headers = [header('Content-Type: application/pdf')];
        // if (file_exists($file)) {
        //     return \Response::download($file, 'tender.pdf', $headers);
        // } else {
        //     echo('File not found.');
        // }

        // $filename = 'file.pdf';
        // $tempfile = tempname(sys_get_temp_dir(), $filename);
        // copy($link, $tempfile);

        // return response()->download($tempfile, $filename);

        // return response()->streamDownload(function () {
        //     echo file_get_contents($link);
        // }, 'nice-name.pdf');

        // $dompdf = new Dompdf();
        // $dompdf->loadHtml($url);
        // $dompdf->setPaper('A4', 'landscape');
        // $dompdf->render();
        // return $dompdf->stream();


        // $fileName = 'downloaded.pdf';

        // $headers = header("Content-Type: application/pdf");
        // return response()->down/load($link, 'pdf');

        // return response()->streamDownload(function () {
        // // $url = "https://api-sandbox.xxxxx.co/SG/2.0/reports/waybill?tids=MYKPSxxxxxxxx&h=0";
        // $response = Http::get($url);
        //     echo $response->getBody()->getContents();
        // }, 'myfile.pdf');

        // $data = file_get_contents($url);

        // // $fileName = 'downloaded.pdf';
        // $save = \Storage::disk('public')->put('downloaded.pdf', $data);
        // return

        // $save = file_put_contents($fileName, $data);

        // somethi


        //Instantiate the class
        $html2pdf = new pdflayer();
        $html2pdf->set_param(
            'document_url',
            $link,
            'document_name',
            $fileName,
            'text_encoding',
            'utf-8',
            'accept_lang',
            'en-US',
            'inline',
            1,
            'encryption ',
            128,
            'user_agent',
            'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36',
            'viewport ',
            '414x736',
            'force',
            1
        );
        $html2pdf->convert();
        //display the PDF file
        // $html2pdf->display_pdf($fileName.'.pdf');
        $html2pdf->download_pdf($fileName);
    }
    

    public function listing()
    {
        $posts = Post::select(['_id', 'created_at', 'expiry', 'tender_brief' ])
        ->latest()
        ->get();

        return Inertia::render('Listing', ['Posts' => json_decode($posts, true)]);
    }

    public function pricing($slug)
    {
        if ($slug == 150) {
            $from = new DateTime();
            $to = new DateTime('-10 day');
            $posts = Post::select("*")
                ->whereBetween('created_at', [$to, $from])
                ->latest()->get();
        } else if ($slug == 100) {
            $from = new DateTime('-11 day');
            $to = new DateTime('-20 day');
            $posts = Post::select("*")
                ->whereBetween('created_at', [$to, $from])
                ->latest()->get();
        } else if ($slug == 50) {
            $from = new DateTime('-21 day');
            $to = new DateTime('-31 day');
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
        $blogs = Blog::latest()->get();

        return Inertia::render('Blog', [
            'blogs' => $blogs,
        ]);
    }

    public function search(Request $request)
    {

        $key = str_replace(' ', '%', $request->keyword);
        $region = $request->region;
        $entity = str_replace(' ', '%', $request->entity);
        $number = str_replace(' ', '%', $request->number);
        $price = str_replace(' ', '%', $request->price);
        $closing = str_replace(' ', '%', $request->closing);
        $publishing = str_replace(' ', '%', $request->publishing);
        $publishFormat = date('Y-m-d', strtotime($publishing));
        $closingFormat = Carbon::parse($closing)->format('Y-m-d');

        $search = Post::select(['_id', 'created_at', 'expiry', 'tender_brief' ])->where('title', 'like', '%' . $key . '%')
            ->orWhere('tender_brief', 'like', '%' . $key . '%')
            ->orWhere('funded_by', 'like', '%' . $key . '%')
            ->orWhere('country', 'like', '%' . $key . '%')
            ->orWhere('address', 'like', '%' . $region . '%')
            ->orWhere('tender_number', 'like', '%' . $number . '%')
            ->orWhere('purchasing_authority', 'like', '%' . $entity . '%')
            ->orWhere('tender_brief', 'like', '%' . $entity . '%')
            ->orWhere('funded_by', 'like', '%' . $entity . '%')
            ->orWhere('address', 'like', '%' . $entity . '%')
            ->orWhere('expiry', 'like', '%' . $closingFormat . '%')
            ->orWhere('created_at', 'like', '%' . $publishFormat . '%')
            ->latest()->get();


        $user = auth()->user();

        if($user->admin==1){
            $isAdmin = true;
        }else{
            $isAdmin = false;
        }

        return Inertia::render('Listing', [
            'Posts' => json_decode($search, true),
            'isAdmin' => $isAdmin
        ]);
    }

    public function invoiceMultiple(Request $request){
        $invoice = new Invoice();
        $lastInvoiceID = $invoice->orderBy('invoice_number', 'DESC')->pluck('invoice_number')->first();
        $newInvoiceID = $lastInvoiceID + 1;
        $current_date_time = Carbon::now()->timestamp;
        

        $user = $request->user;
        $user_phone = $user['userPhone'];
        $user_email = $user['userEmail'];
        $user_name = $user['userName'];

        $invoiceRecord = Invoice::
            //   where('unique_timestamp', '=', $current_date_time)
            //   where('invoice_number', '=', $newInvoiceID)
            where('post_id', '=', $request->post)
            ->where('user_phone', '=', $user_phone)
            ->where('user_email', '=', $user_email)
            ->first();

        $postList = [];    
        foreach ($request->posts as $item) {
            $post = Post::where('_id', '=', $item)->first();
            array_push($postList, $post);
        }

        if ($invoiceRecord != null) {
            $paymentStatus = $invoiceRecord->payment_status;
            $createdInvoice = $invoiceRecord;
        }
        if ($invoiceRecord != null && $paymentStatus == 0) {
            $invoicePaid = false;
        } else if ($invoiceRecord != null && $paymentStatus == 1) {
            $invoicePaid = true;
        } else {
            $createdInvoice =  Invoice::create([
                "invoice_number" => $newInvoiceID,
                "unique_timestamp" => $current_date_time,
                "amount" => $request->amount,
                "post_id" => $request->post,
                "user_phone" => $user_phone,
                "user_email" => $user_email,
                "user_name" => $user_name,
                "payment_status" => false,
            ]);
            $invoicePaid = false;
        };

        // $createdInvoice =  Invoice::create([
        //     "invoice_number" => $newInvoiceID,
        //     "unique_timestamp" => $current_date_time,
        //     "amount" => $request->amount,
        //     "post_id" => $request->post,
        //     "user_phone" => $user_phone,
        //     "user_email" => $user_email,
        //     "user_name" => $user_name,
        //     "payment_status" => false,
        // ]);

        $invoicePaid = false;
        return Inertia::render('InvoiceMultiple', [
            'posts' => $postList,
            'user' => $user,
            'invoiceStatus' => $invoicePaid,
            'invoiceDetails' => json_decode($createdInvoice),

        ]);
    }

    public function invoice(Request $request)
    {
        $baseURL = url('');
        $currentURL = url()->current();
        $slugValue = str_replace($baseURL . '/invoice/', '', $currentURL);
        // return dd( $baseURL, $currentURL, $slugValue );

        $post = $request->post;
        if ($post == 3000 || $post == 30000 || $post == 500 || $post == 5000) {
            $post_id = $post;
            if($post==3000){
                $post = 'Monthly';
            }
            if($post==500){
                $post = 'Monthly Notification';
            }
            if($post==30000){
                $post = 'Annualy';
            }
            if($post==5000){
                $post = 'Annualy Notification';
            }
        } else {
            $post_id = $slugValue;
            $post = Post::where('_id', '=', $slugValue)->first();
            // $post_id = $post['_id'];
            // return dd($post_id);
        }

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
        if ($invoiceRecord != null) {
            $paymentStatus = $invoiceRecord->payment_status;
            $createdInvoice = $invoiceRecord;
        }
        if ($invoiceRecord != null && $paymentStatus == 0) {
            $invoicePaid = false;
        } else if ($invoiceRecord != null && $paymentStatus == 1) {
            $invoicePaid = true;
        } else {
            $createdInvoice =  Invoice::create([
                "invoice_number" => $newInvoiceID,
                "unique_timestamp" => $current_date_time,
                "amount" => $amount,
                "post_id" => $post_id,
                "user_phone" => $user_phone,
                "user_email" => $user_email,
                "user_name" => $user_name,
                "payment_status" => false,
            ]);
            $invoicePaid = false;
        };

        return Inertia::render('Invoice', [
            // 'post' => $request->post,
            // 'post' => Post::where('_id', '=', $slugValue)->first(),
            'post' => $post,
            'user' => $user,
            'invoiceStatus' => $invoicePaid,
            'invoiceDetails' => json_decode($createdInvoice),

        ]);
    }

    public function checkoutMultiple(Request $request)
    {
        $bodyContent = json_decode($request->getContent());
        $tenders = [];
        foreach($bodyContent as $tenderID){
            $tender = Post::where('_id', $tenderID)->first();
            array_push($tenders, $tender);
        };
        // $tenderList = Post::all()->latest();

        return Inertia::render('CheckoutMultiple', [
            'tenders' => $tenders
        ]);
    }


    public function checkout(Request $request, $slugs)
    {
       

        return Inertia::render('Checkout', [
            'post' => Post::where('_id', '=', $slugs)->first(),
            'membership' => $request->membership,
            'user' => $request->user
        ]);
    }

}