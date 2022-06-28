<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('beranda') }}"><img src="{{ asset('landing/images/logo.png') }}"
                width="70" height="70" alt="Logo Kopi Kayumas"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::route()->getName() == 'beranda' ? 'active' : '' }}">
                    <a href="{{ route('beranda') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item {{ Request::route()->getName() == 'berita' ? 'active' : '' }}">
                    <a href="{{ route('berita') }}" class="nav-link">Berita</a>
                </li>
                <li class="nav-item {{ Request::route()->getName() == 'toko' ? 'active' : '' }}">
                    <a href="{{ route('toko') }}" class="nav-link">Toko</a>
                </li>
                <li class="nav-item {{ Request::route()->getName() == 'kontak' ? 'active' : '' }}">
                    <a href="{{ route('kontak') }}" class="nav-link">Kontak</a>
                </li>
                <li class="nav-item cart">
                    <a href="{{ route('keranjang') }}" class="nav-link">
                        <span class="icon icon-shopping_cart"></span>
                        @if ($cart_total)
                            <span class="bag d-flex justify-content-center align-items-center"><small>{{ $cart_total }}</small></span>
                        @endif
                    </a>
                </li>
                <li class="nav-item cart dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="dropdown-login" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon icon-user"></span>    
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-login">
                        @guest
                            <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                        @endguest
                        @auth
                            @role('admin')
                                <a href="{{ route('admin.pengguna.index') }}" class="dropdown-item">Dashboard</a>
                            @elserole('ketua')
                                <a href="{{ route('ketua.beranda') }}" class="dropdown-item">Dashboard</a>
                            @elserole('anggota')
                                <a href="{{ route('anggota.persediaan.index') }}" class="dropdown-item">Dashboard</a>
                            @elserole('pembeli')
                                <a href="{{ route('pembeli.pesanan.index') }}" class="dropdown-item">Dashboard</a>
                            @elserole('penjual')
                                <a href="{{ route('penjual.pesanan.index') }}" class="dropdown-item">Dashboard</a>
                            @endrole

                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endauth
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
