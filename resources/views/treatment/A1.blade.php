
@extends('layouts.app')

@section('title', "Sa'dan To'barana | Smart Tourism")

@push('styles')
    @vite('resources/css/tourism/a1.css')
@endpush

<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

@section('content')
<div class="ui-high">
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom a1-navbar">
        <div class="container">
            <a class="navbar-brand a1-navbar-brand" href="#home" aria-label="Sa'dan To'barana - Beranda">
                <img src="{{ asset('images/logo.png') }}" alt="" class="a1-navbar-logo"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='grid';">
                <span class="a1-navbar-logo-fallback" aria-hidden="true">S</span>
                <span class="a1-navbar-name">Sa'dan <strong>To'barana</strong></span>
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#a1Navbar"
                aria-controls="a1Navbar"
                aria-expanded="false"
                aria-label="Buka navigasi"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="a1Navbar">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#aktivitas">Aktivitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reservasi">Reservasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                    <li class="nav-item" style="background-color: #014325; border-radius: 5px;">
                        <a class="nav-link" href="https://forms.gle/EwT24kCacmKxqo1o7" 
                        style="color: #ffffff;" target="_blank">
                            Isi Kuisioner
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    {{-- HERO --}}
    <section class="hero" id="home"
        style="
            background-image:
                linear-gradient(
                    90deg,
                    rgba(15, 39, 29, 0.65) 0%,
                    rgba(15, 39, 29, 0.35) 55%,
                    rgba(15, 39, 29, 0.1) 100%
                ),
                url('{{ asset('images/image1-tongkonan-tobarana.png') }}');
            background-position: center, center 48%;
            background-size: cover, cover;
            background-repeat: no-repeat, no-repeat;
        ">

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

            <div class="hero-actions">
                <a href="#destinasi" class="btn btn-primary btn-lg rounded-pill px-4">
                    Mulai Eksplorasi
                </a>
                <a href="#budaya" class="btn btn-outline-light btn-lg rounded-pill px-4">
                    Kenali Budaya
                </a>
            </div>

            <div class="hero-stats">
                <div>
                    <strong>Alam</strong>
                    <span>Panorama memukau</span>
                </div>
                <div>
                    <strong>Budaya</strong>
                    <span>Warisan Toraja</span>
                </div>
                <div>
                    <strong>Tenun</strong>
                    <span>Karya tradisional</span>
                </div>
            </div>
        </div>

        <a href="#tentang" class="hero-scroll" aria-label="Gulir ke bawah">
            <span>Scroll to explore</span>
            <span class="scroll-line"></span>
        </a>
    </section>

    {{-- QUICK NAVIGATION --}}
    <section class="quick-section">
        <div class="container">
            <div class="quick-grid">
                <a href="#lokasi" class="quick-item">
                    <span class="quick-icon">⌖</span>
                    <span>
                        <strong>Peta</strong>
                        <small>Temukan Sa'dan To'barana</small>
                    </span>
                    <span class="quick-arrow">↗</span>
                </a>

                <a href="#budaya" class="quick-item">
                    <span class="quick-icon">◇</span>
                    <span>
                        <strong>Budaya & Sejarah</strong>
                        <small>Kenali warisan lokal</small>
                    </span>
                    <span class="quick-arrow">↗</span>
                </a>

                <a href="#tenun" class="quick-item">
                    <span class="quick-icon">▦</span>
                    <span>
                        <strong>Tenun Tradisional</strong>
                        <small>Jelajahi karya pengrajin</small>
                    </span>
                    <span class="quick-arrow">↗</span>
                </a>

                <a href="#aktivitas" class="quick-item">
                    <span class="quick-icon">✧</span>
                    <span>
                        <strong>Destinasi</strong>
                        <small>Kenali lokasi</small>
                    </span>
                    <span class="quick-arrow">↗</span>
                </a>
            </div>
        </div>
    </section>

    {{-- ABOUT --}}
    <section class="home-about-section section-padding" id="tentang">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <img
                        src="{{ asset('images/proses-menenun.png') }}"
                        alt="Proses menenun kain tradisional To’barana"
                        loading="lazy"
                    >
                    <div class="about-image-label">
                        <span class="label-icon">✦</span>
                        <span>
                            <strong>Discover Sa'dan</strong>
                            <small>Nature, Culture & Heritage</small>
                        </span>
                    </div>
                </div>

                <div class="about-content">
                    <span class="section-eyebrow">Tentang Destinasi</span>
                    <h2>Lebih dari Sekadar Perjalanan</h2>

                    <p>
                        Sa'dan To'barana merupakan kawasan yang dikenal dengan
                        kekayaan budaya dan tradisi tenun Toraja. Destinasi ini
                        menawarkan kesempatan untuk mengenal kehidupan lokal,
                        nilai budaya, serta keterampilan yang diwariskan
                        antargenerasi.
                    </p>

                    <p>
                        Melalui platform Smart Tourism ini, informasi destinasi,
                        budaya, tenun, dan aktivitas wisata dapat dijelajahi
                        dengan lebih mudah.
                    </p>

                    <a href="#destinasi" class="text-link">
                        Jelajahi destinasi
                        <span>→</span>
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
                    <p>
                        Kenali lokasi dan daya tarik wisata di kawasan
                        Sa'dan To'barana.
                    </p>
                </div>

                <span class="section-number">01 / DESTINATION</span>
            </div>

            <div class="destination-grid">
                <article class="destination-card destination-card-large">
                    <div class="destination-image">
                        <img
                            src="{{ asset('images/alam.png') }}"
                            alt="Pemandangan alam"
                            loading="lazy"
                        >
                        <span class="image-tag">Alam & Lanskap</span>
                    </div>

                    <div class="destination-info">
                        <div>
                            <span class="card-category">DESTINASI</span>
                            <h3>Keindahan Alam Sa'dan To'barana</h3>
                            <p>
                                Nikmati suasana alam dan lanskap khas
                                kawasan Toraja Utara.
                            </p>
                        </div>
                        <span class="card-arrow">↗</span>
                    </div>
                </article>

                <article class="destination-card">
                    <div class="destination-image">
                        <img
                            src="{{ asset('images/image1-tongkonan-tobarana.png') }}"
                            alt="Pemandangan alam terbuka"
                            loading="lazy"
                        >
                        <span class="image-tag">Wisata Lokal</span>
                    </div>

                    <div class="destination-info">
                        <div>
                            <span class="card-category">EKSPLORASI</span>
                            <h3>Lingkungan Sekitar</h3>
                            <p>Temukan suasana dan daya tarik lokal.</p>
                        </div>
                        <span class="card-arrow">↗</span>
                    </div>
                </article>

                <article class="destination-card">
                    <div class="destination-image">
                        <img
                            src="{{ asset('images/fasilitas-olahraga.png') }}"
                            alt="Kegiatan olahraga"
                            loading="lazy"
                        >
                        <span class="image-tag">Kegiatan Olahraga</span>
                    </div>

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
                        Budaya Toraja tercermin melalui tradisi, nilai
                        kehidupan, seni, dan karya yang dijaga oleh masyarakat.
                        Mengenal budaya lokal menjadi bagian penting dari
                        pengalaman berwisata.
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

                <div class="culture-image">
                    <img
                        src="{{ asset('images/budaya.png') }}"
                        alt="Seni dan karya budaya"
                        loading="lazy"
                    >
                    <div class="culture-image-caption">
                        <span>Culture is our identity</span>
                        <strong>Preserving Heritage, Inspiring Tomorrow</strong>
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
                    <p>Kenali proses, motif, dan nilai budaya dalam kerajinan tenun tradisional.</p>
                </div>
                <span class="section-number">02 / HERITAGE</span>
            </div>

            <div class="weaving-grid">
                <div class="weaving-image">
                    <img src="{{ asset('images/tenun.png') }}"
                         alt="Kain tenun tradisional Sa'dan To'barana" loading="lazy">
                    <span class="weaving-image-caption">Traditional craftsmanship</span>
                </div>

                <div class="weaving-content">
                    <strong><h4>Warisan dalam Setiap Helai</h4></strong>
                    <p>
                        Tenun tradisional bukan hanya produk kerajinan, tetapi juga
                        bagian dari identitas dan pengetahuan lokal yang diwariskan
                        antargenerasi.
                    </p>

                    <div class="weaving-detail">
                        <div>
                            <span class="detail-symbol">✦</span>
                            <span><strong>Motif dan Makna</strong><small>Memahami nilai di balik pola kain.</small></span>
                        </div>
                        <div>
                            <span class="detail-symbol">✦</span>
                            <span><strong>Proses Pembuatan</strong><small>Mengenal keterampilan para pengrajin.</small></span>
                        </div>
                        <div>
                            <span class="detail-symbol">✦</span>
                            <span><strong>Pelestarian Tradisi</strong><small>Mendukung keberlanjutan kerajinan lokal.</small></span>
                        </div>
                    </div>

                    <a href="#pemesanan-tenun" class="btn btn-primary rounded-pill px-4">
                        Kenali Tenun
                    </a>
                </div>
            </div>

            <div class="weaving-order" id="pemesanan-tenun">
                <div class="weaving-order-heading">
                    <span class="section-eyebrow">Tenun Tradisional</span>
                    <strong><h3>Bawa Pulang Cerita dari To'barana</h3></strong>
                    <p>
                        Tertarik dengan kain tenun tradisional? Hubungi pengelola
                        untuk menanyakan motif, harga, dan ketersediaan produk.
                    </p>
                </div>

                <div class="weaving-order-card">
                    <div>
                        <span class="activity-label">KERAJINAN LOKAL</span>
                        <h4>Kain Tenun To'barana</h4>
                        <p>Kain tradisional yang merepresentasikan keterampilan dan warisan budaya masyarakat setempat.</p>
                    </div>
                    <a href="#contact" class="btn btn-primary rounded-pill px-4">
                        Tanya &amp; Pesan Tenun <span aria-hidden="true">→</span>
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
                    <p>
                        Temukan pengalaman yang dapat membantu kamu
                        mengenal lebih dekat destinasi dan budaya lokal.
                    </p>
                </div>
                <span class="section-number">03 / EXPERIENCE</span>
            </div>

            <div class="activity-grid">
                <article class="activity-card">
                    <div class="activity-icon">⌖</div>
                    <span class="activity-label">EXPLORE</span>
                    <h3>Jelajah Destinasi</h3>
                    <p>
                        Cari tahu lokasi dan karakteristik destinasi
                        sebelum memulai perjalanan.
                    </p>
                    <a href="#destinasi" class="text-link">
                        Lihat destinasi <span>→</span>
                    </a>
                </article>

                <article class="activity-card activity-card-featured">
                    <div class="activity-icon">◇</div>
                    <span class="activity-label">DISCOVER</span>
                    <h3>Kenali Budaya</h3>
                    <p>
                        Pelajari tradisi dan cerita yang membentuk
                        identitas masyarakat setempat.
                    </p>
                    <a href="#budaya" class="text-link">
                        Pelajari budaya <span>→</span>
                    </a>
                </article>

                <article class="activity-card">
                    <div class="activity-icon">▦</div>
                    <span class="activity-label">APPRECIATE</span>
                    <h3>Eksplorasi Tenun</h3>
                    <p>
                        Kenali kain tradisional serta keterampilan
                        yang menjaga warisan budaya.
                    </p>
                    <a href="#tenun" class="text-link">
                        Lihat tenun <span>→</span>
                    </a>
                </article>
            </div>

            <div class="river-monitor-wrap">
                {{-- LIVE RIVER CONDITION --}}
