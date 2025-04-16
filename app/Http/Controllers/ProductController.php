<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $data = [
            ['id' => 1, 'produk' => 'Laptop Asus'],
            ['id' => 2, 'produk' => 'Laptop Lenovo'],
            ['id' => 3, 'produk' => 'Laptop Acer']
        ];

        return view('list_product', compact('data'));
    }
}
