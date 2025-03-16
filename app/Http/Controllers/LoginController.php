<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $title = "Silahkan Login";
        return view('login', compact('title'));
    }
}