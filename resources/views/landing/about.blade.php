@extends('layouts.landing.base')

@section('title', 'Tentang Kami')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('landing/images/bg_1.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Tentang Kami</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('beranda') }}">Beranda</a></span>
                            <span>Tentang Kami</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url({{ asset('landing/images/about.jpg') }});"></div>
        <div class="one-half ftco-animate">
            <div class="overlap">
                <div class="heading-section ftco-animate ">
                    <span class="subheading">Temukan</span>
                    <h2 class="mb-4">Cerita Kami</h2>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium fuga dolorem dignissimos iste
                        maiores voluptatum officia odit! Suscipit praesentium ex iusto unde incidunt tenetur debitis!
                        Voluptates nemo repellat illo hic mollitia, sed repudiandae rerum. Perspiciatis sint magnam
                        dignissimos ratione minima aliquid repellendus quos hic illum est, eos quia illo minus? Ullam
                        cupiditate deserunt, similique laboriosam odio tenetur expedita accusantium velit.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-menu mb-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                    <span class="subheading">Perkenalkan</span>
                    <h2 class="mb-4">Kelompok Tani Kayumas</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section pt-0">
        <div class="container">
            <div class="row">
                @foreach ($groups as $group)
                    <div class="col-md-4">
                        <div class="menu-entry">
                            <a href="#" class="img" style="background-image: url('{{ asset('landing/images/gallery-1.jpg') }}');"></a>
                            <div class="text text-center pt-4">
                                <h3 class="mb-3"><a href="{{ route('tentang.detail', $group->id) }}">{{ $group->name }}</a></h3>
                                <p><a href="{{ route('tentang.detail', $group->id) }}" class="btn btn-block btn-primary py-3 px-5">Lihat Selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
