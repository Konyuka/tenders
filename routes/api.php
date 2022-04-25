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

Route::post('validation', [MPESAResponseController::class, 'validation']);
Route::post('confirmation', [MPESAResponseController::class, 'confirmation']);
Route::post('stkpush', [MPESAResponseController::class, 'stkPush']);
Route::post('b2ccallback', [MPESAResponseController::class, 'b2cCallback']);
Route::post('transaction-status/result_url', [MPESAResponseController::class, 'transactionStatusResponse']);
Route::post('reversal/result_url', [MPESAResponseController::class, 'transactionReversal']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
