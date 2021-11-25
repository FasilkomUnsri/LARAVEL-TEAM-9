{{-- halaman ini mengambil dari rio/navbar --}}
@extends('layouts/navbar')
@section('bro')
        <!-------------- singel product detail-------------->

        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="img/cactus1.jpg" width="100%" id="productimg">
    
                    <div class="small-img-row">
                        <div class="small-ring-col">
                            <img src="images/cactus2.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-ring-col">
                            <img src="images/cactus3.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-ring-col">
                            <img src="images/cactus4.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-ring-col">
                            <img src="images/cactus5.jpg" width="100%" class="small-img">
                        </div>
                    </div>
    
                </div>
                <div class="col-2">
                    <p>Home / T-Shirt</p>
                    <h1>FORCE 1 PS "Cactus Jack - Travis Scott"</h1>
                    <h4>Rp21.389.000</h4>
                    <select>
                        <option>Select Size</option>
                        <option>EU 40</option>
                        <option>EU 41.5</option>
                        <option>EU 42</option>
                        <option>EU 42.5</option>
                        <option>EU 43</option>
                    </select>
                    <input type="Number" value="1">
                    <a href="contact.html" class="btn">BUY NOW</a>
                    <h3>Product Details <i class="fa fa-indent"></i></h3>
                    <br>
                    <p>Travis Scott's style and creative aesthetic can be traced back to his life in Houston. With the AF-1 Travis Scott, he pays homage to the community that helped cultivate his hustle and the creativity inspired by his trips to Astroworld.
                        The shoe is a patchwork of elements, reflecting things from his upbringing—like the durability of traditional work clothing, natural tones associated with being outdoors and the surreal vibes of Astroworld.
                        He's sharing his experiences with the kids in Houston by providing them with the tools to own their hustle and the inspiration to imagine new possibilities for themselves.</p>
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
