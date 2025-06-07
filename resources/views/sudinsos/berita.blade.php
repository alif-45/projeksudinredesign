<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Jaksel, Situs Web Resmi Pemerintah Kota Administrasi Jakarta Selatan - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .link-tanpa-underline {
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }

        .link-tanpa-underline:hover {
            text-decoration: underline;
            color: #2a8e31;
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
                <img src="{{ asset('asset/image/picture.png') }}" alt="Logo" height="40">
                Pemerintah Kota Jakarta Selatan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link @if (Request::is('/')) active @endif"
                            href="{{ route('sudinsos.beranda') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link @if (Request::is('profil*')) active @endif"
                            href="{{ route('sudinsos.profil') }}">Profil Sudinsos</a></li>
                    <li class="nav-item"><a class="nav-link @if (Request::is('pelayanan*')) active @endif"
                            href="{{ route('sudinsos.pelayanan') }}">Pelayanan</a></li>
                    <li class="nav-item"><a class="nav-link @if (Request::is('berita*')) active @endif"
                            href="{{ route('sudinsos.berita') }}">Berita</a></li>
                </ul>
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
                    <form class="d-flex justify-content-end" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari berita..." aria-label="Search">
                        <button class="btn btn-success" type="submit">Cari</button>
                    </form>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($beritas as $berita)
                    <div class="col">
                        <div class="card h-100">
                            @if ($berita->gambar)
                            <img src="{{ asset('storage/' . $berita->gambar) }}" class="card-img-top"
                                alt="Gambar Berita">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $berita->judul }}</h5>
                                <p class="card-text">{{ Str::limit($berita->konten, 100) }}</p>
                                <a href="#" class="btn btn-outline-secondary">Baca Selengkapnya</a>
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
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5><i class="fas fa-building"></i> Tentang Kami</h5>
                    <p>Website resmi Pemerintah Kota Jakarta Selatan untuk memberikan pelayanan dan informasi kepada
                        masyarakat.</p>
                </div>
                <div class="col-md-4">
                    <h5><i class="fas fa-address-book"></i> Kontak</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Prapanca Raya No.9, Kebayoran Baru</li>
                        <li><i class="fas fa-phone"></i> (021) 2271-6000</li>
                        <li><i class="fas fa-envelope"></i> info@example.com</li>
                        <li><i class="fas fa-clock"></i> Senin - Jumat: 08.00 - 16.00 WIB</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5><i class="fas fa-share-alt"></i> Sosial Media</h5>
                    <a href="#" class="text-white me-2"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>