<div class="modal fade" tabindex="-1" role="dialog" id="create-product">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('ketua.produk.store') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <div class="input-group">
                            <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }} summernote" name="description" required>{{ old('description') }}</textarea>
                            <div class="invalid-feedback">
                                {{ $errors->first('description') }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('price') }}
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
