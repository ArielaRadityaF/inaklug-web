@extends('layout.head')

<link rel="stylesheet" href="{{ asset('resources/css/tentangkami.css') }}">

@section('title', 'Tentang Kami')

@section('content')

<section class="hero-section">
    <div class="hero-overlay">
        <div class="container">
            <h1 class="hero-title">TENTANG KAMI</h1>
        </div>
    </div>
</section>

<section class="about-section py-5">
    <div class="container">
        <div class="about-profil mb-5">
            <h3 class="section-title">Profil</h3>
            <p>
                Didirikan pada tahun 2018, Ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional
                yang berpengalaman, terbesar, terpercaya dan juga memiliki jam terbang tinggi untuk melayani para
                anak-anak muda Indonesia untuk menuntut ilmu di berbagai negara maju dunia.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="about-card p-3">
                    <img src="/images/visi.png" class="img-fluid rounded mb-3" alt="Visi">
                    <h3 class="fw-semibold">Visi</h3>
                    <p>
                        Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional
                        untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa
                        depan yang tangguh, mandiri, dan profesional.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-card p-3">
                    <img src="/images/misi.png" class="img-fluid rounded mb-3" alt="Misi">
                    <h3 class="fw-semibold">Misi</h3>
                    <p>
                        Memfasilitasi siswa Indonesia untuk mengenyam pendidikan di berbagai perguruan tinggi di lebih
                        dari 25 negara maju di dunia dengan layanan yang profesional.
                    </p>
                    <p>
                        Memberikan bantuan konsultasi terhadap siswa/i Indonesia dalam mempersiapkan studinya dari
                        berbagai aspek, baik aspek sosial, budaya, maupun pendidikan.
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="/layanankami" class="btn-gradient">Layanan Kami</a>
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
    <a href="#" class="btn-gradientt">LOKASI KAMI</a>
    <a href="#" class="btn-outline">KIRIM PESAN</a>
  </div>
</section>
@endsection
