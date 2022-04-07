<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\Post;

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

        $postData = Post::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'funding' => $validated['funding'],
            'identity' => $validated['identity'],
            'value' => $validated['value'],
            'country' => $validated['country'],
            'price' => $validated['price'],
            'competition' => $validated['competition'],
            'expiry' => $validated['expiry'],
        ]);

        return Redirect::route('success');
        // return Inertia::render('Dashboard');
    }

    public function success()
    {
        return Inertia::render('Success');
    }

}
