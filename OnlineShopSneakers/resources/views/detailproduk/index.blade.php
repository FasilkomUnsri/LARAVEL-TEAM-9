{{-- halaman ini mengambil dari rio/navbar --}}
@extends('layouts/detailp')
@section('dproduk')
    {{-- singel product detail --}}
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="{{ Storage::url('public/produks/').$alfido->gambar }}" width="100%" id="productimg">

            </div>
            <div class="col-2">
                <p>Sneakers</p>
                <h1>{{ $alfido->judul }}</h1>
                <h4>{!! $alfido->harga !!}</h4>
                <select>
                    <option>Select Size</option>
                    <option>EU 40</option>
                    <option>EU 41.5</option>
                    <option>EU 42</option>
                    <option>EU 43</option>
                    <option>EU 44 </option>
                </select>
                <input type="Number" value="1">
                <a href="/contact" class="btn">BUY NOW </a>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>{!! $alfido->isi !!}</p>
            </div>
        </div>
    </div>
@endsection
