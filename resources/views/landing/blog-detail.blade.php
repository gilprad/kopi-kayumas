@extends('layouts.landing.base')

@section('title', 'Detail Berita')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('landing/images/gallery-1.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Judul Berita</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a
                                    href="{{ route('beranda') }}">Beranda</a></span> <span class="mr-2"><a
                                    href="{{ route('berita') }}">Berita</a></span> <span>Judul Berita</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <h2 class="mb-3">Heading 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit,
                        quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro
                        adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis,
                        enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta
                        architecto tempora.</p>
                    <p>
                        <img src="{{ asset('landing/images/gallery-3.jpg') }}" alt="" class="img-fluid">
                    </p>
                    <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt
                        doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo
                        eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis
                        ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
                    <h2 class="mb-3 mt-5">Heading 2</h2>
                    <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in.
                        Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error
                        dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi
                        repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
                    <p>
                        <img src="{{ asset('landing/images/gallery-4.jpg') }}" alt="" class="img-fluid">
                    </p>
                    <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod,
                        est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab
                        consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit,
                        porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
                    <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem
                        pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo
                        soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni.
                        Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
                    <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique
                        asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates
                        beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum
                        provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!
                    </p>
                    <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo
                        a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis
                        alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta
                        doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis,
                        inventore?</p>

                    <div class="pt-5 mt-5">
                        <h3 class="mb-5">6 Komentar</h3>
                        <ul class="comment-list">
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{ asset('landing/images/person_1.jpg') }}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta">9 Oktober 2021, 12:00</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente
                                        iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Balas</a></p>
                                </div>
                            </li>

                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{ asset('landing/images/person_1.jpg') }}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta">9 Oktober 2021, 12:00</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente
                                        iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Balas</a></p>
                                </div>

                                <ul class="children">
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="{{ asset('landing/images/person_1.jpg') }}" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>John Doe</h3>
                                            <div class="meta">9 Oktober 2021, 12:00</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                                laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe
                                                enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?
                                            </p>
                                            <p><a href="#" class="reply">Balas</a></p>
                                        </div>


                                        <ul class="children">
                                            <li class="comment">
                                                <div class="vcard bio">
                                                    <img src="{{ asset('landing/images/person_1.jpg') }}"
                                                        alt="Image placeholder">
                                                </div>
                                                <div class="comment-body">
                                                    <h3>John Doe</h3>
                                                    <div class="meta">9 Oktober 2021, 12:00</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur
                                                        quidem laborum necessitatibus, ipsam impedit vitae autem, eum
                                                        officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                                                        impedit necessitatibus, nihil?</p>
                                                    <p><a href="#" class="reply">Balas</a></p>
                                                </div>

                                                <ul class="children">
                                                    <li class="comment">
                                                        <div class="vcard bio">
                                                            <img src="{{ asset('landing/images/person_1.jpg') }}"
                                                                alt="Image placeholder">
                                                        </div>
                                                        <div class="comment-body">
                                                            <h3>John Doe</h3>
                                                            <div class="meta">9 Oktober 2021, 12:00</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                                                                autem, eum officia, fugiat saepe enim sapiente iste iure!
                                                                Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                            <p><a href="#" class="reply">Balas</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{ asset('landing/images/person_1.jpg') }}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta">9 Oktober 2021, 12:00</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente
                                        iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Balas</a></p>
                                </div>
                            </li>
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Tinggalkan komentar</h3>
                            <form action="#">
                                <div class="form-group">
                                    <label for="name">Nama *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="message">Pesan</label>
                                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Kirim Komentar" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>

                </div> <!-- .col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <h3>Berita Terbaru</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url({{ asset('landing/images/gallery-1.jpg') }});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{ route('detail.berita') }}">Lorem ipsum dolor sit
                                        amet consectetur, adipisicing elit. Ea, illo.</a></h3>
                                <div class="meta">
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-calendar"></span> 9
                                            Oktober 2021</a></div>
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-person"></span>
                                            Admin</a></div>
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-chat"></span>
                                            19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url({{ asset('landing/images/gallery-3.jpg') }});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{ route('detail.berita') }}">Lorem ipsum dolor sit
                                        amet consectetur, adipisicing elit. Ea, illo.</a></h3>
                                <div class="meta">
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-calendar"></span> 9
                                            Oktober 2021</a></div>
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-person"></span>
                                            Admin</a></div>
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-chat"></span>
                                            19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url({{ asset('landing/images/gallery-4.jpg') }});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{ route('detail.berita') }}">Lorem ipsum dolor sit
                                        amet consectetur, adipisicing elit. Ea, illo.</a></h3>
                                <div class="meta">
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-calendar"></span> 9
                                            Oktober 2021</a></div>
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-person"></span>
                                            Admin</a></div>
                                    <div><a href="{{ route('detail.berita') }}"><span class="icon-chat"></span>
                                            19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
