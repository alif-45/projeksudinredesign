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

        .carousel-inner img {
            height: 400px;
            max-width: 400px;
            object-fit: cover;

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
                <img src="{{ asset('asset/image/picture.png') }}" alt="Logo" height="40">
                <span class="mb-0">Pemerintah Kota Jakarta Selatan</span>
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
    <div class="container my-5">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://media-hosting.imagekit.io/97b9866a55b14cd6/download.jpeg?Expires=1840160483&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=szynE6aU2LZ9oDfXt-4ToUzJ-Nr60cCwK~CAXyseCidtfWYMGMAzisAHTs2HCNMt-5y00HSovxrtNGx4UOCpbyzZ2cUlTFGKrw2ieRpwxdANA9A8bUUzO~03-dLyCQBx~x40FT8xSqfrIroXT9inegODMMaDdkYQ0-FVs8CgkMzF-0CwvfIGCPEafz-dCtV7XYoibTY5qAQ-UwAQCNyOuosFLXzZIQRay04lCBUnV7gFFcbZtiRNa~bKp2gGryUOTCCxHjIlImeKIPtgCly5UGj~qyWMacv4ufPVWnM7MVPh9FzBJbZedT-~4vAtJkdjOuzjgLfEkBEQiQ-YRTc1IQ__"
                        class="d-block w-100 carousel-img" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="https://media-hosting.imagekit.io/5a4c655167064b33/download%20(1).jpeg?Expires=1840160356&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=rpP7me72C5hpUC3qEmpj~pUo60SJSlSFXWrffmWi3sjyu6Qutu45yeCic2UkMaFUcUdg-20fTlusI7MjJrlGFM9DGVUZsAMf7UpDKUFm0f8Amc~p36JrzdSoU04JkTPqhJqQsVNs6QVO2lC0mqmm-o14KjIIR0vFG5Z46~iy~ETCrM1a9DfPONmTZ6gGJ7~P3bumS3aptRHTREHnQ67ip529t7-P2-jr4pMOJEE4v4b4vtJEZV1OWhEoWGHQSig41CR6GPEZMLgaEluaeMG6B2pe3gVIYIxepLDxZPFqKfUZpiMKksFWT-bbnDerhLRo4fZ3u5Z-pGs2TAs-R-6mXQ__"
                        class="d-block w-100 carousel-img" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="https://media-hosting.imagekit.io/ab2a78e11de3439c/download%20(2).jpeg?Expires=1840160577&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=cph7bAP9UfTlK-KcaS9pp0J6cof0H4VSEb-xrOaL5Ld4Ro2RIysKCzcze302xGPZK2U6LKXSAtL9vSfmPJ97ngZLKwRQT9Ktryo8tng6a7TYJfD3V8ZarTw59KVXAbFvgERqH~dhL1nVdZQ81VtJqVk8Qj0f4rWJskn0MbrS6z-eX6CrqY4O~blZQbmtCGcjNCD6KBXxZgwPWKPUfRpCSIJA9MEIarrPc7ZFtmjpfyBbTG0is6rVEostUKH3IiIS2b~5hhqbkrEnHE0oOYAI539YUUocMO0~0W-dOfkKUeipNe5rwKFJiHnVXXiWdWs7pnFxfjTUIoc0bhVEAWZdxw__"
                        class="d-block w-100 carousel-img" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="https://media-hosting.imagekit.io/d7f880270b334051/download%20(3).jpeg?Expires=1840161205&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=L333I1x9Casu~IVUmr~UnnaiLPlVIzTa~jsxaKo0RicDgO9qj~xcdy7t2ZEVIBgcqkmqzX91hISDgqp374V0ADa4m0E8569F2CprExWtZCnAOe6jsrQq7iHnaDYkdKb3K8WYCDCw3SAqPQq8Kh3HgIa88DlH35tr9cHN2LFzBVlddRZoRTP3phBw6S8qU79RtegYTeiYOdfxt1W~SaQ-RNRSiVjsFTJ0lRDh53i3Rfro0CGH2UdkLNvBsCAirzHw-iA-fPaKUERDhpAGuj~WTaB5L5G4UACqDiRPLrCXqhyZ~QiRjTaMicZH8K1gzJ9J52HZHcDO6hSg2abZr~mbZw__"
                        class="d-block w-100 carousel-img" alt="Slide 4">
                </div>
                <div class="carousel-item">
                    <img src="https://media-hosting.imagekit.io/ace1417a27ea4b42/download%20(4).jpeg?Expires=1840162046&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=V58KuZs3gL~3IF72io6D59CFlCig4VsZiZWZGKdlpw9bY2tIqts-1ab-lLk48CQZwDAKxQ8na3hpDGCO35T-8fiKNzIDQGEu4MT3VzyPGKM3swn~W9H9ckGxjOKC~700RMJCEsjaVcSbk5rKQbBoofp5Opplk1u-dTWgQud9vRznmNpr00siXHVSIjAiy1ZJ3WQRKh-gR42KNkwzwuwmDV58PUzecg~R~WAB4aT2BUNZCSc0ZxHKa0v9rGxWCUXyWxxWztDec5kIIruRw6c2WaTrOVwE39nmWvrL6utBJUguGXTyvOI2326HvyNRM8jeUQaPWIOZoVTLP1RItZEqfQ__"
                        class="d-block w-100 carousel-img" alt="Slide 5">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>



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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>