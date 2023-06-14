<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpesaResponseController;

// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: *");

Route::post('validation', [MpesaResponseController::class, 'validation']);
Route::post('confirmation', [MpesaResponseController::class, 'confirmation']);
Route::post('stkpush', [MpesaResponseController::class, 'stkPush']);
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
