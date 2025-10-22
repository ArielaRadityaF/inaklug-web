<!-- Ariela Raditya Fadlur Rahman -->
<!-- 41523010179 -->
@extends('layout.head')
<link rel="stylesheet" href="{{ asset('resources/css/home.css') }}">
@section('content')
<section class="hero-section">
    <div class="hero-overlay">
      <div class="hero-box">
        <h2>INGIN KULIAH DAN BERKARIR DI LUAR NEGERI ?</h2>
        <a href="#" class="btn-hero">SELENGKAPNYA <i class="bi bi-chevron-down"></i></a>
      </div>
    </div>
  </section>

<section id="tentang-kami" class="about-section py-5">
  <div class="container text-center">
    <h2 class="about-title mb-4">TENTANG KAMI</h2>
    <p class="about-text">
      INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah
      memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah,
      perjalanan wisata dan berkarir di negara maju di dunia.
    </p>
  </div>
</section>

<hr class="section-divider">

<section id="layanan-kami" class="services-section py-5">
  <div class="container text-center">
    <h2 class="services-title mb-5">LAYANAN KAMI</h2>
    <div class="services-grid">
      <div class="service-card">
        <img src="{{ asset('images/bachelor.png') }}" alt="Studi S1 - Bachelor">
        <div class="overlay"></div>
        <p>Studi S1 - Bachelor</p>
      </div>
      <div class="service-card">
        <img src="{{ asset('images/master.png') }}" alt="Studi S2 - Master">
        <div class="overlay"></div>
        <p>Studi S2 - Master</p>
      </div>
      <div class="service-card">
        <img src="{{ asset('images/phd.jpg') }}" alt="Studi S3 - Ph.D">
        <div class="overlay"></div>
        <p>Studi S3 - Ph.D</p>
      </div>
      <div class="service-card">
        <img src="{{ asset('images/basing.png') }}" alt="Kursus Bahasa Asing">
        <div class="overlay"></div>
        <p>Kursus Bahasa Asing</p>
      </div>
      <div class="service-card">
        <img src="{{ asset('images/tour.png') }}" alt="Studi Tour">
        <div class="overlay"></div>
        <p>Study Tour</p>
      </div>
      <div class="service-card">
        <img src="{{ asset('images/ausbildung.jpg') }}" alt="Ausbildung">
        <div class="overlay"></div>
        <p>Ausbildung</p>
      </div>
    </div>
  </div>
</section>

<section id="mitra-kami" class="mitra-section">
  <h2 class="mitra-title">MITRA KAMI</h2>
  <div class="mitra-grid">
    <img src="{{ asset('images/aviation.jpg') }}" alt="Mitra 1">
    <img src="{{ asset('images/adrew.png') }}" alt="Mitra 2">
    <img src="{{ asset('images/htw.png') }}" alt="Mitra 3">
    <img src="{{ asset('images/studygroup.png') }}" alt="Mitra 4">
  </div>
</section>

<section id="konsultasi-banner" class="banner-section">
  <div class="banner-text">
    <h3>GRATIS KONSELING STUDI DI LUAR NEGERI</h3>
    <p>Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
  </div>
  <button class="btn-banner">MULAI KONSULTASI <i class="bi bi-chevron-right"></i> </button>
</section>

<section id="artikel-terbaru" class="artikel-section">
  <h2>Artikel Terbaru</h2>

  <div class="artikel-grid">
    <div class="artikel-card">
      <img src={{asset('images/studijerman.png')}} alt="Studi di Jerman">
      <p>5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</p>
    </div>

    <div class="artikel-card">
      <img src={{asset('images/korona.png')}} alt="Virus Korona">
      <p>Uni Eropa Menghadapi Virus Korona</p>
    </div>

    <div class="artikel-card">
      <img src={{asset('images/bahasajerman.png')}} alt="Goethe Institut">
      <p>Belajar Bahasa Jerman Bersama Goethe Institut</p>
    </div>

    <div class="artikel-card">
      <img src={{asset('images/gatescambride.png')}} alt="Gates Cambridge">
      <p>Apa Itu Gates Cambridge? Yuk Cari Tahu</p>
    </div>
  </div>

  <div class="artikel-btn-container">
    <button class="btn-artikel">LAINNYA</button>
  </div>
</section>

<hr class="section-divider">

<section class="contact-section">
  <h2>Hubungi Kami</h2>
  <h4>Kantor Pusat</h4>
  <p>
    Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat<br>
    Phone : 085286754052
  </p>

  <div class="contact-buttons">
    <a href="#" class="btn-gradient">LOKASI KAMI</a>
    <a href="#" class="btn-outline">KIRIM PESAN</a>
  </div>
</section>




@endsection
