<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return Inertia::render('Dashboard', ['allPosts' => $posts]);
    }

    public function add()
    {
        Post::create(
            Request::validate([
                'title' => ['required', 'max:50'],
                'description' => ['required', 'max:50'],
                'funding' => ['required', 'max:50', 'email'],
                'identity' => ['required', 'max:50'],
                'value' => ['required', 'max:50'],
                'country' => ['required', 'max:50'],
                'price' => ['required', 'max:50'],
                'competition' => ['required', 'max:50'],
                'expiry' => ['required', 'max:50'],
            ])
        );

        return Redirect::route('users.index');
    }
}
