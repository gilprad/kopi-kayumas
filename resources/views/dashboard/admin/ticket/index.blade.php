@extends('layouts.dashboard.base')

@section('title', 'Aduan')

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
                <h1>Aduan</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tabel Aduan</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-ticket">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Tanggal Aduan</th>
                                                <th>Nama</th>
                                                <th>Perihal</th>
                                                <th>Aksi</th>
                                                <th>Kontak</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tickets as $i => $ticket)
                                                <tr>
                                                    <td>{{ $i+1 }}</td>
                                                    <td>{{ $ticket->created_at }}</td>
                                                    <td>{{ $ticket->name }}</td>
                                                    <td>{{ $ticket->subject }}</td>
                                                    <td>
                                                        <button class="btn btn-primary btn-ticket" data-toggle="modal" data-id="{{ $ticket->id }}" data-toggle="tooltip" title="" data-original-title="Lihat Aduan"><i class="fa fa-eye"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('https://wa.me/' . $ticket->phone) }}" class="btn btn-primary" data-toggle="tooltip" title="" data-original-title="Hubungi Pengirim"><i class="fa fa-phone"></i></a>
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
        @include('dashboard.admin.ticket.show')
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

        $("#table-ticket").dataTable({
            "columnDefs": [{
                "sortable": false,
                "targets": [1, 2, 3, 4]
            }]
        });

        $(".btn-ticket").click(function() {
            let id = $(this).data("id");
            $.ajax({
                method: "GET",
                url: "/admin/aduan/" + id,
            }).done(function(result) {
                $("#show-ticket").modal("show");
                $("#show-ticket").find(".modal-body").empty();
                $("#show-ticket").find(".modal-body").append(
                    "<p>" + result.message  + "</p>"
                );
            });
        });
    </script>
@endpush
