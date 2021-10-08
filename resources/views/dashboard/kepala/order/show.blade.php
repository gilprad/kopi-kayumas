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
                                    <div class="invoice-number">#1</div>
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
                                        <tr>
                                            <td>1</td>
                                            <td>Kopi Mulya</td>
                                            <td class="text-center">Rp50.000</td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">Rp50.000</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Kopi Mas Bro</td>
                                            <td class="text-center">Rp50.000</td>
                                            <td class="text-center">2</td>
                                            <td class="text-right">Rp100.000</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-6">
                                <address>
                                    <strong>Dipesan Oleh:</strong><br>
                                    Herman<br>
                                    Jalan PTPN XII No. 1, Desa Kayumas, Kecamatan Arjasa<br>
                                    Kabupaten Situbondo<br>
                                    Jawa Timur<br>
                                    68371
                                </address>
                                <address>
                                    <strong>Metode Pembayaran</strong><br>
                                    COD<br>
                                    082123456798<br>
                                    herman@email.com
                                </address>
                                <address>
                                    <strong>Tanggal Pemesanan</strong><br>
                                    10 Oktober 2021
                                </address>
                            </div>
                            <div class="col-sm-6 text-sm-right">
                                <div class="invoice-detail-item">
                                    <div class="invoice-detail-name">Subtotal</div>
                                    <div class="invoice-detail-value">Rp150.000</div>
                                </div>
                                <div class="invoice-detail-item">
                                    <div class="invoice-detail-name">Ongkir</div>
                                    <div class="invoice-detail-value">Rp18.000</div>
                                </div>
                                <div class="invoice-detail-item">
                                    <div class="invoice-detail-name">Diskon</div>
                                    <div class="invoice-detail-value">Rp8.000</div>
                                </div>
                                <div class="invoice-detail-item">
                                    <div class="invoice-detail-name">Total</div>
                                    <div class="invoice-detail-value invoice-detail-value-lg">Rp160.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-md-right">
                        <div class="float-md-left mb-lg-0 mb-3">
                            <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-check"></i> Proses Pesanan</button>
                            <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Tolak Pesanan</button>
                        </div>
                        <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Cetak</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
