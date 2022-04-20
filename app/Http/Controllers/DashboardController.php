<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\Post;
use App\Models\Upload;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportPost;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;
use File;


class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return Inertia::render('Dashboard', ['allPosts' => $posts]);
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
            'value' => [],
            'work_detail' => [],
            'expiry' => [],
            'address' => [],
            'email' => [],
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
            // $post = Post::find($row['id']);
            // $post->purchasing_Authority = $row['purchasing_Authority'];
            // $post->tender_number = $row['tender_number'];
            // $post->save();
            Post::firstOrCreate([
                // $row->purchasing_authority = 'purchasing_authority'
                // 'purchasing_authority'  => $row['purchasing_authority'],
                // 'tender_number'  => $row['tender_number']
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
        // $mongoPosts = Post::updateOrCreate(
        //     $posts
        // );
        return dd('done');

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
        $post = Post::where('_id', '=', $post);
        $post->delete();
        return Inertia::render('Success', ['Status' => 'delete']);
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => ['required', 'max:50'],
            'description' => ['max:50'],
            'funding' => ['max:50'],
            'identity' => ['max:50'],
            'value' => ['max:50'],
            'country' => ['max:50'],
            'price' => ['max:50'],
            'competition' => ['max:50'],
            'expiry' => ['max:50'],
        ]);

        $post->update($validated);
        return Inertia::render('Success', ['Status' => 'edit']);

    }

    public function download(Request $request)
    {
        $file_path = public_path('templates\\upload_tenders.xlsx');
        return response()->download($file_path);
    }

}
