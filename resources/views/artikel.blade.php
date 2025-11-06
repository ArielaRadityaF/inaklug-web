@extends('layout.head')
<link rel="stylesheet" href="{{ asset('resources/css/artikel.css') }}">

@section('content')

<section class="hero-artikel">
  <div class="hero-overlay">
    <div class="hero-content">
      <span class="hero-category">TIPS</span>
      <h1 class="hero-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h1>
    </div>
  </div>
</section>

<section class="artikel-list">
  <div class="container">
    <div class="artikel-grid">
      <div class="artikel-card">
        <img src="/images/korona.png" alt="Artikel 1" class="artikel-image">
        <h3 class="artikel-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
      </div>

      <div class="artikel-card">
        <img src="/images/htw.png" alt="Artikel 2" class="artikel-image">
        <h3 class="artikel-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
      </div>
      <hr class="section-divider">
    </div>
  </div>
</section>

<section class="mitra-section">
  <div class="container">
    <h2 class="section-title">Mitra Kami</h2>

    <div class="mitra-card">
      <img src="/images/artikel1.jpg" alt="Mitra 1">
      <div class="mitra-content">
        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
        <p>Selasa, 18 Feb 2020 12:01 WIB</p>
      </div>
    </div>

    <div class="mitra-card">
      <img src="/images/artikel2.jpg" alt="Mitra 2">
      <div class="mitra-content">
        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
        <p>Selasa, 18 Feb 2020 12:01 WIB</p>
      </div>
    </div>

    <div class="mitra-card">
      <img src="/images/artikel3.jpg" alt="Mitra 3">
      <div class="mitra-content">
        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
        <p>Selasa, 18 Feb 2020 12:01 WIB</p>
      </div>
    </div>

    <div class="mitra-card">
      <img src="/images/artikel4.jpg" alt="Mitra 4">
      <div class="mitra-content">
        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
        <p>Selasa, 18 Feb 2020 12:01 WIB</p>
      </div>
    </div>

    <div class="mitra-card">
      <img src="/images/nurse2.jpg" alt="Mitra 5">
      <div class="mitra-content">
        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
        <p>Selasa, 18 Feb 2020 12:01 WIB</p>
      </div>
    </div>
  </div>
</section>

<section class="pilihan-section">
  <div class="pagination">
  <button class="page-btn prev">&larr;</button>
  <button class="page-btn active">1</button>
  <button class="page-btn">2</button>
  <button class="page-btn">3</button>
  <button class="page-btn">4</button>
  <button class="page-btn">5</button>
  <button class="page-btn next">&rarr;</button>
  </div>
</section>

<hr class="section-divider1">

<section class="contact-section">
  <h2>Hubungi Kami</h2>
  <h4>Kantor Pusat</h4>
  <p>
    Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat<br>
    Phone : 085286754052
  </p>

  <div class="contact-buttons">
    <a href="{{ url('/hubungikami#lokasi-section') }}" class="btn-gradient">LOKASI KAMI</a>
    <a href="{{ url('/hubungikami') }}" class="btn-outline">KIRIM PESAN</a>
  </div>
</section>


@endsection