<div class="river-live-card" id="kondisi-sungai">
    <div class="river-live-heading">
        <div>
            <span class="section-eyebrow">River Condition Monitor</span>
            <h3>Kondisi Sungai Sa'dan</h3>
            <p>
                Pantau informasi kondisi air sungai sebelum
                merencanakan aktivitas arum jeram.
            </p>
        </div>

        <span class="river-live-badge">
            <span class="river-live-dot"></span>
            LIVE MONITOR
        </span>
                    </div>

                    <div class="river-live-content">
                        <div class="river-live-icon">〰</div>

                        <div class="river-live-info">
                            <span class="river-live-label">Status ketinggian air</span>
                            <h4 id="riverStatus">Data belum tersedia</h4>
                            <p id="riverDescription">
                                Status air naik atau surut akan ditampilkan
                                setelah sumber data live terhubung.
                            </p>
                        </div>
                    </div>

                    <div class="river-live-footer">
                        <span>
                            Pembaruan terakhir:
                            <strong id="riverUpdated">Belum tersedia</strong>
                        </span>
                        <span>Sumber: belum terhubung</span>
                    </div>

                    <p class="river-safety-note">
                        Periksa kondisi lapangan dan ikuti arahan petugas setempat.
                        Jangan melakukan aktivitas sungai jika kondisi tidak aman.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- BASIC LOCATION --}}
    <section class="location-section section-padding" id="lokasi">
        <div class="container">
            <div class="location-card">
                <div class="location-content">
                    <span class="section-eyebrow">Find Your Way</span>
                    <h2>Rencanakan Kunjunganmu</h2>
                    <p>
                        Kenali lokasi destinasi sebelum berkunjung.
                        Gunakan peta untuk membantu menemukan kawasan
                        Sa'dan To'barana.
                    </p>

                    <a
                        href="https://www.google.com/maps/search/?api=1&query=Sa%27dan+To%27barana+Toraja+Utara"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn btn-primary rounded-pill px-4"
                    >
                        Buka Google Maps ↗
                    </a>
                </div>

                <div class="location-visual">
                    <div class="map-decoration map-decoration-one"></div>
                    <div class="map-decoration map-decoration-two"></div>
                    <div class="map-decoration map-decoration-three"></div>

                    <div class="map-pin">
                        <span>⌖</span>
                    </div>

                    <div class="map-label">
                        <span class="map-label-dot"></span>
                        <span>
                            <strong>Sa'dan To'barana</strong>
                            <small>Toraja Utara, Sulawesi Selatan</small>
                        </span>
                    </div>

                    <span class="map-coordinate">EXPLORE LOCAL DESTINATION</span>
                </div>
            </div>
        </div>
    </section>

