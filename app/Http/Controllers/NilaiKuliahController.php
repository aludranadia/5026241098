<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaikuliahController extends Controller
{
    //
    public function index()
    {
        // mengirim data nilaikuliah ke view index
        $nilaikuliah = DB::table('nilaikuliah')->get();
        return view('indexnilaikuliah', ['nilaikuliah' => $nilaikuliah]);
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('tambahnilaikuliah');
    }

    // method untuk insert data ke table nilaikuliah
    public function store(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);
        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah');
    }
}
