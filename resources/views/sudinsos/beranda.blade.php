<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pemerintah - @yield('title')</title>
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
            background: linear-gradient(rgba(0, 94, 122, 0.8), rgba(238, 241, 240, 0.8));
            padding: 4rem 0;
        }


        .main-hero-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("{{ asset('asset/image/jaksell.jpg') }}");
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
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
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
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
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
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('asset/image/gambar.png') }}" alt="Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active @if(Request::is('/')) active @endif"
                            href="{{ route('sudinsos.beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('profil*')) active @endif"
                            href="{{ route('sudinsos.profil') }}">Profil Sudinsos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('pelayanan*')) active @endif"
                            href="{{ route('sudinsos.pelayanan') }}">Pelayanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('berita*')) active @endif"
                            href="{{ route('sudinsos.berita') }}">Berita</a>
                    </li>
                </ul>
                <div class="social-icons ms-3">
                    <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>

        <div class="main-hero-wrapper">
            <div class="container">
                <div class="hero-section text-center py-5">
                    <h1 class="display-4 fw-bold">Selamat Datang di Portal Resmi</h1>
                    <h2 class="display-5 fw-normal">Pemerintah Kota Jakarta Selatan</h2>
                    <p class="lead">Kami hadir untuk memberikan layanan dan informasi terbaik kepada masyarakat dengan
                        transparansi dan akuntabilitas.</p>
                    <div class="search-container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder="Cari informasi, layanan, atau berita...">
                                    <button class="btn btn-outline-secondary px-4" type="button"
                                        style="background-color: #009688; color: white;">
                                        <i class="fas fa-search"></i> Cari
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="card shadow-lg p-3" style="max-width: 800px; margin: 0 auto;">
                <div id="profileCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-4 text-center">
                                    <img src="https://selatan.jakarta.go.id/upload/visi_misi/202502201128-pramono-anung.png"
                                        class="img-fluid rounded-circle shadow mb-3" alt="Profil 1"
                                        style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #009688;">
                                    <h4 class="mt-2">Pramono Agung</h4>
                                    <p class="text-muted">Gubernur DKI Jakarta</p>
                                </div>
                                <div class="col-md-7 text-center">
                                    <div class="p-2">
                                        <p class="lead" style="max-width: 600px; margin: 0 auto;">Gubernur DKI Jakarta
                                            2025-2030
                                        <div class="text-center mt-3">
                                            <small class="text-muted">- Heru Budi Hartono</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-4 text-center">
                                    <img src="https://selatan.jakarta.go.id/modul/sudinsos/upload/visi_misi/202211041424-munjirin--s.sos--m.si.png"
                                        class="img-fluid rounded-circle shadow mb-3" alt="Profil 2"
                                        style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #009688;">
                                    <h4 class="mt-2">Munjirin, S.Sos, M.Si</h4>
                                    <p class="text-muted">Walikota Kota Administrasi Jakarta Selatan</p>
                                </div>
                                <div class="col-md-7 text-center">
                                    <div class="p-2">
                                        <p class="lead" style="max-width: 600px; margin: 0 auto;">"Kota Administrasi
                                            Jakarta Selatan yang berbudaya, berorientasi pada pelayanan publik dan
                                            berwawasan lingkungan."</p>
                                        <div class="text-center mt-3">
                                            <small class="text-muted">- Munjirin, S.Sos, M.Si</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#profileCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#profileCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#profileCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#profileCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                </div>
            </div>
        </div>
    </main>




    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-4 col-6">
                <div class="feature-box text-center p-3 h-100">
                    <i class="fas fa-clock fa-3x mb-3"></i>
                    <h3>Layanan 24 Jam</h3>
                    <p>Layanan darurat dan pengaduan masyarakat yang tersedia 24 jam non-stop.</p>
                    <a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="feature-box text-center p-3 h-100">
                    <i class="fas fa-file-alt fa-3x mb-3"></i>
                    <h3>Perizinan</h3>
                    <p>Pelayanan perizinan usaha dan dokumen kependudukan secara online dan offline.</p>
                    <a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="feature-box text-center p-3 h-100">
                    <i class="fas fa-map-marked-alt fa-3x mb-3"></i>
                    <h3>Destinasi</h3>
                    <p>Informasi tempat wisata dan fasilitas publik unggulan di Jakarta Selatan.</p>
                    <a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="feature-box text-center p-3 h-100">
                    <i class="fas fa-bus fa-3x mb-3"></i>
                    <h3>Transportasi</h3>
                    <p>Informasi lengkap tentang angkutan umum dan kebijakan transportasi.</p>
                    <a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="feature-box text-center p-3 h-100">
                    <i class="fas fa-info-circle fa-3x mb-3"></i>
                    <h3>PPID Jakarta Selatan</h3>
                    <p>Layanan Pengaduan dan Informasi Publik Pemkot Jakarta Selatan.</p>
                    <a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="feature-box text-center p-3 h-100">
                    <i class="fas fa-headset fa-3x mb-3"></i>
                    <h3>Layanan Technocare</h3>
                    <p>Bantuan teknis dan pengaduan masalah teknologi informasi masyarakat.</p>
                    <a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
                </div>
            </div>
        </div>


        <div class="card mt-5">
            <div class="card-header ">
                <h2 class="mb-0">Informasi Terkini</h2>
            </div>
            <div class="card-body">
                <img src="https://selatan.jakarta.go.id/modul/sudinsos/upload/thumbnail/202406131626_dinsos.png"
                    alt=""><br><br>
                <h5 class="card-title">Jakarta Selatan Raih Penghargaan Kota Terinovatif 2023</h5>
                <p class="card-text">Pemerintah Kota Jakarta Selatan menerima penghargaan sebagai Kota Terinovatif
                    tahun 2023 dari Kementerian Dalam Negeri...</p>
                <a href="#" class="btn btn-outline-secondary">Baca Selengkapnya</a>
            </div>
            <div class="card-footer bg-light">
                Dipublikasikan pada 2 hari yang lalu
            </div>
        </div>

        <div class="partner-section mt-5">
            <h3 class="text-center">Partner Wilayah Jakarta Selatan</h3>
            <div id="partnerCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <div class="partner-item">
                                    <img src="https://selatan.jakarta.go.id/modul/sudinsos/public/assets/images/logo/jakarta-pusat.png"
                                        alt="Jakarta Pusat" class="partner-img">
                                    <h5 class="partner-title">Jakarta Pusat</h5>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="partner-item">
                                    <img src="https://selatan.jakarta.go.id/modul/sudinsos/public/assets/images/logo/jakarta-raya.png"
                                        alt="Jakarta Raya" class="partner-img">
                                    <h5 class="partner-title">Jakarta Raya</h5>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="partner-item">
                                    <img src="https://selatan.jakarta.go.id/modul/sudinsos/public/assets/images/logo/jakarta-timur.png"
                                        alt="Jakarta Timur" class="partner-img">
                                    <h5 class="partner-title">Jakarta Timur</h5>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="partner-item">
                                    <img src="https://selatan.jakarta.go.id/modul/sudinsos/public/assets/images/logo/jakarta-barat.png"
                                        alt="Jakarta Barat" class="partner-img">
                                    <h5 class="partner-title">Jakarta Barat</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <div class="partner-item">
                                    <img src="https://selatan.jakarta.go.id/modul/sudinsos/public/assets/images/logo/jakarta-utara.png"
                                        alt="Jakarta Utara" class="partner-img">
                                    <h5 class="partner-title">Jakarta Utara</h5>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="partner-item">
                                    <img src="https://selatan.jakarta.go.id/modul/sudinsos/public/assets/images/logo/kepulauan-seribu.png"
                                        alt="Kepulauan Seribu" class="partner-img">
                                    <h5 class="partner-title">Kepulauan Seribu</h5>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="partner-item">
                                    <img src="https://selatan.jakarta.go.id/modul/sudinsos/public/assets/images/logo/satu-data2.png"
                                        alt="Satu Data" class="partner-img">
                                    <h5 class="partner-title">Satu Data</h5>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="partner-item">
                                    <img src="https://selatan.jakarta.go.id/public/assets/images/logo/kpu.png"
                                        alt="Satu Data" class="partner-img">
                                    <h5 class="partner-title">Komisi Pemilihan Umum</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#partnerCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#partnerCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
            </div>
        </div>

        <div class="row mt-5 g-3">
            <div class="col-12 col-lg-6">
                <div class="card h-100">
                    <div class="card-body p-0">
                        <h2 class="card-title p-3">Wilayah Jakarta Selatan</h2>
                        <div class="ratio ratio-1x1">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.317239755586!2d106.8225093153286!3d-6.301930963478221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f2308f7f2f3d%3A0x7d9a5a3a5b5b5b5b!2sKantor%20Walikota%20Jakarta%20Selatan!5e0!3m2!1sen!2sid!4v1672244147501!5m2!1sen!2sid"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="{{ asset('asset/image/picture.png') }}" class="img-fluid card-img-top mb-3"
                            alt="Jakarta Selatan">
                        <blockquote class="card-text">
                            Jakarta Selatan (Jaksel) dikenal sebagai kawasan metropolitan yang dinamis,
                            menggabungkan gaya hidup modern dengan jejak sejarah dan budaya. Meskipun identik dengan
                            pusat
                            bisnis dan hiburan mewah, Jaksel juga menyimpan banyak kekhasan lokal yang unik.
                        </blockquote>
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
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2"></i>Kebijakan Privasi</a>
                        </li>
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2"></i>Syarat dan
                                Ketentuan</a>
                        </li>
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2"></i>Peta Situs</a></li>
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