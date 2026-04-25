<!-- Aludra Nadia Salwa | 5026241098 | PWEB (B) -->
<!-- Latihan Pembuatan Layout dengan Grid System | Soal Perempuan -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CCWS ITS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fbfbfd;
        }

        .header {
            font-weight: 510;
            color: #091133;
        }

        .text {
            color: #99a3c8;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .gambar {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            object-position: center center;
        }

        .feature-icon {
            width: 35px;
            height: 35px;
            margin-bottom: 12px;
        }

        .feature-title {
            font-weight: 500;
            font-size: 1.05rem;
            color: #1b2241;
        }

        .feature-text {
            font-size: 0.85rem;
            color: #979ea4;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <div class="row no-gutters vh-100 align-items-center">

            <!-- membagi kolom (4 dan 8) agar terbagi menjadi 2 untuk grid utama -->

            <!-- grid utama kiri (4) -->
            <div class="col-4 p-0 d-none d-md-block">
                <div class="row no-gutters">
                    <!-- bagian kiri full dipenuhi oleh gambar -->
                    <div class="col-12 p-0">
                        <img src="image/Image.png" class="gambar" alt="Gambar Utama">
                    </div>
                </div>
            </div>

            <!-- grid utama kanan (8) -->
            <div class="col-8">
                <div class="row m-4">
                    <!-- agar memberi space kosong di grid utama kanan -->
                    <div class="col-1"></div>

                    <!-- isi konten di grid utama kanan -->
                    <div class="col-10">

                        <!-- membuat baris baru untuk header -->
                        <div class="row">
                            <div class="col-12">
                                <h2 class="header mb-3">Fokus, Nyaman & Produktif</h2>
                            </div>
                        </div>

                        <!-- membuat baris baru untuk paragraf di bawah header -->
                        <div class="row">
                            <div class="col-12">
                                <p class="text mb-2">
                                    Creative Co-Working Space (CCWS) ITS merupakan ruang kerja dan belajar bersama yang
                                    dirancang khusus untuk meningkatkan produktivitas mahasiswa di Institut Teknologi
                                    Sepuluh Nopember.
                                </p>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-12">
                                <p class="text m-0">
                                    Fasilitas ini didukung penuh oleh pihak kampus guna menciptakan suasana kolaboratif
                                    dan nyaman untuk belajar serta berdiskusi.
                                </p>
                            </div>
                        </div>

                        <!-- membuat baris baru untuk feature (sisi atas) -->
                        <div class="row">
                            <!-- membagi kolom (6 dan 6) agar terbagi menjadi 2 -->
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="image/icon/lokasi.png" class="feature-icon" alt="Icon">
                                        <h5 class="feature-title">Lokasi Strategis</h5>
                                        <p class="feature-text">Hadir di berbagai titik kampus, seperti Lantai 1
                                            Perpustakaan dan area IKOMA.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="image/icon/fasilitas.png" class="feature-icon" alt="Icon">
                                        <h5 class="feature-title">Fasilitas Lengkap</h5>
                                        <p class="feature-text">Menyediakan meja-kursi dan lesehan, akses internet
                                            cepat, hingga private room.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- membuat baris baru untuk feature (sisi bawah) -->
                        <div class="row mt-4">
                            <!-- membagi kolom (6 dan 6) agar terbagi menjadi 2 -->
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="image/icon/cozy.png" class="feature-icon" alt="Icon">
                                        <h5 class="feature-title">Suasana Cozy</h5>
                                        <p class="feature-text">Menawarkan suasana nyaman ala kafe membuat waktu belajar
                                            atau berdiskusi tidak membosankan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="image/icon/jam.png" class="feature-icon" alt="Icon">
                                        <h5 class="feature-title">Akses Fleksibel</h5>
                                        <p class="feature-text">Buka pada hari kerja dengan jam operasional yang
                                            panjang, sesuai kebutuhan mahasiswa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- agar memberi space kosong di grid utama kanan -->
                    <div class="col-1"></div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>