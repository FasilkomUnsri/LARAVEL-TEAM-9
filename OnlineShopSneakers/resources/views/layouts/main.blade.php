<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shop Sneakers</title>
    <link rel="stylesheet" href="style/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> {{-- font --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
</head>
<body style="background-image:url({{url('img/greek-vase.png')}});">

    <div class="header">
        <div class="container">
            <div class="navbar">
            <div class="logo">
            <a href="/"><img src="img/skull.png">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="/">Home</a></li>
                    <li><a href="/product">Product</a></li>
                    <li><a href="https://www.google.co.id/maps/place/LOVARIS+Shoes+Store/@-6.3692446,106.7367864,15z/data=!4m9!1m2!2m1!1stoko+sneakers!3m5!1s0x2e69ef2c48896dd9:0x6f9207345ebdda2b!8m2!3d-6.3692289!4d106.7455023!15sCg10b2tvIHNuZWFrZXJzkgEKc2hvZV9zdG9yZQ">Maps</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </nav>
            
            <img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        <div class="row">
            <div class="col-2">
                <h1>UP YOUR STYLE WITH <br> ALL BRAND SNEAKERS</h1>
                    <p>find your favorite accessories here</p>
                    <a href="/product" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
                <a href="{{ url('detailproduk') }}/{{ $produk->id }}"><img src="img/dior.jpg"></a> 
            </div>
        </div>
        </div>
    </div>

    {{--  menampilkan tag html yang berada di dalam @section --}}
    @yield('main')
    {{-- footer --}}
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>COMMING SOON</h3>
                <p>app sedang dibangun</p>
                    <div class="app-logo">
                        <img src="img/play-store.png">
                        <img src="img/app-store.png">
                        
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="img/skull.png" style="width: 50px;">
                    <p>find your dream accessories here</p>
                </div>
            
                <div class="footer-col-4">
                    <h3>Follow US</h3>
                <ul>
                    <a href="https://www.instagram.com/rioalfido/"><i class="fa fa-instagram" style="font-size:24px"></i></a>
                    <a href="https://www.facebook.com/rioalfido/"><i class="fa fa-facebook" style="font-size:24px"></i></a>
                    <a href="https://www.youtube.com/channel/UCgHN2hdYvYQ_FaJd27WAohA"><i class="fa fa-youtube" style="font-size:24px"></i></a>
                </ul>
                </div>
            </div>
            <hr>
            <p class="Copyright">Copyright 2021 - TIM 9</p>
        </div>
    </div>
    {{-- js for toggle menu  --}}
        <script>
            var MenuItems = document.getElementById("MenuItems");
            
            MenuItems.style.maxHeight = "0px";

            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";

                }
                else
                {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
</body>