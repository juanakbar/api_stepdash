<?php

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\BengkelController;
use App\Http\Controllers\API\SettingController;
use App\Http\Controllers\Api\PembayaranController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', [UserController::class, 'index']);
    Route::patch('/me', [UserController::class, 'update']);

    Route::apiResource('bengkels', BengkelController::class);
    Route::delete('/logout', [AuthController::class, 'logout']);
    Route::controller(PembayaranController::class)->group(function () {
        Route::post('create_token', 'createCharge');
        Route::post('create_order', 'storeOrder');
        Route::post('create_pembayaran', 'storePayment');
        Route::get('history', 'history');
        Route::get('total_pendapatan_user', 'getTotalPendapatanDriver');
        Route::put('update_status_order', 'updateStatusOrder');
    });
});
Route::get('bengkels', [BengkelController::class, 'index']);
