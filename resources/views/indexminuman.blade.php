@extends('template2')
@section('judul_halaman', 'Data Minuman')
@section('konten')
    <p>
        <br />
        <a href="/minuman/tambah" class="btn btn-primary">Tambah Minuman Baru</a>
    </p>

    <p>Cari Data Minuman:</p>
    <form action="/minuman/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Minuman .." class="form-control">
        <br>
        <input type="submit" value="CARI" class="btn btn-success">
    </form>

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Merk Minuman</th>
            <th>Stock</th>
            <th>Ketersediaan</th>
            <th>Opsi</th>
        </tr>
        @foreach ($minuman as $m)
            <tr>
                <td>{{ $m->merkminuman }}</td>
                <td>{{ $m->stockminuman }}</td>
                <td>
                    @if ($m -> tersedia == 'Y')
                        Tersedia
                    @else
                        Tidak Tersedia
                    @endif
                </td>
                <td>
                    <a href="/minuman/edit/{{ $m->kodeminuman }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/minuman/hapus/{{ $m->kodeminuman }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $minuman->links() }}
@endsection
