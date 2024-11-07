<?php

use Illuminate\Support\Facades\Route;


// admin dashboard routes
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->middleware(['auth','rolemiddleware:admin'])->name('admin.dashboard');