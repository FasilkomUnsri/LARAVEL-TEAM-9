<?php

use App\Http\Controllers\DetailprodukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class,'home']);

Route::get('/product', [ProductController::class, 'product']);

Route::get('/contact', function () {
    return view('tampilan/contact');
});

Route::get('detailproduk.NikeAirJordanDior', [DetailprodukController::class, '']);

Route::resource('Tproduk', ProdukController::class);