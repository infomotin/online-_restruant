<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Admin\AdminAuthController;
use Gloudemans\Shoppingcart\Facades\Cart;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.home.Home');
// });

// adminAuthController 
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// require __DIR__.'/admin.php';
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/product-details/{slug}', [FrontendController::class, 'productDetails'])->name('product.details');
Route::get('/product-details-modal/{id}', [FrontendController::class, 'productDetailsModal'])->name('product.details.modal');
// CartContorller 
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');
