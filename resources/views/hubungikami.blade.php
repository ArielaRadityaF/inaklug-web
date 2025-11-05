@extends('layout.head')

<link rel="stylesheet" href="{{ asset('resources/css/hubungikami.css') }}">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

@section('content')
<section class="hero-hubungi">
  <div class="hero-overlay">
    <div class="hero-content">
      <h1>HUBUNGI KAMI</h1>
    </div>
  </div>
</section>

<section class="contact-section">
  <h2>KIRIM PESAN</h2>
  <form class="contact-form">
    <div class="form-row">
      <div class="form-group">
        <label for="name">Nama*</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email*</label>
        <input type="email" id="email" name="email" required>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="company">Perusahaan/Organisasi</label>
        <input type="text" id="company" name="company">
      </div>
      <div class="form-group">
        <label for="phone">Telepon</label>
        <input type="text" id="phone" name="phone">
      </div>
    </div>

    <div class="form-group full-width">
      <label for="message">Isi Pesan*</label>
      <textarea id="message" name="message" rows="5" required></textarea>
    </div>

  </form>
</section>

<section class="form-submit-section">
  <hr class="section-divider">

  <form action="{{ route('hubungi.kami.kirim') }}" method="POST">
    @csrf

    <div class="form-submit-container">
        {!! NoCaptcha::display() !!}
        <div class="captcha-box">
            <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}></div>
        </div>

        <!-- Tombol kirim -->
        <div class="btn-wrapper">
            <button type="submit" class="btn-kirim">KIRIM PESAN</button>
        </div>
    </div>
  </form>
</section>
<hr class="section-divider1">




<section class="lokasi-section">
  <div class="lokasi-container">
    <h2>LOKASI KAMI</h2>

    <div class="lokasi-item">
      <h3>Kantor Pusat</h3>
      <p>
        Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat<br>
        Phone: (6285) 286754052 - Fax : (6285) 286754052<br>
        Hotline: +6285286754052 / +6285286754052
      </p>
    </div>

    <div class="lokasi-item">
      <h3>Kantor Cabang</h3>
      <p>
        Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat<br>
        Phone: (6285) 286754052 - Fax : (6285) 286754052<br>
        Hotline: +6285286754052 / +6285286754052
      </p>
    </div>
  </div>
</section>





@endsection