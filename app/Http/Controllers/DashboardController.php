<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\Post;
use App\Models\Payments;
use App\Models\Upload;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportPost;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Http;



class DashboardController extends Controller
{
    public function index()
    {
        // $payments = Payments::all();
        return Inertia::render('Admin/Dashboard');
    }
    public function payments()
    {
        $completedPayments = Payments::where('completed', true)->latest()->get();
        $incompletePayments = Payments::where('completed', false)->latest()->get();
        return Inertia::render('Admin/Payments', [
            'completedPayments' => $completedPayments,
            'incompletePayments' => $incompletePayments
        ]);
    }
    public function tenders()
    {
        // $payments = Payments::all();
        return Inertia::render('Admin/Dashboard');
    }
    public function users()
    {
        // $payments = Payments::all();
        return Inertia::render('Admin/Dashboard');
    }

    public function refresh(Request $request)
    {
        $response = Http::get('https://www.biddetail.com/kenya/C62A8CB5DD405E768CAD792637AC0446/F4454993C1DE1AB1948A9D33364FA9CC');
        $data = json_decode($response, true);
        // $posts = $request->tenders;

        $posts = $data['TenderDetails'][0]['TenderLists'];

        set_time_limit(50000);
        foreach ($posts as $post => $value ) {
            if(!Post::where('tender_number',$value['Tender_No'])->exists()){

                Post::Create([
                    'purchasing_authority' => $value['Purchasing_Authority'],
                    'tender_number' => $value['Tender_No'],
                    'tender_brief' => $value['Tender_Brief'],
                    'competition_type' => $value['CompetitionType'],
                    'funded_by' => $value['Funding'],
                    'country' => $value['Geographical_Addresses'],
                    'value' => $value['Tender_Value'],
                    'work_detail' => $value['Work_Detail'],
                    'email' => $value['Email_Address'],
                    'link' => $value['FileUrl'],
                    'expiry' => $value['Tender_Expiry']
                ]);
            }


        };

        return Inertia::render('Dashboard', [
            // 'allPosts' => $posts,
        ]);
    }


    public function addPost(Request $request)
    {
        $validated = $request->validate([
            'purchasing_Authority' => ['max:50'],
            'tender_number' => ['required' ],
            'tender_brief' => [ ],
            'competition_type' => [ ],
            'category' => [ ],
            'funded_by' => [],
            'country' => [],
            'work_detail' => [],
            'expiry' => [],
            'address' => [],
            'email' => [],
            'phone' => [],
            'link' => [],
        ]);

        $postData = Post::create([
            'purchasing_authority' => $validated['purchasing_authority'],
            'tender_number' => $validated['tender_number'],
            'tender_brief' => $validated['tender_brief'],
            'competition_type' => $validated['competition_type'],
            'funded_by' => $validated['funded_by'],
            'country' => $validated['country'],
            'title' => $validated['title'],
            'value' => $validated['value'],
            'work_detail' => $validated['work_detail'],
            'address' => $validated['address'],
            'email' => $validated['email'],
            'link' => $validated['link'],
            'expiry' => $validated['expiry'],
        ]);

        // return Redirect::route('success');
        return Inertia::render('Success', ['Status' => 'add']);
        // return Inertia::render('Dashboard');
    }

    public function import(Request $request)
    {
        if ($request->file) {
        $file = $request->file;
        $extension = $file->getClientOriginalExtension();
        $fileSize = $file->getSize();
        $this->checkUploadedFileProperties($extension, $fileSize);
        $import = new ImportPost();
        Excel::import($import, $request->file('file')->store('files'));
        $posts = DB::table('uploads')->get();
        // return dd($posts);
        foreach($posts as $row){

            Post::firstOrCreate([
                'purchasing_authority'  => $row->purchasing_authority,
                'tender_number'  => $row->tender_number,
                'tender_brief'  => $row->tender_brief,
                'competition_type'  => $row->competition_type,
                'category'  => $row->category,
                'funded_by'  => $row->funded_by,
                'country'  => $row->country,
                'value'  => $row->value,
                'work_detail'  => $row->work_detail,
                'expiry'  => $row->expiry,
                'address'  => $row->address,
                'email'  => $row->email,
                'phone'  => $row->phone,
                'link'  => $row->link
            ]);
        }

        $mongoPosts = Post::all();
        foreach($mongoPosts as $index => $row){
            Upload::where('tender_number', $row->tender_number)->update(
                [
                    '_id' => $row->_id
                ]
            );
        }
        return Inertia::render('Success', ['Status' => 'upload']);
        } else {
            return dd('not uploaded correctly');
        }
    }

    public function checkUploadedFileProperties($extension, $fileSize) : void
    {
        $valid_extension = array("csv", "xlsx"); //Only want csv and excel files
        $maxFileSize = 2097152; // Uploaded file size limit is 2mb
        if (in_array(strtolower($extension), $valid_extension)) {
        if ($fileSize <= $maxFileSize) {
        } else {
        throw new \Exception('No file was uploaded', Response::HTTP_REQUEST_ENTITY_TOO_LARGE); //413 error
        }
        } else {
        throw new \Exception('Invalid file extension', Response::HTTP_UNSUPPORTED_MEDIA_TYPE); //415 error
        }
    }

    public function delete($post)
    {
        Upload::where('_id', '=', $post)->delete();
        Post::where('_id', '=', $post)->delete();
        return Inertia::render('Success', ['Status' => 'delete']);
    }

    public function update(Request $request, Post $post, Upload $upload)
    {
        $validated = $request->validate([
            'purchasing_authority' => ['required', 'max:50'],
            'tender_number' => ['max:50'],
            'tender_brief' => ['max:50'],
            'competition_type' => ['max:50'],
            'category' => ['max:50'],
            'funded_by' => ['max:50'],
            'country' => ['max:50'],
            'work_detail' => ['max:50'],
            'expiry' => ['max:50'],
            'address' => ['max:50'],
            'email' => ['max:50'],
            'phone' => ['max:50'],
            'link' => ['max:50'],
        ]);

        $post->update($validated);
        $upload->update($validated);
        return Inertia::render('Success', ['Status' => 'edit']);

    }

    public function download(Request $request)
    {
        $file_path = public_path('templates/upload_tenders.xlsx');
        return response()->download($file_path);
    }

}
