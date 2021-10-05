@extends('layouts.landing.base')

@section('title', 'Toko')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('landing/images/bg_1.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Produk Kami</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a
                                    href="{{ route('beranda') }}">Beranda</a></span>
                            <span>Produk</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 pb-3">
                    <h3 class="mb-5 heading-pricing ftco-animate">Kopi Arabika</h3>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-1.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Maeja</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-2.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Mulya</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-3.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Talimas</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-4.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Mas Bro</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-5 pb-3">
                    <h3 class="mb-5 heading-pricing ftco-animate">Kopi Robusta</h3>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-1.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Maeja</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-2.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Mulya</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-3.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Talimas</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-4.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Mas Bro</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h3 class="mb-5 heading-pricing ftco-animate">Kopi Lanang</h3>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-1.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Maeja</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-2.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Mulya</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-3.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Talimas</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-4.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Mas Bro</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h3 class="mb-5 heading-pricing ftco-animate">Kopi Luwak</h3>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-1.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Maeja</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-2.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Mulya</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-3.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Talimas</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                            style="background-image: url({{ asset('landing/images/menu-4.jpg') }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kopi Mas Bro</span></h3>
                                <span class="price">Rp50.000</span>
                            </div>
                            <div class="d-block">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-menu mb-5 pb-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Temukan</span>
                    <h2 class="mb-4">Produk Kami</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut obcaecati eaque tenetur id, consequatur
                        voluptas accusamus quas dolores aperiam eligendi.</p>
                </div>
            </div>
            <div class="row d-md-flex">
                <div class="col-lg-12 ftco-animate p-md-5">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                    role="tab" aria-controls="v-pills-1" aria-selected="true">Kopi Arabika</a>

                                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                    role="tab" aria-controls="v-pills-2" aria-selected="false">Kopi Robusta</a>

                                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"
                                    role="tab" aria-controls="v-pills-3" aria-selected="false">Kopi Luwak</a>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">

                            <div class="tab-content ftco-animate" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="v-pills-1-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-1.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Maeja</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-2.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Mulya</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-3.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Talimas</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-4.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Mas Bro</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-1.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Maeja</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-2.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Mulya</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-1.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Maeja</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-2.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Mulya</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-3.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Talimas</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-4.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Mas Bro</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-1.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Maeja</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-2.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Mulya</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-1.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Maeja</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-2.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Mulya</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-3.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Talimas</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-4.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Mas Bro</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-1.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Maeja</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="menu-entry">
                                                <a href="{{ route('detail.toko') }}" class="img"
                                                    style="background-image: url({{ asset('landing/images/menu-2.jpg') }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ route('detail.toko') }}">Kopi Mulya</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <p class="price"><span>Rp50.000</span></p>
                                                    <p><a href="{{ route('keranjang') }}"
                                                            class="btn btn-primary btn-outline-primary">Tambah ke
                                                            Keranjang</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
