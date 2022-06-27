@extends('layouts.landing.base')

@section('title', 'Keranjang')

@push('style')
    <style>
        .table tbody tr td.product-remove button {
            background: transparent;
            height: initial !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            padding: 2.5px 10px; 
        }
        .table tbody tr td.product-remove button:hover {
            background: #c49b63;
            cursor: pointer;
        }
        .table tbody tr td.product-remove button:hover span {
            color: #000; 
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
                                @foreach ($carts as $cart)
                                    <tr class="text-center">
                                        <td class="product-remove">
                                            <form action="{{ route('keranjang.destroy', $cart->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"><span class="icon-close"></button>
                                            </form>
                                        </td>

                                        <td class="image-prod">
                                            <div class="img"
                                                style="background-image:url({{ asset('storage/product/' . $cart->product->image) }});"></div>
                                        </td>

                                        <td class="product-name">
                                            <a href="{{ route('detail.toko', $cart->product->slug) }}"><h3 class="mb-0">{{ $cart->product->name }}</h3></a>
                                        </td>

                                        <td class="price">Rp{{ number_format($cart->product->price) }}</td>

                                        <td class="quantity">
                                            <form class="input-group">
                                                <input data-id="{{ $cart->id }}" type="text" name="quantity" class="quantity form-control input-number" 
                                                    value="{{ $cart->quantity }}" min="1" max="100">
                                            </form>
                                        </td>

                                        <td class="total">Rp{{ number_format($cart->product->price * $cart->quantity) }}</td>
                                    </tr><!-- END TR-->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Total Keranjang</h3>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Subtotal</span>
                            <span>Rp{{ number_format($subtotal) }}</span>
                        </p>
                    </div>
                    <p class="text-center"><a href="{{ route('pesanan') }}" class="btn btn-primary py-3 px-4">Proses
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

@push('script')
<script>
    $(document).ready(function() {
        "use strict"
        $('.quantity.form-control.input-number').change(function() {
            let id = $(this).data('id');
            let quantity = $(this).val();
            $.ajax({
                method: "PUT",
                url: "/keranjang/" + id,
                data: {
                    _token: "{{ csrf_token() }}",
                    quantity: quantity,
                },
                dataType: "json",
                success: function(result) {
                    window.location.reload(true);
                }
            }); 
        });
    })
</script>
@endpush
