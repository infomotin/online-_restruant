<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;



// admin dashboard routes
Route::group(['prefix' => 'admin','as' => 'admin.'], function () {
        // Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        /** Profile **/
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        /** End Profile **/
        /**Sliders **/
       Route::resource('slider', SliderController::class);
});