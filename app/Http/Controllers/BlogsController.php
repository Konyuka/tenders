<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class BlogsController extends Controller
{
    //
    public function winTender()
    {
        return Inertia::render('Blogs/WinTender',);
    }
}
