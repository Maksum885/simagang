<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    // Fungsi untuk mengambil data
    public function getData()
    {
        $dataMagang = [
            ['nama' => 'Magang A', 'lokasi' => 'Jakarta', 'durasi' => '8 Bulan'],
            ['nama' => 'Magang B', 'lokasi' => 'Surabaya', 'durasi' => '6 Bulan'],
            ['nama' => 'Magang C', 'lokasi' => 'Batam', 'durasi' => '4 Bulan']
        ];

        return $dataMagang;
    }

    // Fungsi untuk menampilkan view dan mengirim data
    public function landingpage()
    {
        $data = $this->getData();
        return view('landing_page', compact('data'));
    }
}
