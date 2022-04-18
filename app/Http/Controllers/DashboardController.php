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
// use Excel;
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
            'funded_by' => [],
            'country' => [],
            'title' => [],
            'value' => [],
            'work_detail' => [],
            'address' => [],
            'email' => [],
            'expiry' => [],
        ]);

        $postData = Post::create([
            'purchasing_Authority' => $validated['purchasing_Authority'],
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
        $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
        $fileSize = $file->getSize(); //Get size of uploaded file in bytes
        //Checks to see that the valid file types and sizes were uploaded
        $this->checkUploadedFileProperties($extension, $fileSize);
        $import = new ImportPost();
        // Excel::import($import, $request->file);
        Excel::import($import, $request->file('file')->store('files'));
        // foreach ($import->data as $post) {
        // //sends email to all users
        // $this->sendEmail($user->email, $user->name);
        // }
        //Return a success response with the number if records uploaded
        return dd('done');
        // return response()->json([
        // 'message' => $import->data->count() ." records successfully uploaded"
        // ]);
        } else {
            return dd('not done');
        // throw new \Exception('No file was uploaded', Response::HTTP_BAD_REQUEST);
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

    public function imports(Request $request){

        //  $this->validate($request, array(
        //     'file-upload' => 'required',
        // ));

        // $extension = File::extension($request->file->getClientOriginalName());
        // if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {

        //     Excel::import(new EmployeesImport, $request->file);
        //     return redirect()->back()->with('success', 'File has been uploaded');

        // } else {
        //     return redirect()->back()->with('error', 'File is a ' . $extension . ' file.!! Please upload a valid EXCEL file..!!');

        // }

        // Excel::toCollection(new ImportPost, $request->file('file-upload')->store('files'));
        // dd($request->file('file-upload'));
        // dd(store('files'));
        // return;
        // Excel::import(new ImportPost, $request->file('file-upload')->store('files'));
        // Excel::import(new ImportPost, $request->file('file-upload'));
        Excel::import(new ImportPost, $request->file);

        $this->validate($request, array(
            'file' => 'required',
        ));

        $extension = File::extension($request->file->getClientOriginalName());
        if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {

            Excel::import(new EmployeesImport, $request->file);
            return Inertia::render('Success', ['Status' => 'add']);

        } else {
            // return redirect()->back()->with('error', 'File is a ' . $extension . ' file.!! Please upload a valid EXCEL file..!!');
            return dd('No file extension');
        }
        // return Inertia::render('Success', ['Status' => 'add']);
        // return redirect()->back()
    }

    public function delete($post)
    {
        // $post = Post::find($postId);
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

        // $post = Post::where('_id', '=', $post);

        // return dd($post);


        $post->update($validated);
        return Inertia::render('Success', ['Status' => 'edit']);

    }

}
