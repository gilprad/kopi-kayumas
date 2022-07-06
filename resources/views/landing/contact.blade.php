@extends('layouts.landing.base')

@section('title', 'Kontak')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('landing/images/bg_1.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Kontak Kami</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a
                                    href="{{ route('beranda') }}">Beranda</a></span>
                            <span>Kontak</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container mt-5">
            <div class="row block-9">
                <div class="col-md-4 contact-info ftco-animate">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4">Informasi Kontak</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Alamat:</span> Desa Kayumas, Kecamatan Arjasa, Kabupaten Situbondo, Indonesia</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Nomor Telepon:</span> <a href="tel://123456789">+62 812 345 6789</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Email:</span> <a href="mailto:info@kopi.in">info@kopi.in</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Website:</span> <a href="{{ route('beranda') }}">kopi.in</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 ftco-animate">
                    @include('layouts.dashboard.alert')
                    <form action="{{ route('ticket.store') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Nama Anda" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="phone" type="text" class="form-control" placeholder="Nomor Telepon Anda" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input name="subject" type="text" class="form-control" placeholder="Perihal" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1975.7677774200542!2d114.14373459879363!3d-7.943476096693512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf16d61444d0b0e0e!2sPTP%20Nusantara%20XII!5e0!3m2!1sid!2sid!4v1657015978728!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection
