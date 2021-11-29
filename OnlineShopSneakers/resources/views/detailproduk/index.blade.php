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
                <p>The Dior x Air Jordan 1 High is arguably the most desirable sneaker collaboration of 2020. Produced in Italy in extremely limited quantities, Dior’s first ever collaboration with Jordan Brand featured a multilayered release rollout that only stoked demand for one of the most sought after Jordan 1s in recent history. Employing a minimal appearance that parallels the original “White/Grey” Jordan 1 from 1985, the Dior variation features supple Dior grey leather overlays on the forefoot, eyelets, collar, and heel. White leather dots the mid-panel and perforated toe. An embroidered monogram Swoosh appears on either side and an “Air Dior” Wings logo can be found on the collar. A white rubber midsole and icy blue translucent outsole tie together the look of the understated Dior x Air Jordan 1. The Dior x Air Jordan 1 High was released on June 25, 2020.</p>
            </div>
        </div>
    </div>
@endsection
