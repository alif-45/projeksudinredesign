<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $berita->judul }} - Berita Jaksel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('asset/blade/show.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('asset/image/logo.png') }}" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('sudinsos.beranda') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('sudinsos.profil') }}">Profil Sudinsos</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('sudinsos.pelayanan') }}">Pelayanan</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('sudinsos.berita') }}">Berita</a>
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

    <main>
        <div class="main-hero-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-4">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold">{{ $berita->judul }}</h2>
                            <p class="text-muted">Dipublikasikan pada {{ $berita->created_at->format('d M Y') }}</p>
                        </div>

                        @if ($berita->gambar)
                        <div class="text-center mb-4">
                            <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-fluid rounded shadow-sm"
                                alt="Gambar Berita" />
                        </div>
                        @endif

                        <div class="bg-white p-4 rounded shadow-sm content-berita">
                            {!! $berita->konten !!}
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-3"><i class="fas fa-search me-2"></i> Cari Berita</h5>
                                <form action="{{ route('sudinsos.berita') }}" method="GET">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control"
                                            placeholder="Ketik kata kunci..." />
                                        <button class="btn btn-custom-primary" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-3"><i class="fas fa-newspaper me-2"></i> Berita Lainnya</h5>
                                <div class="row row-cols-1 g-3 related-news-cards">
                                    @foreach ($beritas as $relatedBerita)
                                    <div class="col">
                                        <div class="card h-100">
                                            @if ($relatedBerita->gambar)
                                            <img src="{{ asset('storage/' . $relatedBerita->gambar) }}"
                                                class="card-img-top" alt="Gambar Berita" />
                                            @endif
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $relatedBerita->judul }}</h5>
                                                <p class="card-text">{{ Str::limit(strip_tags($relatedBerita->konten),
                                                    100) }}</p>
                                                <a href="{{ route('sudinsos.berita.show', $relatedBerita->id) }}"
                                                    class="btn btn-read-more mt-auto">Baca Selengkapnya</a>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">Dipublikasikan pada {{
                                                    $relatedBerita->created_at->format('d M Y') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5><i class="fas fa-building me-2"></i> Tentang Kami</h5>
                    <p>Pelayanan sistem informasi Smart Government menjadi kebutuhan pemerintah untuk memberikan
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