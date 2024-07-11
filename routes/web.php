<?php

use App\Http\Controllers\DashBoard\AddUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopDetailController;
use App\Http\Controllers\Frontend\SignInController;
use App\Http\Controllers\Frontend\SignUpController;
use App\Http\Controllers\DashBoard\DashHomeController;
use App\Http\Controllers\DashBoard\UserListController;

// ============ Routing ==================


Route::get('/', [HomeController::class, 'index']);
Route::get('/ShopDetail', [ShopDetailController::class, 'index']);
Route::get('/SignIn', [SignInController::class, 'index']);
Route::get('/SignUp', [SignUpController::class, 'index']);
Route::get('/DashBoard/Home', [DashHomeController::class, 'index']);
Route::get('/DashBoard/AddUsers', [AddUserController::class, 'index']);
Route::get('/DashBoard/UserList', [UserListController::class, 'index']);
