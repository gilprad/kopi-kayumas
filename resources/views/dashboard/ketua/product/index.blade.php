@extends('layouts.dashboard.base')

@section('title', 'Produk')

@push('style')
    <link rel="stylesheet" href="{{ asset('dashboard/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dashboard/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/modules/summernote/summernote-bs4.css') }}">
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Produk</h1>
            </div>

            <div class="section-body">
                @include('layouts.dashboard.alert')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tabel Produk</h4>
                                <div class="card-header-action">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#create-product">Tambah
                                        Data</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-product">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>Harga</th>
                                                <th>Berat</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $i => $product)
                                                <tr>
                                                    <td>{{ $i+1 }}</td>
                                                    <td><img src="{{ asset('storage/product/' . $product->image) }}" width="100"
                                                            height="100" alt=""></td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>Rp{{ number_format($product->price) }}</td>
                                                    <td>{{ $product->weight }}</td>
                                                    <td>{!! $product->status !!}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{ route('ketua.produk.edit', $product->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                            <form action="{{ route('ketua.produk.destroy', $product->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit"><i class="fa fa-times"></i></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('dashboard.ketua.product.create')
    </div>
@endsection

@push('script')
    <script src="{{ asset('dashboard/modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('dashboard/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('dashboard/modules/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/page/modules-datatables.js') }}"></script>
    <script src="{{ asset('dashboard/modules/summernote/summernote-bs4.min.js') }}"></script>

    <script>
        "use strict"

        $("#table-product").dataTable({
            "columnDefs": [{
                "sortable": false,
                "targets": [1, 2, 3, 4]
            }]
        });
    </script>
@endpush
