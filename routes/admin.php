<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;


// admin dashboard routes
Route::group(['prefix' => 'admin','as' => 'admin.'], function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});