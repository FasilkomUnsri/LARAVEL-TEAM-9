<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $title = 'All Produk';
        $rio = Produk::latest()->paginate(20);
        return view('tampilan.product', compact('rio',['title']));
    }
}
