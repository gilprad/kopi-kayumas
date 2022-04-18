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

    @if ($products->isNotEmpty())
        <section class="ftco-menu mb-5 pb-5">
            <div class="container">
                <div class="row ftco-animate">
                    <div class="col-12">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <div class="icon">
                                    <span class="icon-search"></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Cari Produk Disini...">
                            </div>
                        </form>
                    </div>
                    @foreach ($products as $product)
                        <div class="col-md-4">
                            <div class="menu-entry">
                                <a href="{{ route('detail.toko') }}" class="img"
                                    style="background-image: url({{ asset('landing/images/menu-1.jpg') }});"></a>
                                <div class="text text-center pt-4">
                                    <h3><a href="{{ route('detail.toko') }}">Kopi Maeja</a></h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p class="price"><span>Rp50.000</span></p>
                                    <p><a href="#" class="btn btn-block btn-primary py-3 px-5">Tambah ke Keranjang</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
