@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Tentang POSITRON 2025</h2>
            <p class="text-center mb-5">Ini adalah halaman tentang untuk kegiatan ospek Departemen Teknik Elektro dan
                Informatika Universitas Negeri Malang.</p>

            <!-- Filosofi Logo POSITRON -->
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                    <div class="bg-white border rounded-4 shadow-sm p-5">
                        <h3 class="text-center fw-semibold mb-4">Filosofi Logo POSITRON</h3>
                        <p class="text-muted text-center mb-4">
                            Logo POSITRON dirancang dengan makna mendalam yang mencerminkan semangat dan visi mahasiswa baru
                            Departemen Teknik Elektro dan Informatika. Setiap elemen dalam logo memiliki filosofi yang kuat
                            untuk membentuk karakter dan identitas mahasiswa yang unggul.
                        </p>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <div class="me-3 mt-1">
                                        <i class="fas fa-atom text-primary fs-4"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-semibold mb-2">Bentuk Geometris</h6>
                                        <p class="text-muted mb-0 small">Melambangkan presisi, logika, dan pemikiran
                                            terstruktur yang menjadi dasar ilmu teknik dan informatika.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <div class="me-3 mt-1">
                                        <i class="fas fa-lightbulb text-warning fs-4"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-semibold mb-2">Energi Positif</h6>
                                        <p class="text-muted mb-0 small">Nama POSITRON sendiri mengacu pada partikel
                                            bermuatan positif, simbolisasi energi konstruktif untuk membangun masa depan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Makna Warna Logo -->
            <h3 class="text-center fw-semibold mb-4">Makna Warna Logo POSITRON</h3>
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 text-center">
                        <div class="mx-auto mb-3"
                            style="width: 40px; height: 40px; background-color: #3B82F6; border-radius: 50%;"></div>
                        <h5 class="fw-semibold">Biru</h5>
                        <p class="text-muted mb-0">Melambangkan teknologi, kecerdasan, dan profesionalisme.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 text-center">
                        <div class="mx-auto mb-3"
                            style="width: 40px; height: 40px; background-color: #8B5CF6; border-radius: 50%;"></div>
                        <h5 class="fw-semibold">Ungu</h5>
                        <p class="text-muted mb-0">Mewakili kreativitas, inovasi, dan imajinasi tanpa batas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 text-center">
                        <div class="mx-auto mb-3"
                            style="width: 40px; height: 40px; background-color: #FACC15; border-radius: 50%;"></div>
                        <h5 class="fw-semibold">Kuning</h5>
                        <p class="text-muted mb-0">Simbol energi, semangat, dan optimisme masa depan.</p>
                    </div>
                </div>
            </div>



            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>POSITRON 2025 - Program Navigation</title>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
                <style>
                    .program-nav-item {
                        transition: all 0.3s ease;
                        cursor: pointer;
                    }

                    .program-nav-item:hover {
                        background-color: #f8f9fa;
                        transform: translateX(5px);
                    }

                    .program-nav-item.active {
                        background-color: #e3f2fd;
                        border-left: 4px solid #2196f3;
                    }

                    .program-detail {
                        display: none;
                        animation: fadeIn 0.5s ease-in-out;
                    }

                    .program-detail.active {
                        display: block;
                    }

                    @keyframes fadeIn {
                        from {
                            opacity: 0;
                            transform: translateY(20px);
                        }

                        to {
                            opacity: 1;
                            transform: translateY(0);
                        }
                    }

                    .bg-gradient-primary {
                        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    }

                    .sticky-top {
                        position: sticky;
                        top: 100px;
                        z-index: 10;
                    }

                    .carousel-item {
                        transition: transform 0.6s ease-in-out;
                    }

                    .carousel-control-prev-icon,
                    .carousel-control-next-icon {
                        background-color: rgba(0, 0, 0, 0.5);
                        border-radius: 50%;
                        width: 40px;
                        height: 40px;
                    }

                    body {
                        background-color: #f8f9fa;
                    }
                </style>
            </head>

            <body>
                <div class="container py-5">
                    <div class="row">
                        <!-- Left Side: Program List -->
                        <div class="col-lg-4">
                            <div class="bg-white border rounded-4 shadow-sm p-4 sticky-top">
                                <h5 class="fw-semibold mb-3">Daftar Program</h5>
                                <div class="list-group list-group-flush">
                                    <a href="#forum-maba"
                                        class="list-group-item list-group-item-action border-0 px-3 py-3 program-nav-item active"
                                        data-target="forum-maba">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                                <i class="fas fa-users text-primary"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1 fw-semibold">Forum Maba</h6>
                                                <small class="text-muted">Sosialisasi & Networking</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#ldk"
                                        class="list-group-item list-group-item-action border-0 px-3 py-3 program-nav-item"
                                        data-target="ldk">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                                <i class="fas fa-chess-king text-success"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1 fw-semibold">Latihan Dasar Kepemimpinan</h6>
                                                <small class="text-muted">Leadership Training</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#himpunan"
                                        class="list-group-item list-group-item-action border-0 px-3 py-3 program-nav-item"
                                        data-target="himpunan">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-info bg-opacity-10 rounded-circle p-2 me-3">
                                                <i class="fas fa-handshake text-info"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1 fw-semibold">Introduction of Himpunan</h6>
                                                <small class="text-muted">Organisasi & UKM</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#nako"
                                        class="list-group-item list-group-item-action border-0 px-3 py-3 program-nav-item"
                                        data-target="nako">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-warning bg-opacity-10 rounded-circle p-2 me-3">
                                                <i class="fas fa-graduation-cap text-warning"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1 fw-semibold">NAKO (Inaugurasi)</h6>
                                                <small class="text-muted">Upacara Peresmian</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side: Carousel & Details -->
                        <div class="col-lg-8">
                            <!-- Main Carousel -->
                            <div class="bg-white border rounded-4 shadow-sm p-4 mb-4">
                                <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner rounded-3">
                                        <!-- Forum Maba Slides -->
                                        <div class="carousel-item active" data-program="forum-maba">
                                            <img src="https://via.placeholder.com/700x400/3B82F6/FFFFFF?text=Forum+Diskusi"
                                                class="d-block w-100" alt="Forum Diskusi"
                                                style="height: 350px; object-fit: cover;">
                                        </div>
                                        <div class="carousel-item" data-program="forum-maba">
                                            <img src="https://via.placeholder.com/700x400/1E40AF/FFFFFF?text=Sosialisasi+Kampus"
                                                class="d-block w-100" alt="Sosialisasi Kampus"
                                                style="height: 350px; object-fit: cover;">
                                        </div>
                                        <div class="carousel-item" data-program="forum-maba">
                                            <img src="https://via.placeholder.com/700x400/2563EB/FFFFFF?text=Networking+Mahasiswa"
                                                class="d-block w-100" alt="Networking Mahasiswa"
                                                style="height: 350px; object-fit: cover;">
                                        </div>

                                        <!-- LDK Slides -->
                                        <div class="carousel-item" data-program="ldk">
                                            <img src="https://via.placeholder.com/700x400/10B981/FFFFFF?text=Leadership+Training"
                                                class="d-block w-100" alt="Leadership Training"
                                                style="height: 350px; object-fit: cover;">
                                        </div>
                                        <div class="carousel-item" data-program="ldk">
                                            <img src="https://via.placeholder.com/700x400/059669/FFFFFF?text=Team+Building"
                                                class="d-block w-100" alt="Team Building"
                                                style="height: 350px; object-fit: cover;">
                                        </div>
                                        <div class="carousel-item" data-program="ldk">
                                            <img src="https://via.placeholder.com/700x400/047857/FFFFFF?text=Communication+Skills"
                                                class="d-block w-100" alt="Communication Skills"
                                                style="height: 350px; object-fit: cover;">
                                        </div>

                                        <!-- Himpunan Slides -->
                                        <div class="carousel-item" data-program="himpunan">
                                            <img src="https://via.placeholder.com/700x400/0891B2/FFFFFF?text=Organisasi+Mahasiswa"
                                                class="d-block w-100" alt="Organisasi Mahasiswa"
                                                style="height: 350px; object-fit: cover;">
                                        </div>
                                        <div class="carousel-item" data-program="himpunan">
                                            <img src="https://via.placeholder.com/700x400/0E7490/FFFFFF?text=Himpunan+Profesi"
                                                class="d-block w-100" alt="Himpunan Profesi"
                                                style="height: 350px; object-fit: cover;">
                                        </div>
                                        <div class="carousel-item" data-program="himpunan">
                                            <img src="https://via.placeholder.com/700x400/155E75/FFFFFF?text=Unit+Kegiatan+Mahasiswa"
                                                class="d-block w-100" alt="Unit Kegiatan Mahasiswa"
                                                style="height: 350px; object-fit: cover;">
                                        </div>

                                        <!-- NAKO Slides -->
                                        <div class="carousel-item" data-program="nako">
                                            <img src="https://via.placeholder.com/700x400/F59E0B/FFFFFF?text=Upacara+Peresmian"
                                                class="d-block w-100" alt="Upacara Peresmian"
                                                style="height: 350px; object-fit: cover;">
                                        </div>
                                        <div class="carousel-item" data-program="nako">
                                            <img src="https://via.placeholder.com/700x400/D97706/FFFFFF?text=Pelantikan+Mahasiswa"
                                                class="d-block w-100" alt="Pelantikan Mahasiswa"
                                                style="height: 350px; object-fit: cover;">
                                        </div>
                                        <div class="carousel-item" data-program="nako">
                                            <img src="https://via.placeholder.com/700x400/B45309/FFFFFF?text=Keluarga+Besar+TEI"
                                                class="d-block w-100" alt="Keluarga Besar TEI"
                                                style="height: 350px; object-fit: cover;">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Program Details -->
                            <div id="program-details">
                                <!-- Forum Maba Detail -->
                                <div id="forum-maba" class="program-detail active">
                                    <div class="bg-white border rounded-4 shadow-sm p-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                                <i class="fas fa-users text-primary fs-4"></i>
                                            </div>
                                            <div>
                                                <h4 class="fw-semibold mb-1">Forum Maba</h4>
                                                <span class="badge bg-primary bg-opacity-10 text-primary">Sosialisasi &
                                                    Networking</span>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-3">
                                            Forum diskusi dan sosialisasi untuk mahasiswa baru yang bertujuan memperkenalkan
                                            lingkungan akademik, fasilitas kampus, dan membangun networking awal antar
                                            mahasiswa.
                                            Kegiatan ini menjadi langkah pertama untuk membangun chemistry antar mahasiswa
                                            baru.
                                        </p>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="small text-muted">
                                                    <i class="fas fa-calendar-alt me-2"></i>Dilaksanakan di awal periode
                                                    ospek
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="small text-muted">
                                                    <i class="fas fa-clock me-2"></i>Durasi: 2-3 hari
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- LDK Detail -->
                                <div id="ldk" class="program-detail">
                                    <div class="bg-white border rounded-4 shadow-sm p-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3">
                                                <i class="fas fa-chess-king text-success fs-4"></i>
                                            </div>
                                            <div>
                                                <h4 class="fw-semibold mb-1">Latihan Dasar Kepemimpinan</h4>
                                                <span class="badge bg-success bg-opacity-10 text-success">Leadership
                                                    Training</span>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-3">
                                            Program pelatihan yang fokus pada pengembangan soft skills, kemampuan
                                            leadership,
                                            komunikasi efektif, dan manajemen diri yang essential untuk kesuksesan di dunia
                                            kerja.
                                            Mahasiswa akan dilatih untuk menjadi pemimpin yang dapat menginspirasi dan
                                            memotivasi orang lain.
                                        </p>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="small text-muted">
                                                    <i class="fas fa-users-cog me-2"></i>Pelatihan intensif dengan mentor
                                                    berpengalaman
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="small text-muted">
                                                    <i class="fas fa-certificate me-2"></i>Sertifikat kepemimpinan
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Himpunan Detail -->
                                <div id="himpunan" class="program-detail">
                                    <div class="bg-white border rounded-4 shadow-sm p-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-info bg-opacity-10 rounded-circle p-3 me-3">
                                                <i class="fas fa-handshake text-info fs-4"></i>
                                            </div>
                                            <div>
                                                <h4 class="fw-semibold mb-1">Introduction of Himpunan</h4>
                                                <span class="badge bg-info bg-opacity-10 text-info">Organisasi & UKM</span>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-3">
                                            Pengenalan organisasi kemahasiswaan, himpunan profesi, dan unit kegiatan
                                            mahasiswa yang ada
                                            di departemen untuk membantu mahasiswa baru menemukan passion dan bakat mereka.
                                            Kegiatan ini membuka wawasan tentang berbagai peluang pengembangan diri di luar
                                            akademik.
                                        </p>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="small text-muted">
                                                    <i class="fas fa-sitemap me-2"></i>Eksplorasi berbagai organisasi dan
                                                    UKM
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="small text-muted">
                                                    <i class="fas fa-handshake me-2"></i>Meet & greet dengan senior
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- NAKO Detail -->
                                <div id="nako" class="program-detail">
                                    <div class="bg-white border rounded-4 shadow-sm p-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-warning bg-opacity-10 rounded-circle p-3 me-3">
                                                <i class="fas fa-graduation-cap text-warning fs-4"></i>
                                            </div>
                                            <div>
                                                <h4 class="fw-semibold mb-1">NAKO (Inaugurasi)</h4>
                                                <span class="badge bg-warning bg-opacity-10 text-warning">Upacara
                                                    Peresmian</span>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-3">
                                            Puncak acara POSITRON berupa upacara peresmian mahasiswa baru sebagai bagian
                                            resmi dari
                                            keluarga besar Departemen Teknik Elektro dan Informatika UM. Moment bersejarah
                                            yang
                                            menandai dimulainya perjalanan akademik sebagai mahasiswa TEI.
                                        </p>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="small text-muted">
                                                    <i class="fas fa-medal me-2"></i>Moment bersejarah sebagai mahasiswa
                                                    TEI UM
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="small text-muted">
                                                    <i class="fas fa-camera me-2"></i>Dokumentasi resmi
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const navItems = document.querySelectorAll('.program-nav-item');
                        const programDetails = document.querySelectorAll('.program-detail');
                        const carouselItems = document.querySelectorAll('.carousel-item');
                        const carousel = new bootstrap.Carousel(document.getElementById('mainCarousel'));

                        // Function to switch program
                        function switchProgram(target) {
                            // Update navigation active state
                            navItems.forEach(item => item.classList.remove('active'));
                            document.querySelector(`[data-target="${target}"]`).classList.add('active');

                            // Update program details
                            programDetails.forEach(detail => detail.classList.remove('active'));
                            document.getElementById(target).classList.add('active');

                            // Update carousel to show relevant slides
                            updateCarousel(target);
                        }

                        // Function to update carousel
                        function updateCarousel(programType) {
                            const relevantSlides = Array.from(carouselItems).filter(item =>
                                item.getAttribute('data-program') === programType
                            );

                            // Hide all slides
                            carouselItems.forEach(item => item.classList.remove('active'));

                            // Show first relevant slide
                            if (relevantSlides.length > 0) {
                                relevantSlides[0].classList.add('active');

                                // Get index of the first relevant slide
                                const slideIndex = Array.from(carouselItems).indexOf(relevantSlides[0]);
                                carousel.to(slideIndex);
                            }
                        }

                        // Add click event listeners to navigation items
                        navItems.forEach(item => {
                            item.addEventListener('click', function(e) {
                                e.preventDefault();
                                const target = this.getAttribute('data-target');
                                switchProgram(target);
                            });
                        });

                        // Auto-switch program based on carousel slide
                        document.getElementById('mainCarousel').addEventListener('slid.bs.carousel', function(event) {
                            const activeSlide = event.relatedTarget;
                            const programType = activeSlide.getAttribute('data-program');

                            // Update navigation and details without triggering carousel change
                            navItems.forEach(item => item.classList.remove('active'));
                            document.querySelector(`[data-target="${programType}"]`).classList.add('active');

                            programDetails.forEach(detail => detail.classList.remove('active'));
                            document.getElementById(programType).classList.add('active');
                        });

                        // Initialize with first program
                        switchProgram('forum-maba');
                    });
                </script>

        @endsection
