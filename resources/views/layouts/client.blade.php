<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('site/images/favicon.svg') }}">
    <title>Khatchkar</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('site/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('site/css/style.css')}}" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{asset('site/jquery/jquery.min.js')}}"></script>
</head>
<body class="fix-header">
@if (\Session::has('success'))
    <script> alert("{{ Session::get("success") }}") </script>
@endif
<div class="page-wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top" id="nav">
        <a class="navbar-brand" href="/"><img class="logo" src="{{ asset("site/images/logo.png") }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="/shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="/gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="/about-us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="/contact-us">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield("content")
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p class="text-white">Copyright © {{ date("Y") }} mykhatchkar.com - All Rights Reserved</p>
                </div>
                <div class="col-md-2">
                    <div class="text-center">
                        <img style="height: 30px" src="{{ asset("site/images/fb.png") }}" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <p class="text-white text-right">Powered By Aimtech</p>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="{{ asset("site/bootstrap/js/bootstrap.min.js") }}"></script>
<script>
    let pathname = window.location.pathname; // Returns path only (/path/example.html)
    $(".nav-item a").each(function(){
        if($(this).attr("href") == pathname) {
            $(this).parent().addClass("active");
            return;
        }
    });
</script>
</body>

</html>


