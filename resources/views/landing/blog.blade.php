@extends('layouts.landing.base')

@section('title', 'Berita')

@push('style')
    <style>
        .block-27 nav {
            display: flex;
            justify-content: center;
        }

        .block-27 nav ul li {
            margin: 0 2px;
        }
    </style>
@endpush

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('landing/images/bg_1.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Berita</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a
                                    href="{{ route('beranda') }}">Beranda</a></span>
                            <span>Berita</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @if ($blogs->isNotEmpty())
        <section class="ftco-section">
            <div class="container">
                <div class="row d-flex">
                    @foreach ($blogs as $blog)
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="w-100 blog-entry align-self-stretch">
                                <a href="{{ route('detail.berita', $blog->slug) }}" class="block-20"
                                    style="background-image: url({{ asset('storage/thumbnail/' . $blog->thumbnail) }});">
                                </a>
                                <div class="text py-4 d-block">
                                    <div class="meta">
                                        <div><a href="{{ route('detail.berita', $blog->slug) }}">{{ $blog->created_at }}</a></div>
                                    </div>
                                    <h3 class="heading mt-2"><a href="{{ route('detail.berita', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                    <p>{{ $blog->excerpt }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="block-27">
                            {{ $blogs->links('pagination::default') }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
