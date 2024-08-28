<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\BengkelController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => ['role:Super Admin']], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    // Edit Profile Administrator
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User Management
    Route::resource('users', UserController::class);
    Route::resource('drivers', DriverController::class);
    Route::resource('mekaniks', MekanikController::class);
    Route::resource('bengkels', BengkelController::class);
    Route::get('orders', OrderController::class)->name('orders');
});

require __DIR__ . '/auth.php';
