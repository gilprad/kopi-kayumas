<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Ketua\BlogController as KetuaBlogController;
use App\Http\Controllers\Ketua\ProductController;

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

Route::get('/', [LandingController::class, 'home'])->name('beranda');

Route::get('/berita', [LandingController::class, 'blog'])->name('berita');

Route::get('/berita/{slug}', [LandingController::class, 'blogDetail'])->name('detail.berita');

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

Route::get('/checkout', [LandingController::class, 'checkout'])->name('checkout');

Route::prefix('admin')->as('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('pengguna', UserController::class)->except('create');
    Route::resource('berita', AdminBlogController::class)->except(['create', 'show']);
});

Route::prefix('ketua')->as('ketua.')->middleware(['auth', 'role:ketua'])->group(function () {
    Route::get('/', function () {
        return view('dashboard.ketua.home');
    })->name('beranda');

    Route::resource('berita', KetuaBlogController::class)->except(['create', 'show']);

    Route::get('/pesanan', function () {
        return view('dashboard.ketua.order.index');
    })->name('pesanan');

    Route::get('/pesanan/detail', function () {
        return view('dashboard.ketua.order.show');
    })->name('detail.pesanan');

    Route::resource('produk', ProductController::class)->except(['create', 'show']);

    Route::get('/anggota', function () {
        return view('dashboard.ketua.anggota.index');
    })->name('anggota');

    Route::get('/persediaan', function () {
        return view('dashboard.ketua.raw-stock.index');
    })->name('persediaan');

    Route::get('/harga', function () {
        return view('dashboard.ketua.price.index');
    })->name('harga');
});

Route::prefix('anggota')->as('anggota.')->middleware(['auth', 'role:anggota'])->group(function () {
    Route::get('/persediaan', function () {
        return view('dashboard.anggota.raw-stock.index');
    })->name('persediaan');

    Route::get('/harga', function () {
        return view('dashboard.anggota.price.index');
    })->name('harga');
});

Route::prefix('pembeli')->as('pembeli.')->middleware(['auth', 'role:pembeli'])->group(function () {
    Route::get('/pesanan', function () {
        return view('dashboard.pembeli.order.index');
    })->name('pesanan');

    Route::get('/pesanan/detail', function () {
        return view('dashboard.pembeli.order.show');
    })->name('detail.pesanan');
});

Auth::routes([
    'reset' => false,
    'verify' => false,
]);
