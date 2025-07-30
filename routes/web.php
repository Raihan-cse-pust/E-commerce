<?php

use App\Models\Compare;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fontend\CartController;
use App\Http\Controllers\Fontend\pagesController;
use App\Http\Controllers\Fontend\CompareController;
use App\Http\Controllers\Fontend\ProductController;
use App\Http\Controllers\Fontend\welcomeController;
use App\Http\Controllers\Fontend\CheckoutController;
use App\Http\Controllers\Fontend\WishlistController;


//fontend routes
Route::get('/',[welcomeController::class, 'index'])->name('welcome');
Route::get('/about-us',[pagesController::class, 'aboutUs'])->name('about.us');
Route::get('/contract-us',[pagesController::class, 'contractUs'])->name('contract.us');
Route::get('/terms-conditions',[pagesController::class, 'termsConditions'])->name('terms.conditions');
Route::get('/privacy-policy',[pagesController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/faq',[pagesController::class, 'faq'])->name('faq');
Route::get('/products',[ProductController::class, 'index'])->name('products.index');
Route::get('/compare',[CompareController::class, 'index'])->name('compare.index');
Route::get('/cart',[CartController::class, 'index'])->name('cart.index');
Route::get('/checkout',[CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/wishlist',[WishlistController::class, 'index'])->name('wishlist.index');

