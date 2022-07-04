@extends('layouts.dashboard.base')

@section('title', 'Lihat Bukti Pembayaran')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Lihat Bukti Pembayaran</h1>
            </div>

            <div class="section-body">
                @include('layouts.dashboard.alert')
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <img class="card-img my-4" src="{{ url('/storage/customer/' . $order->customer_validation) }}" alt="Customer Validation">
                                <div class="d-flex justify-content-between">
                                    <form action="{{ route('penjual.pesanan.cancel', $order->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-danger mr-1">Pesanan Dibatalkan</button>
                                    </form>
                                    <form action="{{ route('penjual.pesanan.accept', $order->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success mr-1">Pesanan Diterima</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
