<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('user',UserController::class);
Route::resource('product',ProductController::class);
Route::resource('order',OrderController::class);
Route::resource('orderItem',OrderItemController::class);