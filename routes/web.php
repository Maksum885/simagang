<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PkController;

// Halaman dashboard admin
Route::get('/admin/beranda', [AdminController::class, 'beranda'])->name('admin.beranda');

// Halaman kelola pengguna admin
Route::get('/admin/kelola_pengguna', [AdminController::class, 'kelolaPengguna'])->name('admin.kelola_pengguna');
Route::get('/admin/data_pp', [AdminController::class, 'dataPengguna1'])->name('admin.data_pp');
Route::get('/admin/data_pk', [AdminController::class, 'dataPengguna2'])->name('admin.data_pk');
Route::get('/admin/data_mhs', [AdminController::class, 'dataPengguna3'])->name('admin.data_mhs');

// Halaman dashboard PK
Route::get('/pk/beranda', [PkController::class, 'beranda'])->name('pk.beranda');
Route::get('/pk/peserta', [PkController::class, 'Peserta'])->name('pk.peserta');
Route::get('/pk/absensi', [PkController::class, 'absensi'])->name('pk.absensi');
Route::get('/pk/laporan', [PkController::class, 'laporan'])->name('pk.laporan');
Route::get('/pk/nilai', [PkController::class, 'nilai'])->name('pk.nilai');
