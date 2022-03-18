<div class="modal fade" tabindex="-1" role="dialog" id="create-blog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('ketua.berita.store') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        <input id="thumbnail" type="file" class="form-control{{ $errors->has('thumbnail') ? ' is-invalid' : '' }}" name="thumbnail" value="{{ old('thumbnail') }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('thumbnail') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contents">Konten</label>
                        <div class="input-group">
                            <textarea id="contents" class="form-control{{ $errors->has('contents') ? ' is-invalid' : '' }} summernote" name="contents" required>{{ old('contents') }}</textarea>
                            <div class="invalid-feedback">
                                {{ $errors->first('contents') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
