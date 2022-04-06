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

        // return Inertia::render('Dashboard', [
        //     'Posts'=> Post::all()
        // ]);
    }
}
