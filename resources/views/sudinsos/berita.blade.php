<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Berita Jaksel, Situs Web Resmi Pemerintah Kota Administrasi Jakarta Selatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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
            font-weight: 700;
            color: white !important;
        }

        .main-hero-wrapper {
            padding: 4rem 0;
            background: linear-gradient(rgba(210, 245, 255, 0.8), rgba(255, 255, 255, 0.8));
        }

        .feature-box,
        .card {
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(11, 179, 226, 0.3);
        }

        .card img {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-footer {
            background-color: #f1f1f1;
            border-top: none;
        }

        .card-title {
            color: var(--dark-color);
            font-weight: 600;
            font-size: 1.2rem;
        }

        .btn-read-more {
            background-color: var(--primary-color);
            color: rgb(255, 255, 255);
            border: none;
            transition: background-color 0.3s;
        }

        .btn-read-more:hover {
            background-color: var(--secondary-color);
        }

        .search-form input {
            border: 1px solid var(--primary-color);
        }

        .search-form button {
            background-color: var(--primary-color);
            color: white;
            border: none;
        }

        .page-link {
            color: rgb(126, 175, 174) !important;
        }

        .page-link:hover {
            color: white !important;
            background-color: rgb(32, 161, 148) !important;
            border-color: rgb(219, 211, 211) !important;
        }

        .page-item.active .page-link {
            background-color: rgb(46, 77, 97) !important;
            border-color: rgb(176, 180, 184) !important;
            color: white !important;
        }


        @media (max-width: 767.98px) {
            .navbar-nav .nav-link {
                text-align: center;
            }

            .social-icons {
                text-align: center;
                margin-top: 1rem;
            }
        }

        footer {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2rem 0;
        }

        footer a {
            color: rgba(255, 255, 255, 0.8);
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
                <img src="{{ asset('asset/image/gambar.png') }}" alt="Logo" height="40" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('/')) active @endif"
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
                        <a class="nav-link active @if(Request::is('berita*')) active @endif"
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
                <div class="text-center mb-4">
                    <h2>Berita Jaksel</h2>
                    <p>Kota Administrasi Jakarta Selatan</p>
                </div>
                <div class="mb-4">
                    <form class="d-flex justify-content-end search-form" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari berita..."
                            aria-label="Search" />
                        <button class="btn" type="submit">Cari</button>
                    </form>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($beritas as $berita)
                    <div class="col">
                        <div class="card h-100">
                            @if ($berita->gambar)
                            <img src="{{ asset('storage/' . $berita->gambar) }}" class="card-img-top"
                                alt="Gambar Berita" />
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $berita->judul }}</h5>
                                <p class="card-text">{{ Str::limit(strip_tags($berita->konten), 100) }}</p>
                                <a href="{{ route('sudinsos.berita.show', $berita->id) }}"
                                    class="btn btn-read-more">Baca Selengkapnya</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Dipublikasikan pada {{ $berita->created_at->format('d M Y')
                                    }}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="mt-4 d-flex justify-content-center ">
            {{ $beritas->links() }}
        </div>

    </main>

    <!-- Footer -->
    <footer class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5><i class="fas fa-building me-2"></i> Tentang Kami</h5>
                    <p>Pelayanan sistem informasi Smart Goverment menjadi kebutuhan pemerintah untuk memberikan
                        informasi cepat, efektif dan efisien.</p>
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
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Jl. Prapanca Raya No. 9, Kecamatan
                            Kebayoran Baru, Kota Administrasi Jakarta Selatan, Provinsi Daerah Khusus Jakarta, Kode Pos
                            12170.</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> (021) 727-866-29</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> walikota-jaksel@jakarta.go.id</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5><i class="fa-regular fa-clock me-2"></i> Jam Operasional</h5>
                    <ul class="list-unstyled">
                        <li>Senin - Jumat (07.30 - 16.00) </li>
                        <li>Sabtu - Minggu (Tutup)</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4" />
            <div class="text-center">
                <p class="mb-0">Hak Cipta &copy; {{ date('Y') }} <a href="#"
                        style="color:rgb(205, 255, 249); font-family: Georgia, 'Times New Roman', Times, serif;">Pemerintah
                        Kota Administrasi Jakarta Selatan</a></p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>