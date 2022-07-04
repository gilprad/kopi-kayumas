@extends('layouts.landing.base')

@section('title', 'Pembayaran')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 ftco-animate">
                    <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                        <h3 class="billing-heading text-center mb-4">Total Transaksi</h3>
                        <div>
                            <p class="d-flex">
                                <span>Subtotal</span>
                                <span class="text-right">Rp{{ number_format($order->subtotal) }}</span>
                            </p>
                            <p class="d-flex">
                                <span>Ongkir</span>
                                <span class="text-right">Rp{{ number_format($order->customer_shipping) }}</span>
                            </p>
                            <hr>
                            <p class="d-flex total-price">
                                <span>Total</span>
                                <span class="text-right">Rp{{ number_format($order->subtotal + $order->customer_shipping) }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-xl-6 ftco-animate">
                    <form action="{{ route('pembayaran.store', $order->id) }}" method="POST" class="billing-form ftco-bg-dark p-3 p-md-5" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h3 class="mb-4 billing-heading text-center">Upload Bukti Transfer</h3>
                        <div class="row">
                            <div class="col-12">
                                @include('layouts.dashboard.alert')
                                <div class="form-group">
                                    <input id="customer_validation" type="file" class="form-control @error('customer_validation') is-invalid @enderror" name="customer_validation" style="padding: 15px" required>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-12 text-center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3 mt-3">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
