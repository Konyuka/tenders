<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingController::class, 'index'])
    ->name('landing');

Route::get('/selected', [LandingController::class, 'selected'])
    ->name('selected');

Route::get('/listing', [LandingController::class, 'listing'])
    ->name('listing');

Route::get('/checkout', [LandingController::class, 'checkout'])
    ->name('checkout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');
