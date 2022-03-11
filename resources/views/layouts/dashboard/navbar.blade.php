<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a>
            </li>
        </ul>
        <div class="search-element">
            <input class="form-control" type="search" placeholder="Cari" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
                <div class="search-header">
                    Hasil
                </div>
                <div class="search-item">
                    <a href="#">
                        <img class="mr-3 rounded" width="30" src="{{ asset('landing/images/menu-1.jpg') }}" alt="product">
                        Kopi Maeja
                    </a>
                </div>
                <div class="search-item">
                    <a href="#">
                        <img class="mr-3 rounded" width="30" src="{{ asset('landing/images/menu-3.jpg') }}" alt="product">
                        Kopi Talimas
                    </a>
                </div>
                <div class="search-item">
                    <a href="#">
                        <img class="mr-3 rounded" width="30" src="{{ asset('landing/images/menu-4.jpg') }}" alt="product">
                        Kopi Mas Bro
                    </a>
                </div>
            </div>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('landing/images/person_1.jpg') }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Selamat Datang, {{ Auth::user()->username }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="features-profile.html" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Keluar
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
