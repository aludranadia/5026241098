@extends('template2')
@section('judul_halaman', 'Data Keranjang Belanja')
@section('konten')
    <p>
        <br />
        <a href="{{ route('keranjangbelanja.tambah') }}" class="btn btn-primary">Beli</a>
    </p>

    <table class="table table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $kb)
            <tr>
                <td>{{ $kb->ID }}</td>
                <td>{{ $kb->KodeBarang }}</td>
                <td>{{ $kb->Jumlah }}</td>
                <td>{{ number_format($kb->Harga, 0, ',', '.') }}</td>
                <td>
                    {{ number_format($kb->Jumlah * $kb->Harga, 0, ',', '.') }}
                </td>
                <td>
                    <a href="{{ route('keranjangbelanja.hapus', $kb->ID) }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
