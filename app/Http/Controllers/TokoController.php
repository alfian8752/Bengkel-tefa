<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    function index() {
        return view('toko',[
            'title' => 'Toko',
            'dProduk' => Produk::all()
        ]);
    }

    function sort(Request $request) {
        dd($request);
    }
}
