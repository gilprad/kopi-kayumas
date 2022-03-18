@extends('layouts.landing.base')

@section('title', 'Masuk')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-xl-6 ftco-animate">
                    <form action="{{ route('login') }}" method="POST" class="billing-form ftco-bg-dark p-3 p-md-5">
                        @csrf
                        <h3 class="mb-4 billing-heading text-center">Masuk ke Situs Web</h3>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-12 text-center">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <a class="d-block" href="{{ route('register') }}">Belum memiliki akun?</a>
                                    <button type="submit" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3 mt-3">Masuk</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
