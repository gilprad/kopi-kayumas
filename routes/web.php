<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Ketua\UserController as KetuaUserController;
use App\Http\Controllers\Ketua\ProfileController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Ketua\BlogController as KetuaBlogController;
use App\Http\Controllers\Ketua\ProductController;
use App\Http\Controllers\Ketua\BeanStockController as KetuaBeanStockController;
use App\Http\Controllers\Ketua\BeanPriceController as KetuaBeanPriceController;
use App\Http\Controllers\Anggota\BeanStockController as AnggotaBeanStockController;
use App\Http\Controllers\Anggota\BeanPriceController as AnggotaBeanPriceController;

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
    Route::resource('pengguna', AdminUserController::class)->except('create');
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
    Route::resource('anggota', KetuaUserController::class)->except('create', 'show');
    Route::get('profil', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('profil/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::resource('persediaan', KetuaBeanStockController::class)->except(['create', 'store', 'edit', 'update', 'delete']);
    Route::resource('harga', KetuaBeanPriceController::class)->except(['create', 'show']);
});

Route::prefix('anggota')->as('anggota.')->middleware(['auth', 'role:anggota'])->group(function () {
    Route::resource('persediaan', AnggotaBeanStockController::class)->except(['create', 'show']);
    Route::resource('harga', AnggotaBeanPriceController::class)->except(['create', 'store', 'edit', 'update', 'delete']);
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
