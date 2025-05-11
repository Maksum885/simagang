<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PkController extends Controller
{
    public function beranda()
    {
        return view('pk.beranda');
    }
    public function Peserta()
    {
        return view('pk.peserta');
    }
    public function absensi()
    {
        return view('pk.absensi');
    }   
    public function laporan()
    {
        return view('pk.laporan');
    }           
    public function nilai()
    {
        return view('pk.nilai');
    }
    
}
