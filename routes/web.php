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
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('password/reset', [PasswordResetController::class, 'showResetForm'])->name('password.request');
// Route::post('password/email', [PasswordResetController::class, 'sendResetLinkEmail'])->name('password.email');

// Dashboard Route

// User Management Routes
Route::prefix('dashboard')->name('dashboard.')->middleware(['Admin','auth'])->group(function () {
    Route::resource('users', UserManagementController::class)->names('users');
});
Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['Admin','auth'])->name('dashboard');
