<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::latest()->paginate(20);
        return view('Tproduk.index', compact('produks'));
    }

    public function create()
    {
        return view('Tproduk.create');
    }

        public function store(Request $request)
    {
        $this->validate($request, [
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
            'judul'     => 'required',
            'isi'   => 'required',
            'harga'   => 'required'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/produks', $gambar->hashName());

        $produk = Produk::create([
            'gambar'     => $gambar->hashName(),
            'judul'     => $request->judul,
            'isi'   => $request->isi,
            'harga'   => $request->harga
        ]);

        if($produk){
            return redirect()->route('Tproduk.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('Tproduk.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

        public function edit($id)
    {
        $produk = Produk::find($id);
        return view('Tproduk.edit', compact('produk'));
    }
    
        public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'harga'   => 'required',
            'isi'   => 'required',
            
        ]);
    
        $produk = Produk::findOrFail($id);
    
        if($request->file('gambar') == "") {
    
            $produk->update([
                'judul'     => $request->judul,
                'harga'   => $request->harga,
                'isi'   => $request->isi
            ]);
    
        } else {
    
            Storage::disk('local')->delete('public/produks/'.$produk->gambar);
    
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/produks', $gambar->hashName());
    
            $produk->update([
                'gambar'     => $gambar->hashName(),
                'judul'     => $request->judul,
                'harga'   => $request->harga,
                'isi'   => $request->isi
            ]);
    
        }
        if($produk){
            return redirect()->route('Tproduk.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('Tproduk.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        Storage::disk('local')->delete('public/produks/'.$produk->gambar);
        $produk->delete();

        if($produk){
            return redirect()->route('Tproduk.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('Tproduk.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
