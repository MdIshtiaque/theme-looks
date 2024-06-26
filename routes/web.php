<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class, 'index'])->name('index.product');
Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add.product');
Route::post('store-product', [ProductController::class, 'store'])->name('store.product');

Route::post('place-order', [OrderController::class, 'placeOrder'])->name('place.order');
Route::get('list-order', [OrderController::class, 'orderList'])->name('list.order');
