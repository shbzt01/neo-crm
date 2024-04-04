<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\UserManagementController;

Route::get('/', function () {
    return view('main');
});

// Authentication Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
// Route::get('password/reset', [PasswordResetController::class, 'showResetForm'])->name('password.request');
// Route::post('password/email', [PasswordResetController::class, 'sendResetLinkEmail'])->name('password.email');

// Dashboard Route
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// User Management Routes
Route::prefix('dashboard')->middleware('admin')->group(function () {
    Route::resource('users', UserManagementController::class);
});
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('Admin')->name('dashboard');
