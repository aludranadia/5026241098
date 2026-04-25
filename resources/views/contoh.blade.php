<!-- Aludra Nadia Salwa | 5026241098 | PWEB (B) -->
<!-- IMPLEMENTASI BS4 NAVBAR -->
<!DOCTYPE html>
<html lang="id">

<head>
    <title>Departemen Sistem Informasi ITS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            padding-top: 76px;
            background-color: #f8f9fa;
        }

        .bg-its-blue {
            background-color: #013880;
        }

        .text-its-yellow {
            color: #FFD700;
        }

        .btn-its-yellow {
            background-color: #FFD700;
            color: #013880;
            font-weight: 600;
            border: none;
        }

        .btn-its-yellow:hover {
            background-color: #e6c200;
            color: #013880;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
        }

        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .active>.nav-link {
            color: #FFD700;
        }

        .hero-section {
            background-color: #ffffff;
            padding: 60px 0;
            border-bottom: 5px solid #FFD700;
        }

        .content-section {
            padding: 50px 0;
        }
    </style>
</head>

<body>

    <!-- memakai fixed-top agar navbar stay di bagian atas selagi pengguna scroll halamannya -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-its-blue fixed-top shadow">
        <div class="container-fluid px-4">

            <!-- menambahkan logo/brand sebagai identitas halaman -->
            <a class="navbar-brand font-weight-bold d-flex align-items-center" href="#">
                <img src="https://www.its.ac.id/si/wp-content/uploads/sites/45/2018/08/7693715_orig-white.png"
                    alt="Logo" style="width: 40px; height: 40px; margin-right: 12px;">
                <span>DSI <span class="text-its-yellow">ITS</span></span>
            </a>

            <!-- membuat navbar agar bisa collapse ketika ukuran layar menjadi kecil -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dsiNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="dsiNavbar">
                <ul class="navbar-nav mr-auto">
                    <!-- .active agar menyoroti item sebagai the current link -->
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>

                    <!-- implementasi dropdown dalam navbar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="prodiDropdown" role="button"
                            data-toggle="dropdown">
                            Program Studi
                        </a>
                        <div class="dropdown-menu shadow-sm">
                            <a class="dropdown-item" href="#">S1 Sistem Informasi</a>
                            <a class="dropdown-item" href="#">S1 IUP Sistem Informasi</a>
                            <a class="dropdown-item" href="#">S1 Inovasi Digital</a>
                            <a class="dropdown-item" href="#">S2 Sistem Informasi</a>
                            <a class="dropdown-item" href="#">S3 Sistem Informasi</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="labDropdown" role="button"
                            data-toggle="dropdown">
                            Laboratorium
                        </a>
                        <div class="dropdown-menu shadow-sm">
                            <a class="dropdown-item" href="#">Infrastruktur dan Keamanan Teknologi Informasi</a>
                            <a class="dropdown-item" href="#">Manajemen Sistem Informasi</a>
                            <a class="dropdown-item" href="#">Rekayasa Data dan Inteligensi Bisnis</a>
                            <a class="dropdown-item" href="#">Akuisisi Data dan Diseminasi Informasi</a>
                            <a class="dropdown-item" href="#">Sistem Enterprise</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Hubungi Kami</a>
                    </li>
                </ul>

                <!-- implementasi navbar forms and buttons sebagai fitur pencarian-->
                <ul class="navbar-nav ml-auto align-items-center">
                    <form class="form-inline my-2 my-lg-0 mr-3">
                        <input class="form-control form-control-sm mr-sm-2" type="search"
                            placeholder="Cari informasi..">
                        <button class="btn btn-outline-light btn-sm my-2 my-sm-0" type="submit">Cari</button>
                    </form>

                    <!-- implementasi dropdown untuk profil -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="profilDropdown" role="button"
                            data-toggle="dropdown">
                            Profil
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow-sm">
                            <a class="dropdown-item" href="#">Akun Mahasiswa</a>
                            <a class="dropdown-item" href="#">Pengaturan</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#">Keluar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- tambahan text agar halaman dapat di-scroll sehingga mengetahui peran fixed-top navbar -->
    <div class="hero-section text-center shadow-sm">
        <div class="container">
            <h1 class="display-4 font-weight-bold" style="color: #013880;">Menjembatani Bisnis <br> dan Teknologi</h1>
            <p class="lead mt-3 text-muted">Selamat datang di Departemen Sistem Informasi, Institut Teknologi Sepuluh
                Nopember (ITS). Kami berkomitmen mencetak inovator digital yang siap menghadapi tantangan global.</p>
            <button class="btn btn-its-yellow btn-lg mt-3 px-5 shadow-sm">Pelajari Lebih Lanjut</button>
        </div>
    </div>

    <div class="container content-section">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-justify">
                <h3 class="font-weight-bold mb-4" style="color: #013880;">Tentang Departemen Sistem Informasi</h3>

                <p>Perkembangan teknologi yang masif menuntut adanya sinergi yang kuat antara kebutuhan proses bisnis
                    institusi dan implementasi teknologi informasi. Departemen Sistem Informasi ITS hadir sebagai
                    jawaban atas tantangan tersebut. Kami berfokus pada perancangan, pengembangan, dan manajemen sistem
                    informasi yang efektif untuk berbagai skala organisasi.</p>

                <p>Dalam kurikulum kami, mahasiswa tidak hanya dibekali dengan kemampuan teknis seperti pemrograman
                    dasar hingga tingkat lanjut, tetapi juga kemampuan manajerial dan analisis bisnis. Hal ini
                    memungkinkan lulusan kami untuk tidak sekadar menjadi programmer, melainkan analis sistem, ilmuwan
                    data, perancang UI/UX, hingga arsitek jaringan yang memahami arah strategis suatu perusahaan.</p>

                <h4 class="font-weight-bold mt-5 mb-3" style="color: #013880;">Ekosistem Riset dan Inovasi</h4>

                <p>Melalui lima laboratorium utama yang kami miliki, mahasiswa diberikan kebebasan untuk mengeksplorasi
                    minat riset mereka secara mendalam. Mulai dari mengamankan infrastruktur jaringan masa depan,
                    menganalisis big data untuk kecerdasan bisnis, hingga merekayasa sistem skala enterprise yang
                    terintegrasi. Lingkungan akademik yang kolaboratif mendorong terciptanya karya-karya inovatif yang
                    seringkali menjuarai berbagai kompetisi bergengsi tingkat nasional maupun internasional.</p>

                <p>Selain fokus pada akademis, kami juga sangat mendukung kegiatan mahasiswa melalui himpunan dan
                    berbagai acara kepanitiaan. Pengalaman berorganisasi ini sangat krusial untuk melatih soft skill
                    seperti kepemimpinan, komunikasi, dan manajemen acara, yang semuanya bermuara pada kesiapan mental
                    dan keterampilan saat terjun ke dunia profesional sesungguhnya.</p>
                <div style="height: 200px;"></div>
            </div>
        </div>
    </div>
</body>
</html>
