@extends('layouts.dashboard.base')

@section('title', 'Lihat Bukti Pengembalian Barang')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Lihat Bukti Pengembalian Barang</h1>
            </div>

            <div class="section-body">
                @include('layouts.dashboard.alert')
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="h6">Bukti Pengembalian Barang</h2>
                            </div>
                            <div class="card-body">
                                <img class="card-img my-4" src="{{ url('/storage/refund/' . $order->refund_validation) }}" alt="Customer Validation">
                                <p>{{ $order->refund_reason }}</p>
                                <div class="d-flex justify-content-between">
                                    <form action="{{ route('penjual.pesanan.refund.decline', $order->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-danger mr-1">Refund Ditolak</button>
                                    </form>
                                    <form action="{{ route('penjual.pesanan.refund.accept', $order->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success mr-1">Refund Diterima</button>
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
