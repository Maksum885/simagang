<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function beranda()
    {
        return view('pages.admin.beranda');
    }

    public function kelolaPengguna()
    {
        return view('pages.admin.kelola_pengguna');
    }
    public function dataPengguna1()
    {
        return view('pages.admin.data_pp');
    }
    public function dataPengguna2()
    {
        return view('pages.admin.data_pk');
    }
    public function dataPengguna3()
    {
        return view('pages.admin.data_mhs');
    }
}
