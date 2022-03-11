@extends('layouts.dashboard.base')

@section('title', 'Ubah Berita')

@push('style')
    <link rel="stylesheet" href="{{ asset('dashboard/modules/summernote/summernote-bs4.css') }}">
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Ubah Berita</h1>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('ketua.berita.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="thumbnail">Thumbnail</label>
                                        <img class="card-img my-4" src="{{ url('/storage/thumbnail/' . $blog->thumbnail) }}" alt="Blog Thumbnail">
                                        <input id="thumbnail" type="file" class="form-control{{ $errors->has('thumbnail') ? ' is-invalid' : '' }}" name="thumbnail" value="{{ $blog->thumbnail }}">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('thumbnail') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Judul</label>
                                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $blog->title }}" required>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('title') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="contents">Konten</label>
                                        <div class="input-group">
                                            <textarea id="contents" class="form-control{{ $errors->has('contents') ? ' is-invalid' : '' }} summernote" name="contents" required>{{ $blog->contents }}</textarea>
                                            <div class="invalid-feedback">
                                                {{ $errors->first('contents') }}
                                            </div>
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
