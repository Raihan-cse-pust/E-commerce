<?php

use App\Http\Controllers\Fontend\pagesController;
use App\Http\Controllers\Fontend\welcomeController;
use Illuminate\Support\Facades\Route;


//fontend routes
Route::get('/',[welcomeController::class, 'index'])->name('welcome');
Route::get('/about-us',[pagesController::class, 'aboutUs'])->name('about.us');
Route::get('/contract-us',[pagesController::class, 'contractUs'])->name('contract.us');
Route::get('/terms-conditions',[pagesController::class, 'termsConditions'])->name('terms.conditions');
Route::get('/privacy-policy',[pagesController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/faq',[pagesController::class, 'faq'])->name('faq');
