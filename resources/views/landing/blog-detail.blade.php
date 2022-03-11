@extends('layouts.landing.base')

@section('title', $blog->title)

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ url('/storage/thumbnail/' . $blog->thumbnail) }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">{{ $blog->title }}</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a
                                    href="{{ route('beranda') }}">Beranda</a></span> <span class="mr-2"><a
                                    href="{{ route('berita') }}">Berita</a></span> <span>{{ $blog->title }}</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    {!! $blog->contents !!}
                </div> <!-- .col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <h3>Berita Terbaru</h3>
                        @foreach ($blogs as $blog)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style="background-image: url({{ url('/storage/thumbnail/' . $blog->thumbnail) }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="{{ route('detail.berita', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                    <div class="meta">
                                        <div><a href="{{ route('detail.berita', $blog->slug) }}"><span class="icon-calendar"></span> {{ $blog->created_at }}</a></div>
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
