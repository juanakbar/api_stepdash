<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\MekanikController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
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
});

require __DIR__ . '/auth.php';
