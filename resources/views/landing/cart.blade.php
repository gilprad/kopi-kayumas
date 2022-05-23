@extends('layouts.landing.base')

@section('title', 'Keranjang')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('landing/images/bg_1.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Keranjang</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a
                                    href="{{ route('beranda') }}">Beranda</a></span>
                            <span>Keranjang</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>

                                    <td class="image-prod">
                                        <div class="img"
                                            style="background-image:url({{ asset('landing/images/menu-2.jpg') }});"></div>
                                    </td>

                                    <td class="product-name">
                                        <h3>Kopi Mulya</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    </td>

                                    <td class="price">Rp50.000</td>

                                    <td class="quantity">
                                        <div class="input-group mb-3">
                                            <input type="text" name="quantity" class="quantity form-control input-number"
                                                value="1" min="1" max="100">
                                        </div>
                                    </td>

                                    <td class="total">Rp50.000</td>
                                </tr><!-- END TR-->

                                <tr class="text-center">
                                    <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>

                                    <td class="image-prod">
                                        <div class="img"
                                            style="background-image:url({{ asset('landing/images/menu-4.jpg') }});"></div>
                                    </td>

                                    <td class="product-name">
                                        <h3>Kopi Mas Bro</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, eum.</p>
                                    </td>

                                    <td class="price">Rp50.000</td>

                                    <td class="quantity">
                                        <div class="input-group mb-3">
                                            <input type="text" name="quantity" class="quantity form-control input-number"
                                                value="2" min="1" max="100">
                                        </div>
                                    </td>

                                    <td class="total">Rp100.000</td>
                                </tr><!-- END TR-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Total Keranjang</h3>
                        <p class="d-flex">
                            <span>Subtotal</span>
                            <span>Rp150.000</span>
                        </p>
                        <p class="d-flex">
                            <span>Ongkir</span>
                            <span>Rp18.000</span>
                        </p>
                        <p class="d-flex">
                            <span>Diskon</span>
                            <span>Rp8.000</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span>Rp160.000</span>
                        </p>
                    </div>
                    <p class="text-center"><a href="{{ route('checkout') }}" class="btn btn-primary py-3 px-4">Proses
                            ke Checkout</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Temukan</span>
                    <h2 class="mb-4">Produk Terkait</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptas ea aspernatur iste, fugiat
                        ipsum fuga enim distinctio vero deserunt.</p>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="menu-entry">
                            <a href="{{ route('detail.toko', $product->slug) }}" class="img"
                                style="background-image: url({{ asset('storage/product/' . $product->image) }});"></a>
                            <div class="text text-center pt-4">
                                <h3><a href="{{ route('detail.toko', $product->slug) }}">{{ $product->name }}</a></h3>
                                <p>{{ $product->excerpt }}</p>
                                <p class="price"><span>Rp{{ number_format($product->price) }}</span></p>
                                <p><a href="{{ route('detail.toko', $product->slug) }}" class="btn btn-block btn-primary py-3 px-5">Lihat Produk</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
