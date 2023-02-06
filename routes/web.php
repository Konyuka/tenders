<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\BlogsController;
use Illuminate\Support\Facades\URL;
// use Spatie\Sitemap\SitemapGenerator;
// use Carbon\Carbon;
// use Spatie\Sitemap\Sitemap;
// use Spatie\Sitemap\Tags\Url;




Route::get('/', [LandingController::class, 'index'])
    ->name('landing');

Route::post('/view_cart', [LandingController::class, 'viewCart'])
    ->name('view_cart');

Route::post('/multiple_tenders', [LandingController::class, 'checkoutMultiple'])
    ->name('multiple_tenders');


Route::get('/selected/{slug}', [LandingController::class, 'selected'])
    ->name('selected');

Route::put('/blog/{slug}', [LandingController::class, 'blogDetails'])
    ->name('blogdetails');

Route::get('/free/{slug}', [LandingController::class, 'free'])
    ->name('free');

Route::get('/listing', [LandingController::class, 'listing'])
    ->name('listing');

Route::get('/about', [LandingController::class, 'about'])
    ->name('about');

Route::get('/subscriptions', [LandingController::class, 'subscriptions'])
    ->name('subscriptions');

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

Route::post('/unlock/multiple/{slugs}', [LandingController::class, 'unlockMultiple'])
    ->name('unlockMultiple');

Route::post('/send/to_mail/{slugs}', [LandingController::class, 'toMail'])
    ->name('to_mail');

Route::middleware(['cors'])->get('/download_tender/{slugs}', [LandingController::class, 'downloadTender'])
    ->name('download_tender');

Route::any('/invoice/{slugs}', [LandingController::class, 'invoice'])
    ->name('invoice');

Route::post('/multiple_tenders_invoice', [LandingController::class, 'invoiceMultiple'])
    ->name('invoice_multiple');

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

Route::get('transaction-status', function(){
    return view('status');
});

Route::post('/confirmation', [PaymentsController::class, 'setTransactionDetails'])
    ->name('confirmation');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/payment', [DashboardController::class, 'payments'])
    ->name('admin.payment');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/blog', [DashboardController::class, 'blogs'])
    ->name('admin.blog');
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/blog/post', [DashboardController::class, 'blogPost'])
    ->name('admin.blog.post');
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

Route::middleware(['auth:sanctum', 'verified'])->delete('/delete/{post}', [DashboardController::class, 'delete'])
    ->name('delete');

Route::middleware(['auth:sanctum', 'verified'])->put('/update/{post}', [DashboardController::class, 'update'])
    ->name('update');

Route::middleware(['auth:sanctum', 'verified'])->get('/download', [DashboardController::class, 'download'])
    ->name('download');


// Route::get('/sitemap', [SitemapController::class, 'index'])
//     ->name('sitemap');


// Route::get('sitemap', function () {
//     SitemapGenerator::create('https://biddersportal.com')
//     // SitemapGenerator::create('http://127.0.0.1:8000')
//     ->getSitemap()

//     ->add(Url::create('/')
//     ->setLastModificationDate(Carbon::yesterday())
//         ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//         ->setPriority(0.1))

//     ->add(Url::create('/view_cart')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/selected/{slug}')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/blog/{slug}')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/free/{slug}')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/listing')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/about')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/subscriptions')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/search')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/listing')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/pricing/{slugs}')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/blogs')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/how-to-win-a-tender')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/how-to-get-government-tenders-in-kenya')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/how-to-apply-for-a-tender-in-kenya')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/checkout/{slugs}')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/unlock/{slugs}')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/unlock/multiple/{slugs}')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/send/to_mail/{slugs}')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/invoice/{slugs}')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/multiple_tenders_invoice')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/invoice/payment/stkPush')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->add(Url::create('/confirmation')
//     ->setLastModificationDate(Carbon::yesterday())
//     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
//     ->setPriority(0.1))

//     ->writeToFile(public_path('sitemap.xml'));
//     // SitemapGenerator::create(env('APP_URL'))

// });

if (env('APP_ENV') === 'local') {
    // URL::forceScheme('http');
    // \URL::forceScheme('http');
} else {
    URL::forceScheme('https');
}