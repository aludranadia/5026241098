<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        // mengirim data keranjangbelanja ke view index
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        return view('keranjangbelanja.index', ['keranjangbelanja' => $keranjangbelanja]);
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('keranjangbelanja.tambah');
    }

    // method untuk insert data ke table keranjangbelanja
    public function store(Request $request)
    {
        // insert data ke table keranjangbelanja
        DB::table('keranjangbelanja')->insert([
            'ID' => $request->ID,
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);
        // alihkan halaman ke halaman keranjangbelanja
        return redirect()->route('keranjangbelanja.index');
    }

    public function hapus($id)
    {
        // menghapus data keranjangbelanja berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // alihkan halaman ke halaman keranjangbelanja
        return redirect()->route('keranjangbelanja.index');
    }
}
