<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MPESAResponsesController;

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

Route::post('validation', [MPESAResponsesController::class, 'validation']);
Route::post('confirmation', [MPESAResponsesController::class, 'confirmation']);
Route::post('stkpush', [MPESAResponsesController::class, 'stkPush']);
Route::post('b2ccallback', [MPESAResponsesController::class, 'b2cCallback']);
Route::post('transaction-status/result_url', [MPESAResponsesController::class, 'transactionStatusResponse']);
Route::post('reversal/result_url', [MPESAResponsesController::class, 'transactionReversal']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