{{-- RESERVASI --}}
    <section class="reservation-section section-padding" id="reservasi">
        <div class="container">
            <div class="section-heading">
                <div>
                    <span class="section-eyebrow">Plan Your Visit</span>
                    <h2>Rencanakan Kunjunganmu</h2>
                    <p>
                        Sampaikan rencana kunjungan agar pengelola dapat
                        menindaklanjuti permintaan reservasi.
                    </p>
                </div>
            </div>

            <form class="reservation-form" action="#" method="get">
                <label for="visitorName">Nama lengkap</label>
                <input id="visitorName" name="nama"
                    type="text" placeholder="Masukkan nama"
                    required>

                <label for="visitDate">Tanggal kunjungan</label>
                <input id="visitDate" name="tanggal"
                    type="date" required>

                <label for="visitorCount">Jumlah pengunjung</label>
                <input id="visitorCount" name="jumlah"
                    type="number" min="1" placeholder="Contoh: 4"
                    required>

                <label for="visitActivity">Aktivitas yang diminati</label>
                <select id="visitActivity" name="aktivitas" required>
                    <option value="">Pilih aktivitas</option>
                    <option value="budaya">Wisata budaya</option>
                    <option value="tenun">Pengalaman tenun</option>
                    <option value="alam">Eksplorasi alam</option>
                </select>

                <button type="button" class="btn btn-primary rounded-pill">
                    Ajukan Reservasi
                </button>

                <p>
                    Form ini masih berupa prototype dan belum mengirim
                    data reservasi ke pengelola.
                </p>
            </form>
        </div>
    </section>

    {{-- CONTACT --}}
    <section class="contact-section section-padding" id="contact">
        <div class="container">
            <span class="section-eyebrow">Get in Touch</span>

            <h2>Hubungi Pengelola</h2>

            <p>
                Ingin bertanya tentang kunjungan, aktivitas wisata,
                atau pemesanan kain tenun? Hubungi pengelola untuk
                mendapatkan informasi lebih lanjut.
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
    </section>

    {{-- CALL TO ACTION --}}
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
                    Jelajahi Sa'dan To'barana
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
                        <span><strong> Sa'dan  To'barana</strong></span>
                    </a>

                    <p>
                        Platform informasi wisata untuk mengenal
                        destinasi, budaya, dan tenun tradisional
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
                <span>
                    © {{ date('Y') }} Sa'dan To'barana Smart Tourism.
                </span>
                <span>Explore • Experience • Preserve</span>
            </div>
        </div>
    </footer>

</div>
@endsection
