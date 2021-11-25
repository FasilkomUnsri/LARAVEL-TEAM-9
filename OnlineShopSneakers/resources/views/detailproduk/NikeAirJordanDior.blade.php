{{-- halaman ini mengambil dari rio/navbar --}}
@extends('layouts/navbar')
@section('bro')
    {{-- singel product detail --}}
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="img/retro1.jpg" width="100%" id="productimg">

            </div>
            <div class="col-2">
                <p>Sneakers</p>
                <h1>NIKE AIR JORDAN 1 DIOR</h1>
                <h4>Rp 190.999.999</h4>
                <select>
                    <option>Select Size</option>
                    <option>EU 40</option>
                    <option>EU 41.5</option>
                    <option>EU 42</option>
                    <option>EU 43</option>
                    <option>EU 44 </option>
                </select>
                <input type="Number" value="1">
                <a href="contact.html" class="btn">BUY NOW </a>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>The Dior x Air Jordan 1 High is arguably the most desirable sneaker collaboration of 2020. Produced in Italy in extremely limited quantities, Dior’s first ever collaboration with Jordan Brand featured a multilayered release rollout that only stoked demand for one of the most sought after Jordan 1s in recent history. Employing a minimal appearance that parallels the original “White/Grey” Jordan 1 from 1985, the Dior variation features supple Dior grey leather overlays on the forefoot, eyelets, collar, and heel. White leather dots the mid-panel and perforated toe. An embroidered monogram Swoosh appears on either side and an “Air Dior” Wings logo can be found on the collar. A white rubber midsole and icy blue translucent outsole tie together the look of the understated Dior x Air Jordan 1. The Dior x Air Jordan 1 High was released on June 25, 2020.</p>
            </div>
        </div>
    </div>
{{-- title --}}
<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p><a href="/product">View More</a></p>
    </div>
</div>

{{-- products --}}
<div class="small-container">
       

    <div class="row">
        <div class="col-4">
            <a href="aif force.html"><img src="images/levi1.jpg" ></a>
            <h4>AIR FORCE 1 X "Levi's Denim" LOW</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                
            </div>
            <P>RP41,499,000</P>
        </div>
        <div class="col-4">
            <a href="produk air dior .html"><img src="images/retro1.jpg" ></a>
            <h4>NIKE AIR JORDAN DIOR HIGH RETRO</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                
            </div>
            <P>RP 190.999.999</P>
        </div>
        <div class="col-4">
            <a href="product kayrie.html"><img src="images/f1.jpg" ></a>
            <h4>AIR FORCE 1 LOW SUPREME "Krink"</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                
            </div>
            <P>RP 19.979.000/P>
        </div>
        <div class="col-4">
            <a href="sean.html"><img src="images/m1.jpg" ></a>
            <h4>AIR FORCE 1 LOW SUPREME "Krink" </h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                
            </div>
            <P>RP 19.979.000</P>
        </div>
    </div>
  
</div>
@endsection
