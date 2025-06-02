<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Jaksel, Situs Web Resmi Pemerintah Kota Administrasi Jakarta Selatan - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #005E7A;
            --secondary-color: #009688;
            --accent-color: #FFC107;
            --light-color: #E8F4F8;
            --dark-color: #333333;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-color);
            background-color: #f8f9fa;
            padding-top: 56px;
        }

        .navbar {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            margin-right: 0;
            font-weight: 700;
            color: white !important;
        }

        .main-hero-wrapper {
            position: relative;
            background: linear-gradient(rgba(210, 245, 255, 0.8), rgba(255, 255, 255, 0.8));
            padding: 4rem 0;
        }

        .main-hero-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(255, 255, 255);
            background-size: cover;
            background-position: center;
            z-index: -1;
            opacity: 0.8;
        }

        .hero-section {
            color: white;
            position: relative;
            z-index: 1;
        }


        .feature-box {
            padding: 2rem;
            border-radius: 8px;
            background-color: white;
            height: 100%;
            box-shadow: 0 4px 6px rgba(255, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(255, 0, 0, 0.1);
        }

        .feature-box i {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .card {
            border-radius: 15px;
            border: none;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: auto;
        }

        .carousel-control-prev {
            left: -50px;
        }

        .carousel-control-next {
            right: -50px;
        }

        .bg-teal {
            background-color: #009688;
        }

        .card {
            border: none;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-30px);
            box-shadow: 0 10px 20px rgb(11, 179, 226);
        }

        .card-header {
            background-color: var(--primary-color);
            color: white;
            border-radius: 8px 8px 0 0 !important;
        }

        .partner-section {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-top: 2rem;
        }

        .partner-section h3 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 2rem;
        }

        .partner-item {
            padding: 1rem;
            text-align: center;
        }

        .partner-img {
            max-height: 100px;
            width: auto;
            margin: 0 auto;
            display: block;
        }

        .partner-title {
            color: var(--dark-color);
            font-weight: 600;
            margin-top: 1rem;
        }

        .carousel-indicators {
            position: relative;
            bottom: auto;
            margin: 2rem 0 0;
        }

        .carousel-indicators [data-bs-target] {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(0, 94, 122, 0.3);
            border: none;
            margin: 0 8px;
            transition: all 0.3s ease;
        }

        .carousel-indicators .active {
            background-color: var(--primary-color);
            width: 30px;
            border-radius: 6px;
        }

        footer {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        footer h5 {
            color: white;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        footer a {
            color: rgba(255, 255, 255, 0.8);
            transition: color 0.3s;
            text-decoration: none;
        }

        footer a:hover {
            color: white;
            text-decoration: underline;
        }

        .centered {
            text-align: center;
            padding: 10px 2px;
            color: rgb(3, 12, 19)
        }

        .link-tanpa-underline {
            text-decoration: none;
            color: #000000;
            font-weight: bold;
        }

        .link-tanpa-underline:hover {
            color: #2a8e31;
            text-decoration-line: underline;

        }

        .btn-outline-success {
            color: #ffffff;
        }

        .text-center {
            text-align: center !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('asset/image/picture.png') }}" alt="Logo" height="40">
                <span class="mb-0">Pemerintah Kota Jakarta Selatan</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('/')) active @endif"
                            href="{{ route('sudinsos.beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('profil*')) active @endif"
                            href="{{ route('sudinsos.profil') }}">Profil Sudinsos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('pelayanan*')) active @endif"
                            href="{{ route('sudinsos.pelayanan') }}">Pelayanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('berita*')) active @endif"
                            href="{{ route('sudinsos.berita') }}">Berita</a>
                    </li>
                </ul>
                <div class="social-icons ms-3">
                    <a href="..." class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/@KominfotikJaksel" class="text-white mx-2"><i
                            class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/kotajakartaselatan?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <div class="main-hero-wrapper">
            <div class="container">
                <div class="sec-title with-seperator centered">
                    <h2>Berita Jaksel</h2>
                    <div class="lower-text">kota Administrasi Jakarta Selatan</div>
                </div>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand">Berita Terkini</a>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" placeholder="Search" />
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
                <div class="hero-section text-center">
                    <div class="row row-cols-1 row-cols-md-5  g-4 py-5">
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://selatan.jakarta.go.id/upload/thumbnail/202504301346_UNTUK_BERITA_54.jpg"
                                    class="card-img-top" alt="gambar">
                                <div class="card-body">
                                    <div class="cat-info"><span class="fa fa-folder"></span>&nbsp;Pemerintahan
                                        <p><a href="..." class="link-tanpa-underline">Plt Wakil Walikota Hadiri
                                                Halal Bihalal FPK Jaksel</a></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Senin, 28 April 2025</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://selatan.jakarta.go.id/upload/thumbnail/202504301110_UNTUK_BERITA_53.jpg"
                                    class="card-img-top" alt="gambar">
                                <div class="card-body">
                                    <div class="cat-info"><span class="fa fa-folder"></span>&nbsp;Pemerintahan
                                        <p><a href="https://contoh.com" class="link-tanpa-underline">Walikota Jaksel
                                                Buka Konferensi PGRI</a></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Rabu, 30 April 2025</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://selatan.jakarta.go.id/upload/thumbnail/202504291647_UNTUK_BERITA_52.jpg"
                                    class="card-img-top" alt="gambar">
                                <div class="card-body">
                                    <div class="cat-info"><span class="fa fa-folder"></span>&nbsp;Pemerintahan
                                        <p><a href="https://contoh.com" class="link-tanpa-underline">Plt Wakil Walikota
                                                Jaksel Hadiri Halal Bihalal FLO DKI
                                                Jakarta</a></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Selasa, 29 April 2025</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://selatan.jakarta.go.id/upload/thumbnail/202504291400_UNTUK_BERITA_51.jpg"
                                    class="card-img-top" alt="gambar">
                                <div class="card-body">
                                    <div class="cat-info"><span class="fa fa-folder"></span>&nbsp;Kesejahteraan Rakyat
                                        <p><a href="https://contoh.com" class="link-tanpa-underline">Tingkatkan
                                                Pelayanan Kesehatan, Sudinkes Jaksel Luncurkan
                                                “Pasukan Putih</a></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Selasa, 29 April 2025</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://selatan.jakarta.go.id/upload/thumbnail/202504291341_UNTUK_BERITA_50.jpg"
                                    class="card-img-top" alt="gambar">
                                <div class="card-body">
                                    <div class="cat-info"><span class="fa fa-folder"></span>&nbsp;Pemerintahan
                                        <p><a href="https://contoh.com" class="link-tanpa-underline">40 Perusahaan
                                                Buka Ribuan Lowongan Kerja di Jakarta Job
                                                Fair</a></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Selasa, 29 April 2025</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://selatan.jakarta.go.id/upload/thumbnail/202504291315_UNTUK_BERITA_49.jpg"
                                    class="card-img-top" alt="gambar">
                                <div class="card-body">
                                    <div class="cat-info"><span class="fa fa-folder"></span>&nbsp;Pemerintahan
                                        <p><a href="https://contoh.com" class="link-tanpa-underline">Puluhan HPR di
                                                Kelurahan Guntur Divaksinasi Rabies</a></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Selasa, 29 April 2025</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://selatan.jakarta.go.id/upload/thumbnail/202504291052_UNTUK_BERITA_48.jpg"
                                    class="card-img-top" alt="gambar">
                                <div class="card-body">
                                    <div class="cat-info"><span class="fa fa-folder"></span>&nbsp;Pemerintahan
                                        <p><a href="https://contoh.com" class="link-tanpa-underline">Walikota Serahkan
                                                Puluhan SK Pensiun PNS di Lingkungan Kota
                                                Jaksel</a></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Selasa, 29 April 2025</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://selatan.jakarta.go.id/upload/thumbnail/202504281433_UNTUK_BERITA_20250428_143224_0000.jpg"
                                    class="card-img-top" alt="gambar">
                                <div class="card-body">
                                    <div class="cat-info"><span class="fa fa-folder"></span>&nbsp;Pemerintahan
                                        <p><a href="https://contoh.com" class="link-tanpa-underline">Petugas Gabungan
                                                Tertibkan Parkir Liar di Jalan Kaimun</a></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Senin, 28 April 2025</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://selatan.jakarta.go.id/upload/thumbnail/202504281344_UNTUK_BERITA_46.jpg"
                                    class="card-img-top" alt="gambar">
                                <div class="card-body">
                                    <div class="cat-info"><span class="fa fa-folder"></span>&nbsp;Pemerintahan
                                        <p><a href="https://contoh.com" class="link-tanpa-underline">Sudin PPKUKM
                                                Jaksel Fasilitasi UMKM Dapat Sertifikasi Halal</a></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Senin, 28 April 2025</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://selatan.jakarta.go.id/upload/thumbnail/202504281025_UNTUK_BERITA_44.jpg"
                                    class="card-img-top" alt="gambar">
                                <div class="card-body">
                                    <div class="cat-info"><span class="fa fa-folder"></span>&nbsp;Pemerintahan
                                        <p><a href="https://contoh.com" class="link-tanpa-underline">Sudin Tamhut
                                                Jaksel Pangkas Pohon di Kuningan Timur</a></p>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Senin, 28 April 2025</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5><i class="fas fa-building me-2"></i> Tentang Kami</h5>
                    <p>Website resmi Pemerintah Kota Jakarta Selatan untuk memberikan pelayanan dan informasi kepada
                        masyarakat secara transparan dan akuntabel.</p>
                    <div class="social-media mt-3">
                        <a href="#" class="me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5><i class="fas fa-address-book me-2"></i> Kontak</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Jl. Prapanca Raya No.9,
                            Kebayoran
                            Baru, Jakarta Selatan</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> (021) 2271-6000</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@example.com</li>
                        <li><i class="fas fa-clock me-2"></i> Senin-Jumat: 08.00 - 16.00 WIB</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5><i class="fas fa-link me-2"></i> Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2"></i>Kebijakan
                                Privasi</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2"></i>Syarat dan
                                Ketentuan</a>
                        </li>
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2"></i>Peta Situs</a>
                        </li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i>FAQ</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">Hak Cipta &copy; {{ date('Y') }} <a href="#"
                        style="color:rgb(205, 255, 249); font-family: Georgia, 'Times New Roman', Times, serif;">Pemerintah
                        Kota
                        Administrasi Jakarta Selatan</a></p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>