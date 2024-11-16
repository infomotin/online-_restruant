<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\WhyChooseController;



// admin dashboard routes
Route::group(['prefix' => 'admin','as' => 'admin.'], function () {
        // Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        /** Profile **/
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        /** End Profile **/
        /**Sliders **/
       Route::resource('slider', SliderController::class);
        /** End Sliders **/
        /** Why Choose **/


        //if you want to more routes you can add here but must be before Route::resource
        Route::put('why-choose-us-title-update/',[WhyChooseController::class, 'titleUpdate'])->name('why-choose-us-title.update');
        Route::resource('why-choose-us', WhyChooseController::class);
        /** End Why Choose **/
});                      