@extends('layouts.dashboard.base')

@section('title', 'Refund Pesanan')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Refund Pesanan</h1>
            </div>

            <div class="section-body">
                @include('layouts.dashboard.alert')
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('pembeli.pesanan.refund', $order->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="refund_validation">Foto Kondisi Barang</label>
                                        <input id="refund_validation" type="file" class="form-control{{ $errors->has('refund_validation') ? ' is-invalid' : '' }}" name="refund_validation" value="{{ $order->refund_validation }}" required>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('refund_validation') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="refund_reason">Alasan Pengembalian</label>
                                        <input id="refund_reason" type="text" class="form-control{{ $errors->has('refund_reason') ? ' is-invalid' : '' }}" name="refund_reason" value="{{ $order->refund_reason }}" required>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('refund_reason') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
