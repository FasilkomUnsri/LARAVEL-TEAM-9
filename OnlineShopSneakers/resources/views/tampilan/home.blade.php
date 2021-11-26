{{-- halaman ini mengambil dari layouts/main --}}
@extends('layouts/main')
@section('main')
    <!------------ featured categoty -------------->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <a href="product detail trafiscott.html"><img src="img/cactus1.jpg" ></a>
                </div>
                <div class="col-3">
                    <a href="produk air dior .html"><img src="img/retro1.jpg" ></a>
                </div>
                <div class="col-3">
                    <a href="aif force.html"><img src="img/levi1.jpg" ></a>
                </div>
        </div>
        </div>
       
    </div>
    <!------------------featured product------------------>

    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="Product-detail.html"><img src="img/cactus1.jpg"></a>
               <a href="Product-detail.html"><h4>AIR FORCE 1 LOW "Off-White - MCA"</h4></a> 
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>
                <P>24,089,000</P>
            </div>
            <div class="col-4">
                <a href="product detailnikeairzoom tera.html"><img src="img/cactus1.jpg" ></a>
                <a href="product detailnikeairzoom tera.html"><h4>THE 10: NIKE AIR FORCE 1 LOW "Off-White Volt"</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>
                <P>Rp 31,799,000</P>
            </div>
            <div class="col-4">
                <a href="product detail trafiscott.html"><img src="img/cactus1.jpg" ></a>
                <a href="product detail trafiscott.html"><h4>FORCE 1 PS "Cactus Jack - Travis Scott"</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>
                <P>Rp21.389.000</P>
            </div>
            <div class="col-4">
                <a href="product detail nike 107.html"><img src="img/cactus1.jpg" ></a>
                <a href="product detail nike 107.html"><h4>X SPACE JAM AIR FORCE 1 SNEAKERS</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>
                <P>Rp 17,979,000</P>
            </div>
        </div>
    
        {{-- Latest Products --}}
        <h2 class="title">Latest Products</h2>
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
<!------------offer----------------->
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="img/dior1.jpg" class="offer-img">
                    </div>
                    <div class="col-2">
                    <h4>Exclusive Available On DTXSNEAKERS</h4>
                        <h1>Air Jordan 1 Dior </h1>
                        <small>For the Men’s Fall 2020 Runway show in Miami, Dior and Kim Jones partnered with Jordan Brand to unveil the limited-edition Air Jordan 1 High OG Dior sneaker. A collection of ready-to-wear and accessories completes the collaboration, and a low version of the Air Jordan 1 OG Dior rounds out the range.</small>
                    <br>  <a href="/NikeAirJordanDior" class="btn">Buy Now &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
<!---------------testimonial---------------->
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Keren banget sih sepatunya udah 2 kali belaja di sini gambarnya sesuai...aku suka banget belanja disini</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <a href="https://www.instagram.com/rioalfido/"><img src="img/ji.jpg" ></a>
                        <h3> Otong</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>ihh aku suka banet sama sepatunya bagus bagus warnanya dan bentuknya aku suka senang sekali belanja disini </p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <a href="https://www.instagram.com/rioalfido/"><img src="img/ji.jpg" ></a>
                        <h3>Sukri</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>여기에서 한 번 밖에 쇼핑하지 않았지만 결과는 좋습니다 신발이 마음에 듭니다 아마도 이것이 내 단골 가게가 될 것입니다</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <a href="https://www.instagram.com/sooyaaa__/"><img src="img/ji.jpg"></a>
                        <h3> SOYAAA </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--------------brands-------------->
<div class="brands">
    <h2 class="title">Brands</h2>
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="img/bca1.png" >
            </div>
            <div class="col-5">
                <img src="img/dana1.png" >
            </div>
            <div class="col-5">
                <img src="img/mm.png" >
            </div>
            <div class="col-5">
                <img src="img/gopay-logo.png" >
            </div>
            <div class="col-5">
                <img src="img/logo-paypal.png" >
            </div>
        </div>
    </div>
</div>

@endsection
