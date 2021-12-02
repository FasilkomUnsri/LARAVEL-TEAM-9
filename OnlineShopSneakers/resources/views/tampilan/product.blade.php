{{-- halaman ini mengambil dari layouts/navbar --}}
@extends('layouts/topbar')
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
                <a href="{{ url('detailproduk') }}/{{ $produk->id }}"><img src="{{ Storage::url('public/produks/').$produk->gambar }}" ></a>
                <a href="{{ url('detailproduk') }}/{{ $produk->id }}"><h4><td>{{ $produk->judul }}</td></h4>
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