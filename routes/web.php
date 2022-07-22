<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\BlogsController;
use Illuminate\Support\Facades\URL;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingController::class, 'index'])
    ->name('landing');

Route::get('/selected/{slug}', [LandingController::class, 'selected'])
    ->name('selected');

Route::get('/free/{slug}', [LandingController::class, 'free'])
    ->name('free');

Route::get('/listing', [LandingController::class, 'listing'])
    ->name('listing');

Route::post('/search', [LandingController::class, 'search'])
    ->name('search');

Route::get('/pricing/{slugs}', [LandingController::class, 'pricing'])
    ->name('pricing');

Route::get('/blogs', [LandingController::class, 'blogs'])
    ->name('blogs');
Route::get('how-to-win-a-tender', [BlogsController::class, 'winTender']);
Route::get('how-to-get-government-tenders-in-kenya', [BlogsController::class, 'govTender']);
Route::get('how-to-apply-for-a-tender-in-kenya', [BlogsController::class, 'applyTender']);





Route::any('/checkout/{slugs}', [LandingController::class, 'checkout'])
    ->name('checkout');

Route::get('/unlock/{slugs}', [LandingController::class, 'unlock'])
    ->name('unlock');

Route::get('/download_tender/{slugs}', [LandingController::class, 'downloadTender'])
    ->name('download_tender');

Route::any('/invoice/{slugs}', [LandingController::class, 'invoice'])
    ->name('invoice');

Route::post('get-token', [PaymentsController::class, 'newAccessToken'])
    ->name('get-token');

Route::post('register-urls', [PaymentsController::class, 'registerURLS'])
    ->name('register-urls');

Route::post('simulate', [PaymentsController::class, 'simulateTransaction'])
    ->name('simulate');

Route::post('/invoice/payment/stkPush', [PaymentsController::class, 'triggerStk'])
    ->name('stk');

Route::post('/invoice/{slugs}/c2b', [PaymentsController::class, 'triggerC2B'])
    ->name('c2b');

Route::post('/confirm/ebook/payment', [PaymentsController::class, 'confirm'])
    ->name('confirm');

Route::get('transaction-status', function(){
    return view('status');
});

Route::post('/confirmation', [PaymentsController::class, 'setTransactionDetails'])
    ->name('confirmation');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/payment', [DashboardController::class, 'payments'])
    ->name('admin.payment');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/apitwitter', [DashboardController::class, 'twitter'])
    ->name('admin.apitwitter');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/tender', [DashboardController::class, 'tenders'])
    ->name('admin.tender');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/subscriptions', [DashboardController::class, 'subscriptions'])
    ->name('admin.subscriptions');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/wishlist', [DashboardController::class, 'wishlist'])
    ->name('admin.wishlist');


Route::middleware(['auth:sanctum', 'verified'])->post('/import', [DashboardController::class, 'import'])
    ->name('import');

Route::middleware(['auth:sanctum', 'verified'])->post('/post', [DashboardController::class, 'addPost'])
    ->name('post');

Route::middleware(['auth:sanctum', 'verified'])->get('/refresh', [DashboardController::class, 'refresh'])
    ->name('refresh');

Route::get('/tweet', [DashboardController::class, 'tweet'])
    ->name('tweet');
Route::get('/twitter_auth', [DashboardController::class, 'tweetAuth'])
    ->name('tweet.auth');
Route::get('/tweet/cbk', [DashboardController::class, 'tweetcbk'])
    ->name('tweet.cbk');



Route::middleware(['auth:sanctum', 'verified'])->delete('/delete/{post}', [DashboardController::class, 'delete'])
    ->name('delete');

Route::middleware(['auth:sanctum', 'verified'])->put('/update/{post}', [DashboardController::class, 'update'])
    ->name('update');

Route::middleware(['auth:sanctum', 'verified'])->get('/download', [DashboardController::class, 'download'])
    ->name('download');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');

// URL::forceScheme('https');

// if (env('APP_ENV') === 'local') {
//     // URL::forceSchema('http');
//     \URL::forceScheme('http');
// }