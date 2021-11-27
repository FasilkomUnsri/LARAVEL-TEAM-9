<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DetailprodukController extends Controller
{
    public function NikeAirJordanDior()
    {
        $title = 'NikeAirJordanDior';
        $dp = Produk::find(1);
        return view('detailproduk.NikeAirJordanDior', compact('title'));

    }
}
