@extends('layouts.landing.base')

@section('title', 'Tentang Kami - ' . $group->name)

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('landing/images/bg_1.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">{{ $group->name }}</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a
                            href="{{ route('beranda') }}">Beranda</a></span> <span class="mr-2"><a
                            href="{{ route('tentang') }}">Tentang Kami</a></span> <span>{{ $group->name }}</span></p>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container mt-5">
            <div class="row block-9">
                <div class="col-lg-4 contact-info ftco-animate">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4">Informasi Kontak</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Alamat:</span> {{ $group->address }}</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Nomor Telepon:</span> <a href="{{ url('https://wa.me/' . $group->phone) }}">{{ $group->phone }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7 ftco-animate">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('landing/images/gallery-1.jpg') }}" alt="Foto Kelompok Tani">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-menu mb-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                    <span class="subheading">Anggota</span>
                    <h2 class="mb-4">{{ $group->name }}</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mb-5 pb-3">
                    <h3 class="mb-5 heading-pricing ftco-animate fadeInUp ftco-animated text-center">Ketua</h3>
                    <div class="pricing-entry d-flex ftco-animate fadeInUp ftco-animated">
                        <div class="img" style="background-image:url({{ url('https://ui-avatars.com/api/?name=' . $group->user->name) }})">
                        </div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span class="pr-0">{{ $group->user->name }}</span></h3>
                            </div>
                            <div class="d-block">
                                <p>Alamat: {{ $group->user->profile ? $group->user->profile->address : '' }}</p>
                                <p>Nomor Telepon: {{ $group->user->profile ? $group->user->profile->phone : '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-5 pb-3">
                    <h3 class="mb-5 heading-pricing ftco-animate fadeInUp ftco-animated text-center">Anggota</h3>
                    <div class="row">
                        @foreach ($group->user->anggota as $anggota)
                            <div class="col-md-4">
                                <div class="pricing-entry d-flex ftco-animate fadeInUp ftco-animated">
                                    <div class="img" style="background-image:url({{ url('https://ui-avatars.com/api/?name=' . $anggota->name) }})">
                                    </div>
                                    <div class="desc pl-3">
                                        <div class="d-flex text align-items-center">
                                            <h3><span class="pr-0">{{ $anggota->name }}</span></h3>
                                        </div>
                                        <div class="d-block">
                                            <p>Alamat: {{ $anggota->profile ? $anggota->address : '' }}</p>
                                            <p>Nomor Telepon: {{ $anggota->profile ? $anggota->profile->phone : '' }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
