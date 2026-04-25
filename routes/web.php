<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MenuController;

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
