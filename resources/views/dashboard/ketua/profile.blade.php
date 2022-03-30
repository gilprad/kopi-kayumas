@extends('layouts.dashboard.base')

@section('title', 'Home')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profil</h1>
            </div>
    
            <div class="section-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="card profile-widget" style="margin: 0">
                            <div class="card-header">
                                <h4>Profil</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush mb-5">
                                    <li class="list-group-item">Nama : {{ $user->name }}</li>
                                    <li class="list-group-item">Role : {{ $user->roles->first()->name }}</li>
                                    <li class="list-group-item">Alamat : {{ $user->profile !== null ? $user->profile->address : '' }}</li>
                                    <li class="list-group-item">Nomor Telepon : {{ $user->profile !== null ? $user->profile->phone : '' }}</li>
                                </ul>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Kelompok Tani : {{ $user->group !== null ? $user->group->name : '' }}</li>
                                    <li class="list-group-item">Alamat Kelompok Tani : {{ $user->group !== null ? $user->group->address : '' }}</li>
                                    <li class="list-group-item">Nomor Telepon Kelompok Tani : {{ $user->group !== null ? $user->group->phone : '' }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Ubah Profil</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('ketua.profile.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $user->profile !== null ? $user->profile->address : '' }}">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('address') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Nomor Telepon</label>
                                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $user->profile !== null ? $user->profile->phone : '' }}">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('phone') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ $user->username }}" required>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('username') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ $user->old_password }}" required>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="group_name">Nama Kelompok Tani</label>
                                        <input id="group_name" type="text" class="form-control{{ $errors->has('group_name') ? ' is-invalid' : '' }}" name="group_name" value="{{ $user->group !== null ? $user->group->name : '' }}">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('group_name') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="group_address">Alamat Kelompok Tani</label>
                                        <input id="group_address" type="text" class="form-control{{ $errors->has('group_address') ? ' is-invalid' : '' }}" name="group_address" value="{{ $user->group !== null ? $user->group->address : ''}}">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('group_address') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="group_phone">Nomor Telepon Kelompok Tani</label>
                                        <input id="group_phone" type="text" class="form-control{{ $errors->has('group_phone') ? ' is-invalid' : '' }}" name="group_phone" value="{{ $user->group !== null ? $user->group->phone : '' }}">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('group_phone') }}
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
