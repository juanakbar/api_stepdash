<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BengkelController;
use App\Http\Controllers\API\PesananController;
use App\Models\Pesanan;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([
    'prefix' => 'v1'
], function () {
    Route::apiResource('bengkels', BengkelController::class);

    // Pesanan
    Route::controller(PesananController::class)->group(function () {
        Route::post('/pesanans', 'store');
        Route::put('/pesanans/{pesanan}/update_status_pesanan', 'updateStatusPesanan');
        Route::get('/pesanans/{pesanan}', 'show');
    });
});