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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/my-account', function () {
    return view('my-account');
});

Route::get('/shop-detail', function () {
    return view('shop-detail');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});
