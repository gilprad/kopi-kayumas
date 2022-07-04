@extends('layouts.dashboard.base')

@section('title', 'Detail Pesanan')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Pesanan</h1>
            </div>

            <div class="section-body">
                <div class="invoice">
                    <div class="invoice-print">
                        <div class="row">
                            <div class="col-12">
                                <div class="invoice-title">
                                    <h2>Pesanan</h2>
                                    <div class="invoice-number">#{{ $order->id }}</div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">Ringkasan Pesanan</div>
                                <p class="section-lead">Seluruh data yang ada di bawah ini tidak dapat dihapus.</p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-md">
                                        <tr>
                                            <th data-width="40">#</th>
                                            <th>Produk</th>
                                            <th class="text-center">Harga</th>
                                            <th class="text-center">Jumlah</th>
                                            <th class="text-right">Total</th>
                                        </tr>
                                        @foreach ($order->cart->details as $i => $cart)
                                            <tr>
                                                <td>{{ $i+1 }}</td>
                                                <td>{{ $cart->product->name }}</td>
                                                <td class="text-center">Rp{{ number_format($cart->product->price) }}</td>
                                                <td class="text-center">{{ $cart->quantity }}</td>
                                                <td class="text-right">Rp{{ number_format($cart->product->price * $cart->quantity) }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-6">
                                <address>
                                    <strong>Dipesan Oleh:</strong><br>
                                    {{ $order->customer_name }}<br>
                                    {{ $order->customer_address }}<br>
                                    {{ $city->name }}<br>
                                    {{ $province->name }}<br>
                                    {{ $order->customer_postal_code }}
                                </address>
                                <address>
                                    <strong>Metode Pembayaran</strong><br>
                                    {{ $order->payment_type == 'transfer' ? ucfirst($order->payment_type) : strtoupper($order->payment_type) }}<br>
                                    {{ $order->customer_phone }}<br>
                                </address>
                                <address>
                                    <strong>Tanggal Pemesanan</strong><br>
                                    {{ $order->created_at }}
                                </address>
                                <address>
                                    <strong>Nomor Resi</strong><br>
                                    {{ $order->shipping_receipt ? $order->shipping_receipt : 'Belum tersedia' }}
                                </address>
                            </div>
                            <div class="col-sm-6 text-sm-right">
                                <div class="invoice-detail-item">
                                    <div class="invoice-detail-name">Subtotal</div>
                                    <div class="invoice-detail-value">Rp{{ number_format($order->subtotal) }}</div>
                                </div>
                                <div class="invoice-detail-item">
                                    <div class="invoice-detail-name">Ongkir</div>
                                    <div class="invoice-detail-value">Rp{{ number_format($order->customer_shipping) }}</div>
                                </div>
                                <div class="invoice-detail-item">
                                    <div class="invoice-detail-name">Total</div>
                                    <div class="invoice-detail-value invoice-detail-value-lg">Rp{{ number_format($order->subtotal + $order->customer_shipping) }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
