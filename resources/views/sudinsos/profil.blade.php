<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pemerintah - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('asset/blade/profile.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('asset/image/logo.png') }}" alt="Logo" height="40">
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
                        <a class="nav-link active @if(Request::is('profil*')) active @endif"
                            href="{{ route('sudinsos.profil') }}">Profil Sudinsos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('layanan*')) active @endif"
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
        <section class="hero-section-wrapper">
            <div class="container-navbar">
                <div class="hero-section text-center py-5">
                    <h1 class="display-4 fw-bold">Suku Dinas Sosial </h1>
                    <h2 class="display-5 fw-normal">Kota Administrasi Jakarta Selatan</h2>
                </div>
            </div>
        </section>

        <!-- Profil -->
        <div class="profil-wrapper">
            <div class="profil-deskripsi">
                <h2>Profil Suku Dinas Sosial Jakarta Selatan</h2>
                <p>
                    Suku Dinas Sosial Kota Administrasi Jakarta Selatan merupakan perangkat daerah yang berada di bawah
                    Dinas Sosial Provinsi DKI Jakarta. Kami memiliki tugas utama dalam melaksanakan urusan pemerintahan
                    bidang sosial di wilayah Jakarta Selatan, meliputi pelayanan, perlindungan, dan pemberdayaan sosial
                    masyarakat.
                </p>
                <p>
                    Dengan semangat kerja yang profesional, responsif, dan humanis, kami hadir untuk memberikan
                    pelayanan sosial kepada warga yang membutuhkan, khususnya dalam penanganan masalah kesejahteraan
                    sosial seperti kemiskinan, lansia terlantar, anak terlantar, penyandang disabilitas, serta korban
                    bencana sosial dan alam.
                </p>
                <p>
                    Kami juga aktif melakukan pembinaan kepada lembaga kesejahteraan sosial, peningkatan kapasitas
                    sumber daya manusia kesejahteraan sosial (SDM Kesos), serta kolaborasi dengan berbagai pihak demi
                    menciptakan Jakarta Selatan yang lebih sejahtera, inklusif, dan berkeadilan sosial.
                </p>
            </div>
            <div class="profil-foto">
                <img src="{{ asset('asset/blade/gedung-walikota.jpg') }}" alt="Gedung Walikota Jakarta Selatan">
            </div>
        </div>

        <!-- Card Button -->
        <div class="container-buttons" role="main">
            <h1>Tentang Kami</h1>
            <p class="lead">Kota Administrasi Jakarta Selatan</p>

            <div class="profil-card-grid" role="list">

                <div class="profil-card" role="listitem" tabindex="0" onclick="showImage('Visi Misi', this)"
                    onkeydown="if(event.key==='Enter'||event.key===' ') showImage('Visi Misi', this)">
                    <i class="bi bi-geo-alt-fill fs-1" aria-hidden="true" style="color: #2c5b75;"></i>
                    <h2>Visi Misi</h2>
                    <div class="arrow-down">
                        <i class="bi bi-chevron-down toggle-icon rotate-down" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="profil-card" role="listitem" tabindex="0" onclick="showImage('Maklumat Pelayanan', this)"
                    onkeydown="if(event.key==='Enter'||event.key===' ') showImage('Maklumat Pelayanan', this)">
                    <i class="bi bi-calendar-event-fill fs-1" aria-hidden="true" style="color: #2c5b75;"></i>
                    <h2>Maklumat Pelayanan</h2>
                    <div class="arrow-down">
                        <i class="bi bi-chevron-down toggle-icon rotate-down" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="profil-card" role="listitem" tabindex="0" onclick="showImage('Kanal Aduan', this)"
                    onkeydown="if(event.key==='Enter'||event.key===' ') showImage('Kanal Aduan', this)">
                    <i class="bi bi-chat-dots-fill fs-1" aria-hidden="true" style="color: #2c5b75;"></i>
                    <h2>Kanal Aduan</h2>
                    <div class="arrow-down">
                        <i class="bi bi-chevron-down toggle-icon rotate-down" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="profil-card" role="listitem" tabindex="0" onclick="showImage('Kepuasan Masyarakat', this)"
                    onkeydown="if(event.key==='Enter'||event.key===' ') showImage('Kepuasan Masyarakat', this)">
                    <i class="bi bi-bar-chart-line-fill fs-1" aria-hidden="true" style="color: #2c5b75;"></i>
                    <h2>Kepuasan Masyarakat</h2>
                    <div class="arrow-down">
                        <i class="bi bi-chevron-down toggle-icon rotate-down" aria-hidden="true"></i>
                    </div>
                </div>

            </div>

            <div id="imageContainer" class="hidden" aria-live="polite" aria-atomic="true">
                <h3 id="imageLabel"></h3>
                <img id="cardImage" src="" alt="Gambar preview" />
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
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Jl. Prapanca Raya No.9, Kebayoran
                            Baru, Jakarta Selatan</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> (021) 2271-6000</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@example.com</li>
                        <li><i class="fas fa-clock me-2"></i> Senin-Jumat: 08.00 - 16.00 WIB</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5><i class="fas fa-link me-2"></i> Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2"></i>Kebijakan Privasi</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2"></i>Syarat dan Ketentuan</a>
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

    <script>
        let currentImage = null;
    let currentIcon = null;

    function showImage(label, element) {
        const imageMap = {
        'Visi Misi': "{{ asset('asset/blade/visi-misi.png') }}",
        'Maklumat Pelayanan': "{{ asset('asset/blade/maklumat.png') }}",
        'Kanal Aduan': "{{ asset('asset/blade/kanal-aduan.png') }}",
        'Kepuasan Masyarakat': "{{ asset('asset/blade/kepuasan.png') }}"
        };

        const imageContainer = document.getElementById("imageContainer");
        const imageLabel = document.getElementById("imageLabel");
        const cardImage = document.getElementById("cardImage");
        const icon = element.querySelector(".toggle-icon");

        if (currentImage === label) {
        // Hide image and reset icon
        imageContainer.classList.add("hidden");
        if (currentIcon) {
            currentIcon.classList.remove("rotate-up");
            currentIcon.classList.add("rotate-down");
        }
        currentImage = null;
        currentIcon = null;
        return;
        }

        // Show selected image and label
        cardImage.src = imageMap[label] || "";
        imageLabel.textContent = label;
        imageContainer.classList.remove("hidden");

        // Reset previous icon rotate
        if (currentIcon && currentIcon !== icon) {
        currentIcon.classList.remove("rotate-up");
        currentIcon.classList.add("rotate-down");
        }

        // Rotate current icon up
        icon.classList.remove("rotate-down");
        icon.classList.add("rotate-up");

        currentImage = label;
        currentIcon = icon;
    }
    </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>