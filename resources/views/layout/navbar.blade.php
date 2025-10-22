<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container">
        <!-- Logo -->
        <!-- Logo + Nama -->
        <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('images/inaklug.png') }}" alt="Logo Inaklug" class="navbar-logo me-2">
            Inaklug
        </a>


        <!-- Tombol toggle (mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Menu Tengah -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('tentangkami') ? 'active' : '' }}" href="{{ url('tentangkami') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('layanankami') ? 'active' : '' }}" href="{{ url('layanankami') }}">Layanan Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('artikel') ? 'active' : '' }}" href="{{ url('artikel') }}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('hubungikami') ? 'active' : '' }}" href="{{ url('hubungikami') }}">Hubungi Kami</a>
                </li>
            </ul>


            <!-- Search dan tombol kanan -->
            <div class="d-flex align-items-center">
                <!-- Search bar dengan ikon -->
                <div class="search-container me-3">
                    <i class="bi bi-search search-icon"></i>
                    <input class="form-control form-control-sm search-input" type="search" placeholder="Ketik pencarian" aria-label="Search">
                </div>

                <a href="#" class="btn daftar-btn fw-semibold">
                    DAFTAR ON-LINE
                </a>
            </div>
        </div>
    </div>
</nav>
