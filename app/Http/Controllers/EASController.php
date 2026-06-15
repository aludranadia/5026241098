<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EASController extends Controller
{
    public function index()
    {
        // menggunakan get karena disuruh menampilkan semua records data tanpa pagination
        $nilai_peserta = DB::table('nilai_peserta')->get();
        return view('eas.index', ['nilai_peserta' => $nilai_peserta]);
    }

    public function tambah()
    {
        // memakai namafolder.namafile karena berada di dalam folder eas
        return view('eas.tambah');
    }

    // method untuk insert data ke table eas
    public function store(Request $request)
    {
        // insert data ke table nilai_peserta
        DB::table('nilai_peserta')->insert([
            // sudah disesuaikan dengan penamaan 'name' di form dan nama kolom di database
            'ID' => $request->ID,
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek
        ]);
        // menjawab pertanyaan ketika sudah berhasil menambahkan data, maka akan dikembalikan ke halaman index
        return redirect()->route('eas.index');
    }
}
