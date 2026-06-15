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
        {{-- untuk logika warna baris sesuai kondisi lulus atau gagal, saya menggunakan perhitungan ratarata karena hasilnya sama --}}
            @php
                $ratarata = ($np->nilaiteori + $np->nilaipraktek) / 2;
                $rowClass = '';
                if ($ratarata < 75) {
                    $rowClass = 'text-white table-danger'; // mohon maaf bapak, saya mencoba menggunakan text-white agar tulisannya berubah menjadi warna putih, tetapi entah kenapa di halaman web-nya tidak mau berubah
                } elseif ($ratarata >= 75) {
                    $rowClass = 'text-white table-success'; // begitu pula dengan text-white yang ini tidak dapat berfungsi sebagaimana mestinya
                }
            @endphp
            <tr class="{{ $rowClass }}"> {{-- memakai class rowClass agar menerapkan logika pewarnaan yang di atas --}}
                <td>{{ $np->ID }}</td>
                <td>{{ $np->nopeserta }}</td>
                <td>{{ $np->nilaiteori }}</td>
                <td>{{ $np->nilaipraktek }}</td>
                <td>{{ $ratarata }}</td>
                <td>
                    {{-- ini untuk menjawab pertanyaan konversi nilai rata-rata --}}
                    @if ($ratarata >= 75)
                        Lulus
                    @else
                        Gagal
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection
