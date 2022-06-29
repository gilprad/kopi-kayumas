@extends('layouts.landing.base')

@section('title', 'Checkout')

@push('style')
    <style>
        .billing-form .form-control {
            color: white !important;
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
                        <h1 class="mb-3 mt-5 bread">Checkout</h1>
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
                <form action="{{ route('pesanan.store', $cart->id) }}" method="POST" class="col-xl-8 ftco-animate">
                    @csrf
                    <input type="hidden" name="weight" value="{{ $weight }}">
                    <div class="billing-form ftco-bg-dark p-3 p-md-5">
                        <h3 class="mb-4 billing-heading">Rincian Pembayaran</h3>
                        <div class="row align-items-end">
                            @include('layouts.dashboard.alert')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" id="name" name="customer_name" class="form-control" placeholder="Masukkan nama pembeli" value="{{ Auth::user()->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Nomor Telepon</label>
                                    <input type="text" id="phone" name="customer_phone" class="form-control" placeholder="Masukkan nomor telepon pembeli" value="{{ Auth::user()->profile !== null ? Auth::user()->profile->phone : '' }}" required>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="province">Provinsi</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="customer_province" id="province" class="form-control">
                                            <option style="color: black" value="">-- Pilih provinsi tujuan --</option>
                                            @foreach ($provinces as $value => $province)
                                                <option style="color: black" value="{{ $value }}">{{ $province }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">Kabupaten</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="customer_city" id="city" class="form-control">
                                            <option value="">-- Pilih kota tujuan --</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="towncity">Alamat</label>
                                    <input type="text" id="towncity" name="customer_address" class="form-control" placeholder="Masukkan alamat pembeli" value="{{ Auth::user()->profile !== null ? Auth::user()->profile->address : '' }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postcodezip">Kode Pos</label>
                                    <input type="text" id="postcodezip" name="customer_postal_code" class="form-control" placeholder="Masukkan kode pos pembeli" required>
                                </div>
                            </div>
                            <div id="shipping_method" class="col-12 d-none">
                                <div class="form-group">
                                    <label for="customer_shipping">Opsi Pengiriman</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="customer_shipping" id="customer_shipping" class="form-control"></select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- END -->



                    <div class="row mt-5 pt-3 d-flex">
                        <div class="col-md-6 d-flex">
                            <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Total Keranjang</h3>
                                <p class="d-flex">
                                    <span>Subtotal</span>
                                    <span>Rp{{ number_format($subtotal) }}</span>
                                    <input type="hidden" name="subtotal" value="{{ $subtotal }}">
                                </p>
                                <p class="d-flex">
                                    <span>Ongkir</span>
                                    <span id="ongkir">Rp0</span>
                                </p>
                                <hr>
                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    <span id="total">Rp{{ number_format($subtotal) }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Metode Pembayaran</h3>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="payment_type" class="mr-2" value="transfer" checked>
                                                Transfer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="payment_type" class="mr-2" value="cod"> COD</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label><input name="terms" type="checkbox" value="checked" class="mr-2"> Saya menyetujui
                                                syarat dan ketentuan pembelian</label>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <button type="submit" class="btn btn-primary py-3 px-4">Melakukan Pemesanan</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </form> <!-- .col-md-8 -->

                <div class="col-xl-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <h3>Berita Terbaru</h3>
                        @foreach ($blogs as $blog)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style="background-image: url({{ url('/storage/thumbnail/' . $blog->thumbnail) }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="{{ route('detail.berita', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                    <div class="meta">
                                        <div><a href="{{ route('detail.berita', $blog->slug) }}"><span class="icon-calendar"></span> {{ $blog->created_at }}</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $(document).ready(function () {
            $('select[name="customer_province"]').on('change', function () {
                let provinceId = $(this).val();
                if (provinceId) {
                    $.ajax({
                        url: '/pesanan/cities/' + provinceId,
                        type: "GET",
                        dataType: "json",
                        success: function (response) {
                            $('select[name="customer_city"]').empty();
                            $('select[name="customer_city"]').append('<option style="color: black" value="">-- Pilih kota tujuan --</option>');
                            $.each(response, function (key, value) {
                                $('select[name="customer_city"]').append('<option style="color: black" value="' + key + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    $('select[name="customer_city"]').append('<option style="color: black" value="">-- Pilih kota tujuan --</option>');
                }
            });

            let isProcessing = false;

            $('select[name="customer_city"]').on('change', function (e) {
                e.preventDefault();
                let city_origin = 418;
                let city_destination = $(this).val();
                let courier = 'jne';
                let weight = $("input[name='weight']").val();

                if(isProcessing) {
                    return;
                }

                isProcessing = true;
                $.ajax({
                    method: "POST",
                    url: "/pesanan/ongkir",
                    data: {
                        _token: "{{ csrf_token() }}",
                        city_origin: city_origin,
                        city_destination: city_destination,
                        courier: courier,
                        weight: weight
                    },
                    dataType: "json",
                    success: function(result) {
                        isProcessing = false;
                        if(result) {
                            $('#customer_shipping').empty();
                            $('#shipping_method').addClass('d-block');
                            $('#customer_shipping').append('<option style="color: black" value="">-- Pilih jenis pengiriman --</option>');
                            $.each(result[0]['costs'], function(key, value) {
                                $('#customer_shipping').append(
                                    '<option style="color: black" value="'+value.cost[0].value+'">'+result[0].code.toUpperCase()+' : '+value.service+' - Rp. '+value.cost[0].value+' ('+value.cost[0].etd+' hari)</option>'
                                );
                            });
                        }
                    }
                });
            });

            $('select[name="customer_shipping"]').on('change', function () {
                let subtotal = parseInt({{ $subtotal }});
                let ongkir = parseInt($(this).val());
                let total = subtotal + ongkir;

                $('#ongkir').html('Rp' + ongkir.toLocaleString('en'));
                $('#total').html('Rp' + total.toLocaleString('en'));
            });
        });
    </script>
@endpush
