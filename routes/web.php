<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\UserManagementController;
use App\Http\Controllers\Dashboard\CustomerController;
use App\Http\Controllers\Dashboard\SegmentController;

Route::get('/', function () {
    return view('main');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('dashboard')->name('dashboard.')->middleware(['Admin','auth'])->group(function () {
    Route::resource('users', UserManagementController::class)->names('users');
    Route::resource('customers', CustomerController::class);
    Route::resource('segments', SegmentController::class);
});
Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['Admin','auth'])->name('dashboard');
