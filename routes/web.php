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
    return view('landing.home');
})->name('beranda');

Route::get('/berita', function () {
    return view('landing.blog');
})->name('berita');

Route::get('/berita/detail', function () {
    return view('landing.blog-detail');
})->name('detail.berita');

Route::get('/toko', function () {
    return view('landing.shop');
})->name('toko');

Route::get('/toko/detail', function () {
    return view('landing.shop-detail');
})->name('detail.toko');

Route::get('/kontak', function () {
    return view('landing.contact');
})->name('kontak');

Route::get('/keranjang', function () {
    return view('landing.cart');
})->name('keranjang');

Route::get('/checkout', function () {
    return view('landing.checkout');
})->name('checkout');
