<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $title = "Dashboard SIMAGANG";
        return view('dashboard', compact('title'));
    }
}
