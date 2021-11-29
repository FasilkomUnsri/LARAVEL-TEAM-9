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
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/', 'ProductController@home')->name('home');
});


Route::get('/product', [ProductController::class, 'product']);

Route::get('/contact', function () {
    return view('tampilan/contact');
});

Route::get('detailproduk/{id}', [DetailprodukController::class, 'index']);

Route::resource('Tproduk', ProdukController::class);