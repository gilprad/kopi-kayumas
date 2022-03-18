@extends('layouts.dashboard.base')

@section('title', 'Produk')

@push('style')
    <link rel="stylesheet" href="{{ asset('dashboard/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dashboard/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Produk</h1>
            </div>

            <div class="section-body">
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
                                                <th>Stok</th>
                                                <th>Terjual</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><img src="{{ asset('landing/images/menu-1.jpg') }}" width="100"
                                                        height="100" alt=""></td>
                                                <td>Kopi Maeja</td>
                                                <td>Rp50.000</td>
                                                <td>10</td>
                                                <td>0</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><img src="{{ asset('landing/images/menu-2.jpg') }}" width="100"
                                                        height="100" alt=""></td>
                                                <td>Kopi Mulya</td>
                                                <td>Rp50.000</td>
                                                <td>9</td>
                                                <td>1</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><img src="{{ asset('landing/images/menu-3.jpg') }}" width="100"
                                                        height="100" alt=""></td>
                                                <td>Kopi Talimas</td>
                                                <td>Rp50.000</td>
                                                <td>10</td>
                                                <td>0</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><img src="{{ asset('landing/images/menu-4.jpg') }}" width="100"
                                                        height="100" alt=""></td>
                                                <td>Kopi Mas Bro</td>
                                                <td>Rp50.000</td>
                                                <td>9</td>
                                                <td>1</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
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

    <script>
        "use strict"

        $("#table-product").dataTable({
            "columnDefs": [{
                "sortable": false,
                "targets": [1, 2, 6]
            }]
        });
    </script>
@endpush
