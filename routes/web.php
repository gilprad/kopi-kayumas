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

Route::get('/masuk', function () {
    return view('landing.login');
})->name('masuk');

Route::get('/daftar', function () {
    return view('landing.register');
})->name('daftar');

Route::prefix('kepala')->group(function () {
    Route::get('/', function () {
        return view('dashboard.kepala.home');
    })->name('kepala.beranda');

    Route::get('/pesanan', function () {
        return view('dashboard.kepala.order.index');
    })->name('kepala.pesanan');

    Route::get('/pesanan/detail', function () {
        return view('dashboard.kepala.order.show');
    })->name('kepala.detail.pesanan');

    Route::get('/produk', function () {
        return view('dashboard.kepala.product.index');
    })->name('kepala.produk');

    Route::get('/anggota', function () {
        return view('dashboard.kepala.anggota.index');
    })->name('kepala.anggota');

    Route::get('/persediaan', function () {
        return view('dashboard.kepala.raw-stock.index');
    })->name('kepala.persediaan');

    Route::get('/harga', function () {
        return view('dashboard.kepala.price.index');
    })->name('kepala.harga');
});

Route::prefix('anggota')->group(function () {
    Route::get('/persediaan', function () {
        return view('dashboard.anggota.raw-stock.index');
    })->name('anggota.persediaan');

    Route::get('/harga', function () {
        return view('dashboard.anggota.price.index');
    })->name('anggota.harga');
});

Route::prefix('pelanggan')->group(function () {
    Route::get('/pesanan', function () {
        return view('dashboard.pelanggan.order.index');
    })->name('pelanggan.pesanan');

    Route::get('/pesanan/detail', function () {
        return view('dashboard.pelanggan.order.show');
    })->name('pelanggan.detail.pesanan');
});
