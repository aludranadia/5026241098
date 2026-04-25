{{-- Tugas Pertemuan 8 - Pengaplikasian Laravel | Aludra Nadia Salwa | 5026241098 | PWEB (B) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu Utama | Aludra Nadia Salwa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light py-4">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="font-weight-bold text-dark">Pertemuan 1 - 6 | Aludra Nadia Salwa</h2>
        </div>

        <div class="row">

            {{-- Menggunakan Card sebagai Tampilan --}}
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">Index</h5>
                        <p class="card-text text-muted small">Tampilan utama dari aludranadia.github.io</p>
                        <a href="{{ url('/idx') }}" class="btn btn-outline-primary btn-block mt-auto">Buka Halaman</a> {{-- Penamaan 'idx' harus konsisten dengan Route dan Controller, begitu pula untuk halaman lainnya --}}
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">Contoh</h5>
                        <p class="card-text text-muted small">Tugas dari pertemuan 3</p>
                        <a href="{{ url('/example') }}" class="btn btn-outline-primary btn-block mt-auto">Buka Halaman</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">Intro</h5>
                        <p class="card-text text-muted small">File pembelajaran dari pertemuan 2</p>
                        <a href="{{ url('/int') }}" class="btn btn-outline-primary btn-block mt-auto">Buka Halaman</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">Linktree</h5>
                        <p class="card-text text-muted small">Tugas dari pertemuan 5</p>
                        <a href="{{ url('/linktr') }}" class="btn btn-outline-primary btn-block mt-auto">Buka Halaman</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">News & News 1</h5>
                        <p class="card-text text-muted small">File pembelajaran dari pertemuan 2</p>
                        <div class="row no-gutters mt-auto">
                            <div class="col-6 pr-1"><a href="{{ url('/berita1') }}" class="btn btn-sm btn-outline-primary btn-block">News</a></div>
                            <div class="col-6 pl-1"><a href="{{ url('/berita2') }}" class="btn btn-sm btn-outline-primary btn-block">News 1</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">Pertemuan 4</h5>
                        <p class="card-text text-muted small">File pembelajaran dari pertemuan 4</p>
                        <a href="{{ url('/pert4') }}" class="btn btn-outline-primary btn-block mt-auto">Buka Halaman</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">Pertemuan 5</h5>
                        <p class="card-text text-muted small">File pembelajaran dari pertemuan 5</p>
                        <a href="{{ url('/pert5') }}" class="btn btn-outline-primary btn-block mt-auto">Buka Halaman</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">Responsive</h5>
                        <p class="card-text text-muted small">File pembelajaran dari pertemuan 3</p>
                        <a href="{{ url('/respons') }}" class="btn btn-outline-primary btn-block mt-auto">Buka Halaman</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">Template</h5>
                        <p class="card-text text-muted small">File Template untuk penggunaan Bootstrap 4</p>
                        <a href="{{ url('/temp') }}" class="btn btn-outline-primary btn-block mt-auto">Buka Halaman</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
