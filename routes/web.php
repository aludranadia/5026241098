<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\MinumanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

//Route untuk Menu Pertemuan 1 - 6
Route::get('menu', [MenuController::class, 'index']); //Route untuk menampilkan halaman menu utama yang berisi kumpulan link tugas pertemuan 1 - 6
Route::get('idx', [MenuController::class, 'idx']); //Direct ke MenuController. Method idx untuk menampilkan halaman index, begitu pula untuk halaman lainnya
Route::get('example', [MenuController::class, 'example']);
Route::get('int', [MenuController::class, 'int']);
Route::get('linktr', [MenuController::class, 'linktr']);
Route::get('berita1', [MenuController::class, 'berita1']);
Route::get('berita2', [MenuController::class, 'berita2']);
Route::get('pert4', [MenuController::class, 'pert4']);
Route::get('pert5', [MenuController::class, 'pert5']);
Route::get('respons', [MenuController::class, 'respons']);
Route::get('temp', [MenuController::class, 'temp']);

Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']); //Diganti pegawailama agar tidak crash dengan pegawai
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//routes CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//routes CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/minuman', [MinumanController::class, 'index']);
Route::get('/minuman/tambah', [MinumanController::class, 'tambah']);
Route::post('/minuman/store', [MinumanController::class, 'store']);
Route::get('/minuman/edit/{id}', [MinumanController::class, 'edit']);
Route::post('/minuman/update', [MinumanController::class, 'update']);
Route::get('/minuman/hapus/{id}', [MinumanController::class, 'hapus']);
Route::get('/minuman/cari', [MinumanController::class, 'cari']);
