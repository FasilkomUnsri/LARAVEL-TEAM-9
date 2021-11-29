<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DetailprodukController extends Controller
{
    public function index($id)
    {
        $title = "Sneakers";
        $alfido = Produk::where('id', $id)->first();
        return view('detailproduk.index', compact('alfido','title'));

    }
}
