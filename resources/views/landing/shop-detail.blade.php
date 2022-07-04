@extends('layouts.landing.base')

@section('title', 'Detail Toko')

@push('style')
    <style>
        .btn-primary.btn-cart {
            color: black !important;
        }
        
        .btn-primary.btn-cart:hover {
            border: 1px solid #c49b63 !important;
            color: #c49b63 !important;
        }
    </style>
@endpush

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('landing/images/bg_1.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">{{ $product->name }}</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a
                                    href="{{ route('beranda') }}">Beranda</a></span>
                            <span>{{ $product->name }}</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="{{ asset('storage/product/' . $product->image) }}" class="image-popup"><img
                            src="{{ asset('storage/product/' . $product->image) }}" class="img-fluid"
                            alt="Gambar {{ $product->name }}"></a>
                </div>
                <form class="col-lg-6 product-details pl-md-5 ftco-animate" action="{{ route('keranjang.store') }}" method="POST">
                    @csrf
                    <h3>{{ $product->name }}</h3>
                    <p class="price"><span>Rp{{ number_format($product->price) }}</span></p>
                    {!! $product->description !!}
                    <div class="row mt-4">
                        <div class="input-group col-md-6 d-flex mb-3">
                            <span class="input-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                    <i class="icon-minus"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
                                min="1" max="100">
                            <span class="input-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                    <i class="icon-plus"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    @if($product->getRawOriginal('status'))
                        <button type="submit" class="btn btn-primary btn-cart py-3 px-5">Tambah ke Keranjang</button>
                    @else
                        <button type="submit" class="btn btn-cart py-3 px-5" disabled>Barang Tidak Tersedia</button>
                    @endif
                </form>
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

@push('script')
    <script>
        $(document).ready(function() {
            let quantity = 0;
            $('.quantity-right-plus').click(function(e) {
                e.preventDefault();
                let quantity = parseInt($('#quantity').val());
                $('#quantity').val(quantity + 1);
            });

            $('.quantity-left-minus').click(function(e) {
                e.preventDefault();
                let quantity = parseInt($('#quantity').val());
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });
        });
    </script>
@endpush
