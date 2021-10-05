@extends('layouts.landing.base')

@section('title', 'Berita')

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

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{ route('detail.berita') }}" class="block-20"
                            style="background-image: url({{ asset('landing/images/gallery-1.jpg') }});">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="{{ route('detail.berita') }}">9 Oktober 2021</a></div>
                                <div><a href="{{ route('detail.berita') }}">Admin</a></div>
                                <div><a href="{{ route('detail.berita') }}" class="meta-chat"><span
                                            class="icon-chat"></span> 3</a>
                                </div>
                            </div>
                            <h3 class="heading mt-2"><a href="{{ route('detail.berita') }}">Lorem, ipsum dolor.</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, repellendus!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{ route('detail.berita') }}" class="block-20"
                            style="background-image: url({{ asset('landing/images/gallery-3.jpg') }});">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="{{ route('detail.berita') }}">9 Oktober 2021</a></div>
                                <div><a href="{{ route('detail.berita') }}">Admin</a></div>
                                <div><a href="{{ route('detail.berita') }}" class="meta-chat"><span
                                            class="icon-chat"></span> 3</a>
                                </div>
                            </div>
                            <h3 class="heading mt-2"><a href="{{ route('detail.berita') }}">Lorem, ipsum dolor.</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, repellendus!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{ route('detail.berita') }}" class="block-20"
                            style="background-image: url({{ asset('landing/images/gallery-4.jpg') }});">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="{{ route('detail.berita') }}">9 Oktober 2021</a></div>
                                <div><a href="{{ route('detail.berita') }}">Admin</a></div>
                                <div><a href="{{ route('detail.berita') }}" class="meta-chat"><span
                                            class="icon-chat"></span> 3</a>
                                </div>
                            </div>
                            <h3 class="heading mt-2"><a href="{{ route('detail.berita') }}">Lorem, ipsum dolor.</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, repellendus!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{ route('detail.berita') }}" class="block-20"
                            style="background-image: url({{ asset('landing/images/gallery-1.jpg') }});">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="{{ route('detail.berita') }}">9 Oktober 2021</a></div>
                                <div><a href="{{ route('detail.berita') }}">Admin</a></div>
                                <div><a href="{{ route('detail.berita') }}" class="meta-chat"><span
                                            class="icon-chat"></span> 3</a>
                                </div>
                            </div>
                            <h3 class="heading mt-2"><a href="{{ route('detail.berita') }}">Lorem, ipsum dolor.</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, repellendus!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{ route('detail.berita') }}" class="block-20"
                            style="background-image: url({{ asset('landing/images/gallery-3.jpg') }});">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="{{ route('detail.berita') }}">9 Oktober 2021</a></div>
                                <div><a href="{{ route('detail.berita') }}">Admin</a></div>
                                <div><a href="{{ route('detail.berita') }}" class="meta-chat"><span
                                            class="icon-chat"></span> 3</a>
                                </div>
                            </div>
                            <h3 class="heading mt-2"><a href="{{ route('detail.berita') }}">Lorem, ipsum dolor.</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, repellendus!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{ route('detail.berita') }}" class="block-20"
                            style="background-image: url({{ asset('landing/images/gallery-4.jpg') }});">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="{{ route('detail.berita') }}">9 Oktober 2021</a></div>
                                <div><a href="{{ route('detail.berita') }}">Admin</a></div>
                                <div><a href="{{ route('detail.berita') }}" class="meta-chat"><span
                                            class="icon-chat"></span> 3</a>
                                </div>
                            </div>
                            <h3 class="heading mt-2"><a href="{{ route('detail.berita') }}">Lorem, ipsum dolor.</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, repellendus!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
