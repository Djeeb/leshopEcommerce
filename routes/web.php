<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Main page
Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');

// Shop
Route::get('/shop', 'HomeController@shop')->name('shop.index');
Route::get('/shop/single-product', 'HomeController@product')->name('shop.show');

// Cart
Route::get('/cart', 'HomeController@cart')->name('cart.index');

// Checkout
Route::get('/checkout', 'HomeController@checkout')->name('checkout.index');
Route::get('/checkout/success', 'HomeController@success')->name('checkout.success');

// Orders
Route::get('/orders', 'HomeController@order')->name('orders');
