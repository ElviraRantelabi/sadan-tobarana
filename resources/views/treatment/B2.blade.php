
@extends('layouts.app')

@section('title', "Sa'dan To'barana")

@push('styles')
    @vite('resources/css/tourism/b2.css')
@endpush

@section('content')
<div class="ui-low b2-page">

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom b2-navbar">
        <div class="container">
            <a class="navbar-brand b2-navbar-brand" href="#home" aria-label="Sa'dan To'barana - Beranda">
                <span class="b2-navbar-logo-fallback" aria-hidden="true">S</span>
                <span class="b2-navbar-name">Sa'dan <strong>To'barana</strong></span>
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#b2Navbar"
                aria-controls="b2Navbar"
                aria-expanded="false"
                aria-label="Buka navigasi"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="b2Navbar">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#budaya">Budaya</a></li>
                    <li class="nav-item"><a class="nav-link" href="#aktivitas">Aktivitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#lokasi">Kontak</a></li>
                    <li class="nav-item" style="background-color: #0a0a0a; border-radius: 5px;">
                        <a class="nav-link" href="https://forms.gle/jNLisEr8YMtGqNLKA" 
                        style="color: #ffffff;" target="_blank">
                            Isi Kuesioner
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    {{-- HERO --}}
    <section class="hero" id="home">
        <div class="hero-overlay"></div>

        <div class="container hero-content">
            <span class="hero-badge">
                <span class="status-dot"></span>
                Explore the Beauty of Toraja
            </span>

            <h1>
                Temukan Keindahan<br>
                <span>Sa'dan To'barana</span>
            </h1>

            <p>
                Jelajahi pesona alam, kekayaan budaya, dan warisan tenun
                tradisional Toraja Utara dalam satu perjalanan yang berkesan.
            </p>
        </div>

        <a href="#tentang" class="hero-scroll">
            <span>Scroll to explore</span>
            <span class="scroll-line"></span>
        </a>
    </section>

    {{-- ABOUT --}}
    <section class="home-about-section section-padding" id="tentang">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <img
                        src="{{ asset('images/sungai-low.jpeg') }}"
                        alt="Panorama alam"
                        loading="lazy"
                    >

                    <div class="about-image-label">
                        <span>
                            <small>Nature, Culture & Heritage</small>
                        </span>
                    </div>
                </div>

                <div class="about-content">
                    <span class="section-eyebrow">Tentang Destinasi</span>
                    <h2>Lebih dari Sekadar Perjalanan</h2>

                    <p>
                        Sa'dan To'barana memiliki kekayaan budaya dan tradisi
                        tenun yang menjadi bagian penting dari identitas lokal.
                    </p>

                    <p>
                        Kenali kehidupan masyarakat, warisan budaya, dan
                        keindahan kawasan melalui informasi wisata yang tersedia.
                    </p>

                    <a href="#destinasi" class="text-link">
                        Jelajahi destinasi <span>→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- DESTINATIONS --}}
    <section class="destination-section section-padding" id="destinasi">
        <div class="container">
            <div class="section-heading">
                <div>
                    <span class="section-eyebrow">Explore the Destination</span>
                    <h2>Jelajahi Destinasi</h2>
                    <p>Kenali daya tarik wisata di kawasan Sa'dan To'barana.</p>
                </div>
                <span class="section-number">01 / DESTINATION</span>
            </div>

            <div class="destination-grid">
                <article class="destination-card destination-card-large">
                    <div class="destination-info">
                        <div>
                            <span class="card-category">DESTINASI</span>
                            <h3>Keindahan Alam Toraja</h3>
                            <p>Jelajahi lanskap dan suasana alam kawasan Toraja Utara.</p>
                        </div>
                        <span class="card-arrow">↗</span>
                    </div>
                </article>

                <article class="destination-card">
                    <div class="destination-info">
                        <div>
                            <span class="card-category">EKSPLORASI</span>
                            <h3>Lingkungan Sekitar</h3>
                            <p>Kenali lingkungan dan daya tarik lokal.</p>
                        </div>
                        <span class="card-arrow">↗</span>
                    </div>
                </article>

                <article class="destination-card">
                    <div class="destination-info">
                        <div>
                            <span class="card-category">PENGALAMAN</span>
                            <h3>Fasilitas Olahraga</h3>
                            <p>Rasakan berolahraga dengan udara sejuk alami dan keindahan alam</p>
                        </div>
                        <span class="card-arrow">↗</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- CULTURE --}}
    <section class="culture-section section-padding" id="budaya">
        <div class="container">
            <div class="culture-grid">
                <div class="culture-content">
                    <span class="section-eyebrow">Culture & Heritage</span>
                    <h2>Warisan Budaya yang Penuh Makna</h2>

                    <p>
                        Budaya Toraja tercermin melalui tradisi, seni, nilai
                        kehidupan, dan karya yang dijaga oleh masyarakat.
                    </p>

                    <div class="culture-points">
                        <div class="culture-point">
                            <span class="point-number">01</span>
                            <div>
                                <strong>Tradisi Lokal</strong>
                                <p>Mengenal nilai dan kebiasaan masyarakat.</p>
                            </div>
                        </div>

                        <div class="culture-point">
                            <span class="point-number">02</span>
                            <div>
                                <strong>Sejarah dan Identitas</strong>
                                <p>Memahami cerita di balik warisan budaya.</p>
                            </div>
                        </div>

                        <div class="culture-point">
                            <span class="point-number">03</span>
                            <div>
                                <strong>Pelestarian Budaya</strong>
                                <p>Menghargai warisan untuk generasi mendatang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- WEAVING --}}
    <section class="weaving-section section-padding" id="tenun">
        <div class="container">
            <div class="section-heading">
                <div>
                    <span class="section-eyebrow">Traditional Craftsmanship</span>
                    <h2>Keindahan Tenun To'barana</h2>
                    <p>Kenali proses, motif, dan nilai budaya tenun tradisional.</p>
                </div>
                <span class="section-number">02 / HERITAGE</span>
            </div>

            <div class="weaving-grid">
                <div class="weaving-content">
                    <span class="weaving-number">01</span>
                    <h3>Warisan dalam Setiap Helai</h3>

                    <p>
                        Tenun tradisional merupakan bagian dari identitas
                        dan pengetahuan lokal yang diwariskan antargenerasi.
                    </p>

                    <div class="weaving-detail">
                        <div>
                            <span class="detail-symbol">✦</span>
                            <span>
                                <strong>Motif dan Makna</strong>
                                <small>Mengenal nilai di balik pola kain.</small>
                            </span>
                        </div>

                        <div>
                            <span class="detail-symbol">✦</span>
                            <span>
                                <strong>Proses Pembuatan</strong>
                                <small>Mengenal keterampilan pengrajin.</small>
                            </span>
                        </div>

                        <div>
                            <span class="detail-symbol">✦</span>
                            <span>
                                <strong>Pelestarian Tradisi</strong>
                                <small>Menjaga keberlanjutan kerajinan lokal.</small>
                            </span>
                        </div>
                    </div>

                    <a href="#aktivitas" class="btn btn-primary rounded-pill px-4">
                        Lihat Aktivitas
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ACTIVITIES --}}
    <section class="activity-section section-padding" id="aktivitas">
        <div class="container">
            <div class="section-heading">
                <div>
                    <span class="section-eyebrow">Things to Experience</span>
                    <h2>Aktivitas Wisata</h2>
                    <p>Temukan cara untuk mengenal destinasi dan budaya lokal.</p>
                </div>
                <span class="section-number">03 / EXPERIENCE</span>
            </div>

            <div class="activity-grid">
                <article class="activity-card">
                    <div class="activity-icon">⌖</div>
                    <span class="activity-label">EXPLORE</span>
                    <h3>Jelajah Destinasi</h3>
                    <p>Kenali lokasi dan karakteristik destinasi sebelum berkunjung.</p>
                    <a href="#destinasi" class="text-link">Lihat destinasi <span>→</span></a>
                </article>

                <article class="activity-card activity-card-featured">
                    <div class="activity-icon">◇</div>
                    <span class="activity-label">DISCOVER</span>
                    <h3>Kenali Budaya</h3>
                    <p>Pelajari tradisi dan cerita yang membentuk identitas masyarakat.</p>
                    <a href="#budaya" class="text-link">Pelajari budaya <span>→</span></a>
                </article>

                <article class="activity-card">
                    <div class="activity-icon">▦</div>
                    <span class="activity-label">APPRECIATE</span>
                    <h3>Eksplorasi Tenun</h3>
                    <p>Kenali kain tradisional dan keterampilan para pengrajin.</p>
                    <a href="#tenun" class="text-link">Lihat tenun <span>→</span></a>
                </article>
            </div>
        </div>
    </section>

    {{-- BASIC LOCATION ONLY --}}
    <section class="location-section section-padding" id="lokasi">
        <div class="container">
            <div class="location-card">
                <div class="location-content">
                    <span class="section-eyebrow">Find Your Way</span>
                    <h2>Lokasi Destinasi</h2>
                    <p>
                        Desa/Kelurahan Sa'dan Malimbong atau Sangkaropi', Kecamatan Sa'dan, Kabupaten Toraja Utara, Provinsi Sulawesi Selatan, 91853
                    </p>

                    <div class="location-contact">
                        <h3>Hubungi Kami</h3>

                        <div class="contact-item">
                            <i class="bx bx-phone"></i>
                            <div>
                                <span>+62 822-5139-3833</span>
                                <p>Nomor kontak pengelola</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <i class="bx bx-envelope"></i>
                            <div>
                                <span>sadantobarana@gmail.com</span>
                                <p>Email pengelola destinasi</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <span class="cta-eyebrow">Your Journey Starts Here</span>
                <h2>Temukan Cerita di Setiap Perjalanan.</h2>
                <p>
                    Mulai jelajahi alam, budaya, dan kekayaan tenun
                    Sa'dan To'barana.
                </p>
                <a href="#destinasi" class="btn btn-light btn-lg rounded-pill px-4">
                    Jelajahi Destinasi
                </a>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="footer">
        <div class="container">
            <div class="footer-main">
                <div class="footer-brand">
                    <a href="#home" class="footer-logo">
                        <span> <strong> Sa'dan To'barana</strong></span>
                    </a>
                    <p>
                        Informasi destinasi, budaya, dan tenun tradisional
                        Sa'dan To'barana.
                    </p>
                </div>

                <div class="footer-links">
                    <strong>Jelajahi</strong>
                    <a href="#destinasi">Destinasi Wisata</a>
                    <a href="#budaya">Budaya & Sejarah</a>
                    <a href="#tenun">Tenun Tradisional</a>
                    <a href="#aktivitas">Aktivitas Wisata</a>
                </div>

                <div class="footer-links">
                    <strong>Informasi</strong>
                    <a href="#tentang">Tentang Destinasi</a>
                    <a href="#lokasi">Lokasi</a>
                    <a href="#home">Kembali ke Atas ↑</a>
                </div>
            </div>

            <div class="footer-bottom">
                <span>© {{ date('Y') }} Sa'dan To'barana Smart Tourism.</span>
                <span>Explore • Experience • Preserve</span>
            </div>
        </div>
    </footer>

</div>
@endsection
