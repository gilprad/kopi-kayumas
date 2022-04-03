@extends('layouts.dashboard.base')

@section('title', 'Persediaan')

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
                <h1>Persediaan</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tabel Persediaan</h4>
                                <div class="card-header-action">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#create-bean-stock">Tambah
                                        Data</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-bean-stock">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Bahan</th>
                                                <th>Berat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bean_stocks as $i => $bean_stock)
                                                <tr>
                                                    <td>{{ $i+1 }}</td>
                                                    <td>{{ $bean_stock->name }}</td>
                                                    <td>{{ $bean_stock->weight }}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{ route('anggota.persediaan.edit', $bean_stock->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                            <form action="{{ route('anggota.persediaan.destroy', $bean_stock->id) }}" method="POST">
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
        @include('dashboard.anggota.bean-stock.create')
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

        $("#table-bean-stock").dataTable({
            "columnDefs": [{
                "sortable": false,
                "targets": [1, 2, 3]
            }]
        });
    </script>
@endpush
