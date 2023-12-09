<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SslCommerzPaymentController;

Route::get('/', [FrontendController::class, 'welcome'])->name('welcome');
Route::get('/logout', [FrontendController::class, 'logout'])->name('welcome');
Route::get('/add-to-cart/{id}', [FrontendController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('/remove-from-cart/{id}', [FrontendController::class, 'remove_cart'])->name('remove_cart');
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/order-list', [DashboardController::class, 'order_list'])->name('order_list');
    Route::resource('/category', CategoryController::class);
    Route::resource('/sub-category', SubCategoryController::class);
    Route::resource('/brand', BrandController::class);
    Route::resource('/product', ProductController::class);
    Route::get('/get-sub-category/{id}', [DashboardController::class, 'get_sub_category'])->name('get_sub_category');
});


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

