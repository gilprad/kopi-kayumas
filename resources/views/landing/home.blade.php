@extends('layouts.landing.base')

@section('title', 'Beranda')

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{ asset('landing/images/bg_1.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Selamat Datang Di</span>
                        <h1 class="mb-4">Kopi Kayumas Situbondo</h1>
                        <p class="mb-4 mb-md-5">Cita rasa kopi terbaik dari Desa Kayumas, Kabupaten Situbondo.<br>Surga
                            tersembunyi di ujung timur Pulau Jawa</p>
                        <p>
                            <a href="{{ route('detail.toko') }}"
                                class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Produk</a>
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

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-choices"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Mudah Dipesan</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab fugit voluptate vero ea ratione
                                tempora!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-delivery-truck"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Pengiriman Cepat</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab fugit voluptate vero ea ratione
                                tempora!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-coffee-bean"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Kopi Berkualitas</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab fugit voluptate vero ea ratione
                                tempora!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pr-md-5">
                    <div class="heading-section text-md-right ftco-animate">
                        <span class="subheading">Temukan</span>
                        <h2 class="mb-4">Produk Kami</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum,
                            voluptatibus ipsa, molestiae expedita minus, delectus dolorum magni officia ex a aliquid
                            impedit. Exercitationem temporibus minima mollitia fugiat alias perspiciatis necessitatibus.</p>
                        <p><a href="{{ route('detail.toko') }}"
                                class="btn btn-primary btn-outline-primary px-4 py-3">Lihat Selengkapnya</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="#" class="img"
                                    style="background-image: url({{ asset('landing/images/menu-1.jpg') }});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry mt-lg-4">
                                <a href="#" class="img"
                                    style="background-image: url({{ asset('landing/images/menu-2.jpg') }});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="#" class="img"
                                    style="background-image: url({{ asset('landing/images/menu-3.jpg') }});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry mt-lg-4">
                                <a href="#" class="img"
                                    style="background-image: url({{ asset('landing/images/menu-4.jpg') }});"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter"
        style="background-image: url({{ asset('landing/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Produk Kopi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="85">0</strong>
                                    <span>Penghargaan</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="10567">0</strong>
                                    <span>Pembeli</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="900">0</strong>
                                    <span>Petani</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Temukan</span>
                    <h2 class="mb-4">Rekomendasi Terbaik Kami</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptas ea aspernatur iste, fugiat
                        ipsum fuga enim distinctio vero deserunt.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="menu-entry">
                        <a href="{{ route('detail.toko') }}" class="img"
                            style="background-image: url({{ asset('landing/images/menu-1.jpg') }});"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="{{ route('detail.toko') }}">Kopi Maeja</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="price"><span>Rp50.000</span></p>
                            <p><a href="{{ route('keranjang') }}" class="btn btn-primary btn-outline-primary">Tambah ke
                                    Keranjang</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="menu-entry">
                        <a href="{{ route('detail.toko') }}" class="img"
                            style="background-image: url({{ asset('landing/images/menu-2.jpg') }});"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="{{ route('detail.toko') }}">Kopi Mulya</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="price"><span>Rp50.000</span></p>
                            <p><a href="{{ route('keranjang') }}" class="btn btn-primary btn-outline-primary">Tambah ke
                                    Keranjang</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="menu-entry">
                        <a href="{{ route('detail.toko') }}" class="img"
                            style="background-image: url({{ asset('landing/images/menu-3.jpg') }});"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="{{ route('detail.toko') }}">Kopi Talimas</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="price"><span>Rp50.000</span></p>
                            <p><a href="{{ route('keranjang') }}" class="btn btn-primary btn-outline-primary">Tambah ke
                                    Keranjang</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="menu-entry">
                        <a href="{{ route('detail.toko') }}" class="img"
                            style="background-image: url({{ asset('landing/images/menu-4.jpg') }});"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="{{ route('detail.toko') }}">Kopi Mas Bro</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="price"><span>Rp50.000</span></p>
                            <p><a href="{{ route('keranjang') }}" class="btn btn-primary btn-outline-primary">Tambah ke
                                    Keranjang</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('landing/images/gallery-1.jpg') }});">
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('landing/images/gallery-2.jpg') }});">
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('landing/images/gallery-3.jpg') }});">
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('landing/images/gallery-4.jpg') }});">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Berita Terbaru</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse magnam ea corporis neque repellat
                        impedit tenetur magni hic quaerat dicta!</p>
                </div>
            </div>
            <div class="row d-flex">
                @foreach ($blogs as $blog)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="w-100 blog-entry align-self-stretch">
                            <a href="{{ route('detail.berita', $blog->slug) }}" class="block-20"
                                style="background-image: url({{ url('/storage/thumbnail/' . $blog->thumbnail) }});">
                            </a>
                            <div class="text py-4 d-block">
                                <div class="meta">
                                    <div><a href="{{ route('detail.berita', $blog->slug) }}">{{ $blog->created_at }}</a></div>
                                </div>
                                <h3 class="heading mt-2"><a href="{{ route('detail.berita', $blog->slug) }}">{{ $blog->title }}</a>
                                </h3>
                                <p>{{ $blog->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section img" id="ftco-testimony"
        style="background-image: url({{ asset('landing/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Testimoni</span>
                    <h2 class="mb-4">Kata Pembeli</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dolorum distinctio natus temporibus
                        molestiae, illum incidunt porro ea labore est?</p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row d-flex no-gutters">
                <div class="col-lg align-self-sm-end ftco-animate">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam explicabo molestias
                                nam veniam, dolorum ratione.&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="images/person_1.jpg" alt="">
                            </div>
                            <div class="name align-self-center">Latifatul Izzah <span class="position">Dosen
                                    UNEJ</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end">
                    <div class="testimony overlay">
                        <blockquote>
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis sapiente expedita
                                quod facilis nostrum saepe rerum sint. Itaque quidem saepe eum nihil quasi quibusdam
                                illo?&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="images/person_2.jpg" alt="">
                            </div>
                            <div class="name align-self-center">Latifatul Izzah <span class="position">Dosen
                                    UNEJ</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end ftco-animate">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique culpa odit fugiat
                                quisquam libero laudantium architecto totam. Ipsam, maiores veniam.
                                &rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="images/person_3.jpg" alt="">
                            </div>
                            <div class="name align-self-center">Latifatul Izzah <span class="position">Dosen
                                    UNEJ</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end">
                    <div class="testimony overlay">
                        <blockquote>
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus doloremque veritatis
                                ratione sed, quis nostrum!&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="images/person_2.jpg" alt="">
                            </div>
                            <div class="name align-self-center">Latifatul Izzah <span class="position">Dosen
                                    UNEJ</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end ftco-animate">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum recusandae dolor nisi
                                quia incidunt quam perferendis vero? Nulla, debitis eveniet!&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="images/person_3.jpg" alt="">
                            </div>
                            <div class="name align-self-center">Latifatul Izzah <span class="position">Dosen
                                    UNEJ</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
