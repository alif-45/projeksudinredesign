<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pemerintah - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('asset/blade/beranda.css')}}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('asset/image/logo.png') }}" alt="Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <div class="social-icons ms-lg-3 mt-3 mt-lg-0">
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
                    <h2 class="display-5 fw-normal">Sudinsos Jakarta Selatan</h2>
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
                                <div class="col-md-7 text-center text-md-start">
                                    <div class="p-2">
                                        <p class="lead" style="max-width: 600px; margin: 0 auto;">Gubernur DKI Jakarta
                                            2025-2030</p>
                                        <div class="text-center text-md-start mt-3">
                                            <small class="text-muted">- Pramono Agung</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-4 text-center">
                                    <img src="https://selatan.jakarta.go.id/upload/visi_misi/202505080847-m.-anwar--s.si.--m.a.p..png"
                                        class="img-fluid rounded-circle shadow mb-3" alt="Profil 2"
                                        style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #009688;">
                                    <h4 class="mt-2">M. Anwar, S.Si., M.A.P.</h4>
                                    <p class="text-muted">Walikota Kota Administrasi Jakarta Selatan</p>
                                </div>
                                <div class="col-md-7 text-center text-md-start">
                                    <div class="p-2">
                                        <p class="lead" style="max-width: 600px; margin: 0 auto;">"Kota Administrasi
                                            Jakarta Selatan yang berbudaya, berorientasi pada pelayanan publik dan
                                            berwawasan lingkungan."</p>
                                        <div class="text-center text-md-start mt-3">
                                            <small class="text-muted">- M. Anwar, S.Si., M.A.P.</small>
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

        <div class="container my-5">
            <div class="row g-4">
                <div class="col-md-4 col-6">
                    <div class="feature-box text-center h-100">
                        <i class="fas fa-clock fa-3x mb-3"></i>
                        <h3>Layanan 24 Jam</h3>
                        <p>Layanan darurat dan pengaduan masyarakat yang tersedia 24 jam non-stop.</p>
                        <a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="feature-box text-center h-100">
                        <i class="fas fa-file-alt fa-3x mb-3"></i>
                        <h3>Perizinan</h3>
                        <p>Pelayanan perizinan usaha dan dokumen kependudukan secara online dan offline.</p>
                        <a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="feature-box text-center h-100">
                        <i class="fas fa-map-marked-alt fa-3x mb-3"></i>
                        <h3>Destinasi</h3>
                        <p>Informasi tempat wisata dan fasilitas publik unggulan di Jakarta Selatan.</p>
                        <a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="feature-box text-center h-100">
                        <i class="fas fa-bus fa-3x mb-3"></i>
                        <h3>Transportasi</h3>
                        <p>Informasi lengkap tentang angkutan umum dan kebijakan transportasi.</p>
                        <a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="feature-box text-center h-100">
                        <i class="fas fa-info-circle fa-3x mb-3"></i>
                        <h3>PPID Jakarta Selatan</h3>
                        <p>Layanan Pengaduan dan Informasi Publik Pemkot Jakarta Selatan.</p>
                        <a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="feature-box text-center h-100">
                        <i class="fas fa-headset fa-3x mb-3"></i>
                        <h3>Layanan Technocare</h3>
                        <p>Bantuan teknis dan pengaduan masalah teknologi informasi masyarakat.</p>
                        <a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="card mt-5 p-3">
                <div class="card-header">
                    <h2 class="mb-0">Agenda Terkini</h2>
                </div>
                @if(isset($schedules) && $schedules->isEmpty())
                <p class="text-center text-muted">Tidak ada agenda terkini yang tersedia.</p>
                @else
                <div class="d-flex flex-column gap-3 mt-3">
                    @foreach($schedules as $schedule)
                    <div class="schedule-item">
                        <div class="schedule-date-box me-3">
                            <div class="day-num">{{ $schedule->date->format('d') }}</div>
                            <div class="month-year">{{ $schedule->date->format('M Y') }}</div>
                        </div>
                        <div class="schedule-details flex-grow-1">
                            <p class="mb-1">
                                <span class="fw-bold">{{ $schedule->day_of_week ?:
                                    $schedule->date->translatedFormat('l')
                                    }}</span>, Jam {{ $schedule->time->format('H:i') }} WIB
                                @if($schedule->short_note)
                                <span class="schedule-tag">{{ $schedule->short_note }}</span>
                                @endif
                            </p>
                            <h5 class="fw-bold mb-1">{{ $schedule->title }}</h5>
                            <p class="text-muted mb-0">{{ $schedule->description_below_title }}</p>
                        </div>
                        <div class="schedule-location-box ms-3">
                            <p class="fw-bold">Tempat</p>
                            <p>{{ $schedule->location }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <div class="container my-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @if(isset($beritas))
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
                                    class="btn btn-read-more">Baca
                                    Selengkapnya</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Dipublikasikan pada {{ $berita->created_at->format('d M Y')
                                    }}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="partner-section mt-5">
                <h3 class="text-center">Partner Wilayah Jakarta Selatan</h3>
                <div id="partnerCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
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
                        <div class="carousel-item mt-3">
                            <div class="row justify-content-center">
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
                                            alt="Komisi Pemilihan Umum" class="partner-img">
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

            <div class="row mt-5 g-4">
                <div class="col-12 col-lg-6">
                    <div class="card h-100">
                        <div class="card-body p-0">
                            <h2 class="card-title p-3">Wilayah Jakarta Selatan</h2>
                            <div class="ratio ratio-1x1 ">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.074704383177!2d106.809312914769!3d-6.255909295475355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1ee36140685%3A0x6b4f7a26f0d9b4b0!2sSouth%20Jakarta%20City%20Hall!5e0!3m2!1sen!2sid!4v1678253164478!5m2!1sen!2sid"
                                    width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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