<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="style/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="images/Screenshot (543)-modified.png" />

</head>
<body>

    <div class="container">
          <div class="navbar">
        <div class="logo">
            <a href="/"><img src="img/skull.png" width="80px">
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="/">Home</a></li>
                <li><a href="/product">Product</a></li>
                <li><a href="https://www.google.co.id/maps/place/LOVARIS+Shoes+Store/@-6.3692446,106.7367864,15z/data=!4m9!1m2!2m1!1stoko+sneakers!3m5!1s0x2e69ef2c48896dd9:0x6f9207345ebdda2b!8m2!3d-6.3692289!4d106.7455023!15sCg10b2tvIHNuZWFrZXJzkgEKc2hvZV9zdG9yZQ">Maps</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="account.html">Account</a></li>
            </ul>
        </nav>
        
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
    </div>
    {{--  menampilkan tag html yang berada di dalam @section --}}
    @yield('bro')
{{-- footer --}}

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>COMMING SOON</h3>
              <p>app under construction</p>
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
        <p class="Copyright">Copyriht 2021 - TIM 9</p>
    </div>
</div>
 {{-- js for toggle menu --}}
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
</html></html>