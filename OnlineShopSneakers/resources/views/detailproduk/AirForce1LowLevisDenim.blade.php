{{-- halaman ini mengambil dari layouts/navbar --}}
@extends('layouts/navbar')
@section('bro')
    <!-------------- singel product detail-------------->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
               <img src="images/levi1.jpg"width="100%" id="productimg">

            </div>
            <div class="col-2">
                <p>Home / T-Shirt</p>
                <h1>AIR FORCE 1 LOW "Levi's Denim"</h1>
                <h4>Rp 41,499,000</h4>
                <select>
                    <option>sizes available</option>
                    <option>EU 40</option>
                    <option>EU 41.5</option>
                    <option>EU 42</option>
                    <option>EU 43</option>
                    <option>EU 44 </option>
                </select>
                <input type="Number" value="1">
                <a href="contact.html" class="btn">BUY NOW </a>
                <h3>Product Details </h3>
                <br>
                <p>The Supreme x Nike Air Force 1 Low “Box Logo White” takes a less-is-more approach in design and is part of the “World Famous” streetwear brand’s Spring/Summer 2020 collaboration with Nike. Supreme tones down the use of aggressive branding and instead opts for a simple and subtle design, featuring the iconic red Box Logo on the heel of a standard white-on-white Air Force 1 Low. A silver “AF1” emblem covers the bottom of the laces near the perforated toe, while tonal Nike Air branding on the tongue tab and heel complete the look. Release date: Spring 2020.</p>
            </div>
        </div>
    </div>

<!-------------------- title ------------------->
<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p><a href="product.html">View More</a></p>
    </div>
</div>
<!-------------------- products ------------------->
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
