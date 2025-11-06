@extends('layout.head')

<link rel="stylesheet" href="{{ asset('resources/css/layanankami.css') }}">

@section('content')
<section class="hero-section">
    <div class="hero-overlay">
        <div class="container">
            <h1 class="hero-title">Layanan Kami</h1>
        </div>
    </div>
</section>

<section id="layanan-kami" class="services-section py-5">
  <div class="container text-center">
    <h2 class="services-title mb-5">Layanan Kami</h2>
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

<hr class="section-divider">

<section class="contact-section">
  <h2>Hubungi Kami</h2>
  <h4>Kantor Pusat</h4>
  <p>
    Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat<br>
    Phone : 085286754052
  </p>

  <div class="contact-buttons">
    <a href="{{ url('/hubungikami') }}" class="btn-gradientt">LOKASI KAMI</a>
    <a href="{{ url('/hubungikami') }}" class="btn-outline">KIRIM PESAN</a>
  </div>
</section>

@endsection