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
    public function govTender()
    {
        return Inertia::render('Blogs/GovTender',);
    }
    public function applyTender()
    {
        return Inertia::render('Blogs/ApplyTender',);
    }
}
