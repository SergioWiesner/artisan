<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title  -->
    <title>{{Session::get('configuracionpublica')['nombresistema']}}</title>
    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('page/essence/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('page/essence/style.css')}}">
    <link rel="stylesheet" href="{{asset('page/essence/css/custom.css')}}">
</head>
<body>
<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
        <!-- Classy Menu -->
        <nav class="classy-navbar" id="essenceNav">
            <!-- Logo -->
            <a class="nav-brand" href="/"><img src="{{asset(Session::get('configinit')['logosistema'])}}"
                                               alt="{{Session::get('configinit')['nombresistema']}}" class="logo"></a>
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
                <div class="classynav">
                    <ul>
                        <li><a href="#">Shop</a>
                            <div class="megamenu">
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Women's Collection</li>
                                    <li><a href="shop.html">Dresses</a></li>
                                    <li><a href="shop.html">Blouses &amp; Shirts</a></li>
                                    <li><a href="shop.html">T-shirts</a></li>
                                    <li><a href="shop.html">Rompers</a></li>
                                    <li><a href="shop.html">Bras &amp; Panties</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Men's Collection</li>
                                    <li><a href="shop.html">T-Shirts</a></li>
                                    <li><a href="shop.html">Polo</a></li>
                                    <li><a href="shop.html">Shirts</a></li>
                                    <li><a href="shop.html">Jackets</a></li>
                                    <li><a href="shop.html">Trench</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Kid's Collection</li>
                                    <li><a href="shop.html">Dresses</a></li>
                                    <li><a href="shop.html">Shirts</a></li>
                                    <li><a href="shop.html">T-shirts</a></li>
                                    <li><a href="shop.html">Jackets</a></li>
                                    <li><a href="shop.html">Trench</a></li>
                                </ul>
                                <div class="single-mega cn-col-4">
                                    <img src="img/bg-img/bg-6.jpg" alt="">
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="single-product-details.html">Product Details</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="single-blog.html">Single Blog</a></li>
                                <li><a href="regular-page.html">Regular Page</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <!-- Nav End -->
            </div>
        </nav>

        <!-- Header Meta Data -->
        <div class="header-meta d-flex clearfix justify-content-end">
            <!-- Search Area -->
            <div class="search-area">
                <form action="#" method="post">
                    <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- Favourite Area -->
            <div class="favourite-area">
                <a href="#"><img src="{{asset('page/essence/img/core-img/heart.svg')}}" alt=""></a>
            </div>
            <!-- User Login Info -->
            <div class="user-login-info">
                <a href="#"><img src="{{asset('page/essence/img/core-img/user.svg')}}" alt=""></a>
            </div>
            <!-- Cart Area -->
            <div class="cart-area">
                <a href="#" id="essenceCartBtn"><img src="{{asset('page/essence/img/core-img/bag.svg')}}" alt="">
                    <span>3</span></a>
            </div>
        </div>

    </div>
</header>
<!-- ##### Header Area End ##### -->
