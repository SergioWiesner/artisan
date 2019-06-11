<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="ks0XB5OXs2mWJwcte3U0i_SppHcJPKaLNGe7GIY2vw4"/>
    {!! SEO::generate(true) !!}
    <title>{{Session::get('configuracionpublica')['nombresistema']}}</title>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="stylesheet" href="{{asset('/page/essence/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('/page/essence/css/custom.css')}}">
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141667193-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-141667193-1');
    </script>
    <script src="{{asset('/page/essence/js/main.js')}}"></script>
</head>
<body>
<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
        <!-- Classy Menu -->
        <nav class="classy-navbar" id="essenceNav">
            <!-- Logo -->
            <a class="nav-brand" href="/"><img src="{{asset(Session::get('configuracionpublica')['logosistema'])}}"
                                               alt="{{Session::get('configuracionpublica')['nombresistema']}}"
                                               class="logo"></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
                <!-- close btn -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->

            </div>
        </nav>
        <!-- Header Meta Data -->
        <div class="header-meta d-flex clearfix justify-content-end">
            <!-- Search Area -->
            <div class="search-area">
                <form action="#" method="post">
                    <input type="search" name="search" id="headerSearch" placeholder="Buscar">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- Favourite Area -->
            <div class="favourite-area">
                <a href="#"><img src="{{asset('page/essence/img/core-img/heart.svg')}}" alt=""></a>
            </div>
            <!-- User Login Info -->
            <div class="user-login-info">
                <a href="/login"><img src="{{asset('page/essence/img/core-img/user.svg')}}" alt=""></a>
            </div>
            <!-- Cart Area -->
            <div class="cart-area">
                <a href="#" id="essenceCartBtn"><img src="{{asset('page/essence/img/core-img/bag.svg')}}" alt="">
                    <span>3</span></a>
            </div>
        </div>
    </div>
</header>
@include('page.essence.sidecar')
