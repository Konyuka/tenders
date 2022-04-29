<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentsController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingController::class, 'index'])
    ->name('landing');

Route::get('/selected/{slug}', [LandingController::class, 'selected'])
    ->name('selected');

Route::get('/listing', [LandingController::class, 'listing'])
    ->name('listing');

Route::get('/checkout/{slugs}', [LandingController::class, 'checkout'])
    ->name('checkout');

Route::get('/unlock/{slugs}', [LandingController::class, 'unlock'])
    ->name('unlock');

Route::get('/download_tender/{slugs}', [LandingController::class, 'downloadTender'])
    ->name('download_tender');


// Route::get('/stkpush', [LandingController::class, 'stkpush'])
//     ->name('stkpush');

// Route::get('/stkpush', [PaymentsController::class, 'triggerStk'])
//     ->name('stkpush');

Route::post('/checkout/get-token', [LandingController::class, 'getAccessToken'])
    ->name('get-token');

Route::post('/checkout/register-urls', [LandingController::class, 'registerURLS'])
    ->name('register-urls');

Route::post('/checkout/simulate', [LandingController::class, 'simulateTransaction'])
    ->name('simulate');

// Route::post('/checkout/stkPush', [LandingController::class, 'stkPush'])
//     ->name('stk');

Route::post('/checkout/stkPush', [PaymentsController::class, 'triggerStk'])
    ->name('stk');

Route::post('/confirm/ebook/payment', [PaymentsController::class, 'confirm'])
    ->name('confirm');




Route::get('transaction-status', function(){
    return view('status');
});

Route::post('/confirmation', [PaymentsController::class, 'setTransactionDetails'])
    ->name('confirmation');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->post('/import', [DashboardController::class, 'import'])
    ->name('import');

Route::middleware(['auth:sanctum', 'verified'])->post('/post', [DashboardController::class, 'addPost'])
    ->name('post');



Route::middleware(['auth:sanctum', 'verified'])->delete('/delete/{post}', [DashboardController::class, 'delete'])
    ->name('delete');

Route::middleware(['auth:sanctum', 'verified'])->put('/update/{post}', [DashboardController::class, 'update'])
    ->name('update');

Route::middleware(['auth:sanctum', 'verified'])->get('/download', [DashboardController::class, 'download'])
    ->name('download');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');
