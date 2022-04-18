<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingController::class, 'index'])
    ->name('landing');

Route::get('/selected/{slug}', [LandingController::class, 'selected'])
    ->name('selected');

Route::get('/listing', [LandingController::class, 'listing'])
    ->name('listing');

Route::get('/stkpush', [LandingController::class, 'stkpush'])
    ->name('stkpush');

Route::get('/checkout/{slugs}', [LandingController::class, 'checkout'])
    ->name('checkout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->post('/import', [DashboardController::class, 'import'])
    ->name('import');

Route::middleware(['auth:sanctum', 'verified'])->post('/post', [DashboardController::class, 'addPost'])
    ->name('post');

Route::middleware(['auth:sanctum', 'verified'])->get('/success', [DashboardController::class, 'success'])
    ->name('success');

Route::middleware(['auth:sanctum', 'verified'])->delete('/delete/{post}', [DashboardController::class, 'delete'])
    ->name('delete');

Route::middleware(['auth:sanctum', 'verified'])->put('/update/{post}', [DashboardController::class, 'update'])
    ->name('update');

Route::middleware(['auth:sanctum', 'verified'])->get('/download', [DashboardController::class, 'download'])
    ->name('download');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');
