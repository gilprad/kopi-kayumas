@extends('layouts.landing.base')

@section('title', 'Checkout')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('landing/images/bg_1.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Beranda</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a
                                    href="{{ route('beranda') }}">Beranda</a></span>
                            <span>Checkout</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 ftco-animate">
                    <form action="#" class="billing-form ftco-bg-dark p-3 p-md-5">
                        <h3 class="mb-4 billing-heading">Rincian Pembayaran</h3>
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Nama Depan</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Nama Belakang</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">Provinsi</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Banten</option>
                                            <option value="">Jawa Barat</option>
                                            <option value="">DKI Jakarta</option>
                                            <option value="">DI Yogyakarta</option>
                                            <option value="">Jawa Tengah</option>
                                            <option value="">Jawa Timur</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">Kabupaten</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Situbondo</option>
                                            <option value="">Bondowoso</option>
                                            <option value="">Jember</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="towncity">Alamat</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postcodezip">Kode Pos</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Nomor Telepon</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailaddress">Email</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                    </form><!-- END -->



                    <div class="row mt-5 pt-3 d-flex">
                        <div class="col-md-6 d-flex">
                            <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Total Keranjang</h3>
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
                        </div>
                        <div class="col-md-6">
                            <div class="cart-detail ftco-bg-dark p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Metode Pembayaran</h3>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" class="mr-2">
                                                Transfer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" class="mr-2"> COD</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="" class="mr-2"> Saya menyetujui
                                                syarat dan ketentuan pembelian</label>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#" class="btn btn-primary py-3 px-4">Melakukan Pemesanan</a></p>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->

                <div class="col-xl-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <h3>Berita Terbaru</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url({{ asset('landing/images/gallery-1.jpg') }});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{ route('detail.berita') }}">Lorem ipsum dolor sit
                                        amet consectetur, adipisicing elit. Ea, illo.</a></h3>
                                <div class="meta">
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-calendar"></span> 9
                                            Oktober 2021</a></div>
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-person"></span>
                                            Admin</a></div>
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-chat"></span>
                                            19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url({{ asset('landing/images/gallery-3.jpg') }});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{ route('detail.berita') }}">Lorem ipsum dolor sit
                                        amet consectetur, adipisicing elit. Ea, illo.</a></h3>
                                <div class="meta">
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-calendar"></span> 9
                                            Oktober 2021</a></div>
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-person"></span>
                                            Admin</a></div>
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-chat"></span>
                                            19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url({{ asset('landing/images/gallery-4.jpg') }});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{ route('detail.berita') }}">Lorem ipsum dolor sit
                                        amet consectetur, adipisicing elit. Ea, illo.</a></h3>
                                <div class="meta">
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-calendar"></span> 9
                                            Oktober 2021</a></div>
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-person"></span>
                                            Admin</a></div>
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-chat"></span>
                                            19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
