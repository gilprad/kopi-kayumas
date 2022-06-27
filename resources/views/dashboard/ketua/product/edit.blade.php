@extends('layouts.dashboard.base')

@section('title', 'Ubah Produk')

@push('style')
    <link rel="stylesheet" href="{{ asset('dashboard/modules/summernote/summernote-bs4.css') }}">
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Ubah Produk</h1>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('ketua.produk.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="image">Gambar</label>
                                        <img class="card-img my-4" src="{{ url('/storage/product/' . $product->image) }}" alt="Product Image">
                                        <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ $product->image }}">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('image') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $product->name }}" required>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <div class="input-group">
                                            <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }} summernote" name="description" required>{{ $product->description }}</textarea>
                                            <div class="invalid-feedback">
                                                {{ $errors->first('description') }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Harga</label>
                                        <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ $product->price }}" required>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('price') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="weight">Berat (gram)</label>
                                        <input id="weight" type="number" class="form-control{{ $errors->has('weight') ? ' is-invalid' : '' }}" name="weight" value="{{ $product->weight }}" required>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('weight') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" class="form-control" name="status">
                                            @if($product->status)
                                                <option value="1" selected>Aktif</option>
                                                <option value="0">Nonaktif</option>
                                            @else
                                                <option value="1">Aktif</option>
                                                <option value="0" selected>Nonaktif</option>
                                            @endif
                                        </select>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('status') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
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

@push('script')
    <script src="{{ asset('dashboard/modules/summernote/summernote-bs4.min.js') }}"></script>
@endpush
