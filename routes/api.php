<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MpesaResponseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('validation', [MpesaResponseController::class, 'validation']);
Route::post('confirmation', [MpesaResponseController::class, 'confirmation']);
Route::get('stkpush', [MpesaResponseController::class, 'stkPush']);
Route::post('b2ccallback', [MpesaResponseController::class, 'b2cCallback']);
Route::post('transaction-status/result_url', [MpesaResponseController::class, 'transactionStatusResponse']);
Route::post('reversal/result_url', [MpesaResponseController::class, 'transactionReversal']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// URL::forceScheme('https');

// header('Access-Control-Allow-Origin:  *');
// header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, PATCH, DELETE');
// header('Access-Control-Allow-Headers: Accept, Content-Type, X-Auth-Token, Origin, Authorization');
