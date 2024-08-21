<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BengkelController;
use App\Http\Controllers\API\PesananController;
use App\Http\Controllers\API\SettingController;
use App\Http\Controllers\API\UserController;
use App\Models\Pesanan;

Route::post('/login', [AuthController::class, 'login']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', [UserController::class, 'index']);
    Route::patch('/me', [UserController::class, 'update']);
});

Route::group([
    'prefix' => 'v1'
], function () {
    Route::apiResource('bengkels', BengkelController::class);

    // Settings
    Route::apiResource('settings', SettingController::class);

    // Pesanan
    Route::controller(PesananController::class)->group(function () {
        Route::post('/pesanans', 'store');
        Route::put('/pesanans/{pesanan}/update_status_pesanan', 'updateStatusPesanan');
        Route::get('/pesanans/{pesanan}', 'show');
    });
});
