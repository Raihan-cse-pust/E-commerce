<?php

use App\Http\Controllers\Fontend\welcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
//fontend routes
Route::get('/',[welcomeController::class, 'index'])->name('welcome');
