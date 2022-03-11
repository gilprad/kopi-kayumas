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
                @auth
                <li class="nav-item">
                    @role('admin')
                        <a href="{{ route('admin.user') }}" class="nav-link">Dashboard</a>
                    @elserole('ketua')
                        <a href="{{ route('ketua.beranda') }}" class="nav-link">Dashboard</a>
                    @elserole('anggota')
                        <a href="{{ route('anggota.harga') }}" class="nav-link">Dashboard</a>
                    @elserole('pembeli')
                        <a href="{{ route('pembeli.pesanan') }}" class="nav-link">Dashboard</a>
                    @endrole
                </li>
                @endauth
                <li class="nav-item cart">
                    <a href="{{ route('keranjang') }}" class="nav-link">
                        <span class="icon icon-shopping_cart"></span>
                        <span class="bag d-flex justify-content-center align-items-center"><small>1</small></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
