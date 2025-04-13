<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/welcome', function () {
    return 'Welcome to Laravel';
});
Route::get('/user/{id}', function ($id) {
    return 'User ID: ' . $id;
});
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Admin Dashboard";
    });
    Route::get('/users', function () {
        return "Admin Users";
    });
});
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
//     return view('list_barang', compact('id', 'nama'));
// });
Route::get('/listbarang', [ListBarangController::class, 'tampilkan']);

Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/landingpage', [LandingPageController::class, 'landingpage']);
Route::get('/login', [LoginController::class, 'login']);
