{{-- halaman ini mengambil dari layouts/navbar --}}
@extends('layouts/navbar')
@section('bro')
<main>
    <div class="small-container">
        
        <div class="row-2">
            <div class="col-2">
                    <a href="{{ url('Tproduk') }}" class="btn">Tambah Produk  &#8594; </a>
            </div>
        </div>
        <div class="row">
            @forelse ($rio as $produk)
                 <div class="col-4">
                <a href="Product-detail.html"><img src="{{ Storage::url('public/produks/').$produk->gambar }}" ></a>
                <a href="Product-detail.html"><h4><td>{{ $produk->judul }}</td></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>
                <P>{!! $produk->harga !!}</P>
            </div>
                
            
            @empty
                
            @endforelse
        </div>
        {{ $rio->links() }}
    
    </div>
@endsection
</main>