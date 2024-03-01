<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Frontend Pages
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/about-us', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/shop', [FrontendController::class, 'shop'])->name('frontend.shop');

// Backend Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard_index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin and Seller Special Access Routes
Route::middleware(['auth', 'verified', 'admin_seller'])->group(function () {
    Route::resource('category', CategoryController::class);
});

// Admin Special Access Routes (Only For Admin)
// Route::middleware(['auth', 'verified', 'admin'])->group(function () {
// });

require __DIR__.'/auth.php';
