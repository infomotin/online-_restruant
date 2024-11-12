<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminAuthController;



// admin dashboard routes
Route::group(['prefix' => 'admin','as' => 'admin.'], function () {
        // Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});