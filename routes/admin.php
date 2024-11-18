<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\WhyChooseController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\Admin\ProductSizeController;
use App\Http\Controllers\Admin\ProductOptionController;




// admin dashboard routes
Route::group(['prefix' => 'admin','as' => 'admin.'], function () {
        // Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        /** Profile **/
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        /** End Profile **/
        /**Sliders **/
       Route::resource('slider', SliderController::class);
        /** End Sliders */
        /** Why Choose */
        //if you want to more routes you can add here but must be before Route::resource
        Route::put('why-choose-us-title-update/',[WhyChooseController::class, 'titleUpdate'])->name('why-choose-us-title.update');
        Route::resource('why-choose-us', WhyChooseController::class);
        /** End Why Choose */
        // category 
        Route::resource('category', CategoryController::class);
        // end category
        // product 
        Route::resource('product', ProductController::class);
        // end product
         // product 
         Route::get('product-gallery/{id}', [ProductGalleryController::class, 'showProduct'])->name('product-photog-allery.index');
         Route::resource('product-gallery', ProductGalleryController::class);
         // end product
        //  product size 
        Route::get('product-size/{id}', [ProductSizeController::class, 'showProduct'])->name('product-size.adding');
        Route::resource('product-size', ProductSizeController::class);
        // end product size

        // productoption 
        Route::get('product-option/{id}', [ProductOptionController::class, 'index'])->name('product-option.adding');
        Route::resource('product-option', ProductOptionController::class);
});                      