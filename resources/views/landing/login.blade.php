@extends('layouts.landing.base')

@section('title', 'Masuk')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-xl-6 ftco-animate">
                    <form action="#" class="billing-form ftco-bg-dark p-3 p-md-5">
                        <h3 class="mb-4 billing-heading text-center">Masuk ke Situs Web</h3>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-12 text-center">
                                <div class="form-group">
                                    <a class="d-block" href="{{ route('daftar') }}">Belum memiliki akun?</a>
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
