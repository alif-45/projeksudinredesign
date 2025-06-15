<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelayanan - Pemerintah Kota Jakarta Selatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('asset/blade/pelayanan.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('asset/image/logo.png') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <div class="social-icons ms-lg-3 mt-3 mt-lg-0">
                    <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container my-5 px-3 px-md-0">
        <div class="mb-5 text-center">
            <h2>Daftar Pelayanan</h2>
            <p class="text-muted">Kota Administrasi Jakarta Selatan</p>
        </div>

        @if($pelayanans->count())
        <div id="carouselPelayanan" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($pelayanans as $index => $layanan)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="container d-flex flex-column align-items-center">
                        @if ($layanan->ikon)
                        <img src="{{ asset('storage/' . $layanan->ikon) }}" class="img-fluid d-block mb-4"
                            alt="{{ $layanan->nama }}">
                        @endif
                        <h5 class="text-center fs-6 fs-md-5">{{ $layanan->nama }}</h5>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPelayanan"
                data-bs-slide="prev">
                <i class="fas fa-chevron-left"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPelayanan"
                data-bs-slide="next">
                <i class="fas fa-chevron-right"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        @else
        <p class="text-center">Tidak ada data pelayanan untuk ditampilkan.</p>
        @endif
    </main>


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