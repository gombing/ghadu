<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index ()
    {
        $data_produk = \App\Produk::all();
        return view('produk.index',['data_produk'=> $data_produk]);
    }
}
