@extends('template2')
@section('judul_halaman', 'Kode Soal nilai_peserta')
@section('konten')
    <p>
        <br />
        {{-- tombol ini tidak disebutkan bagaimana peletakannya dalam soal, sehingga saya mengikuti bentuk penugasan lainnya yang menaruhnya di kiri atas --}}
        <a href="{{ route('eas.tambah') }}" class="btn btn-primary">Tambah Data</a>
    </p>

    <table class="table table-hover"> {{-- pada soal tidak disebutkan untuk membuatnya terdapat hover, tetapi untuk memudahkan penglihatan, maka saya izin menambahkan nggih bapak--}}
        <tr>
            {{-- struktru kolom sudah disesuaikan dengan output tabel yang diminta di soal --}}
            <th>ID</th>
            <th>No Peserta</th>
            <th>Nilai Teori</th>
            <th>Nilai Praktik</th>
            <th>Rata-Rata</th>
            <th>Status</th>
        </tr>
        @foreach ($nilai_peserta as $np)
        {{-- izin memakai operator ratarata di awal nggih bapak karena akan digunakan berulang di dalam tabelnya (kolom ratarata dan kolom status) --}}
            @php
                $ratarata = ($np->nilaiteori + $np->nilaipraktek) / 2;
            @endphp
            <tr>
                <td>{{ $np->ID }}</td>
                <td>{{ $np->nopeserta }}</td>
                <td>{{ $np->nilaiteori }}</td>
                <td>{{ $np->nilaipraktek }}</td>
                <td>{{ $ratarata }}</td>
                <td>
                    {{-- ini untuk menjawab pertanyaan konversi nilai rata-rata serta penambahan warna dari lulus atau tidak lulus--}}
                    @if ($ratarata >= 75)
                        <div style="background-color: green; color: white;">Lulus</div>
                    @else
                        <div style="background-color: red; color: white;">Gagal</div>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection
