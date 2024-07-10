<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopDetailController;
use App\Http\Controllers\Frontend\SignInController;
use App\Http\Controllers\Frontend\SignUpController;

// ============ Routing ==================


Route::get('/', [HomeController::class, 'index']);
Route::get('/ShopDetail', [ShopDetailController::class, 'index']);
Route::get('/SignIn', [SignInController::class, 'index']);
Route::get('/SignUp', [SignUpController::class, 'index']);
