<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelayanan - Pemerintah Kota Jakarta Selatan</title>
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

        .layanan-item {
            margin-bottom: 3rem;
            display: flex;
            align-items: flex-start;
            gap: 2rem;
            border-bottom: 1px solid #ddd;
            padding-bottom: 2rem;
        }

        .layanan-item img {
            max-width: 200px;
            height: auto;
        }

        .layanan-item h6 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
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
                        <a class="nav-link @if(Request::is('/')) active @endif"
                            href="{{ route('sudinsos.beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('profil*')) active @endif"
                            href="{{ route('sudinsos.profil') }}">Profil Sudinsos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active @if(Request::is('pelayanan*')) active @endif"
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

    <!-- Konten -->
    <main class="container my-5">
        <div class="mb-5 text-center">
            <h2>Daftar Pelayanan</h2>
            <p class="text-muted">Layanan-layanan yang tersedia di Sudinsos Jakarta Selatan</p>
        </div>

        @foreach ($pelayanans as $layanan)
        <div class="layanan-item">
            @if ($layanan->ikon)
            <img src="{{ asset('storage/' . $layanan->ikon) }}" alt="{{ $layanan->nama }}">
            @endif
            <div>
                <h6>{{ $layanan->nama }}</h6>
            </div>
        </div>
        @endforeach
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