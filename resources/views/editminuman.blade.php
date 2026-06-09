@extends('template2')
@section('judul_halaman', 'Data Minuman')
@section('konten')

    <br>
    <a href="/minuman" class="btn btn-secondary mb-4">Kembali</a>

    @foreach ($minuman as $m)
        <div class="card">
            <div class="card-header">
                Form Edit Data Minuman
            </div>

            <div class="card-body">
                <form action="/minuman/update" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="id" value="{{ $m->kodeminuman }}">

                    <div class="row mb-3">
                        <label for="merkminuman" class="col-sm-2 col-form-label">Merk Minuman</label>
                        <div class="col-sm-10">
                            <input type="text" name="merkminuman" id="merkminuman" class="form-control" required
                                value="{{ $m->merkminuman }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="stockminuman" class="col-sm-2 col-form-label">Stock</label>
                        <div class="col-sm-10">
                            <input type="number" name="stockminuman" id="stockminuman" class="form-control" required
                                value="{{ $m->stockminuman }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tersedia" class="col-sm-2 col-form-label">Status Ketersediaan</label>
                        <div class="col-sm-10">
                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input" type="checkbox" role="switch" id="tersedia"
                                    name="tersedia" value="Y" {{ $m->tersedia == 'Y' ? 'checked' : '' }}>
                                <label class="form-check-label" for="tersedia">Tersedia untuk Dijual</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Simpan Perubahan" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

@endsection
