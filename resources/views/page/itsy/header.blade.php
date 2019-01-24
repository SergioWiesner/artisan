<!doctype html>
<html class="home blog no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css" media="all"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Amatic+SC%3A400%2C700%7CLato%3A400%2C700%2C400italic%2C700italic&amp;ver=4.9.8"
          type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{asset('/page/itsy/css/style.css')}}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{asset('/page/itsy/css/print.css')}} " type="text/css" media="print"/>
    <!--[if (lt IE 9) & (!IEMobile)]>
    <link rel="stylesheet" id="lt-ie9-css" href="{{asset('/page/itsy/css/ie.css')}}" type="text/css" media="screen"/>
    <![endif]-->
    <script src='{{asset('universal.js')}}'></script>
    <script src='{{asset('/page/itsy/js/jquery-3.0.0.min.js')}}'></script>
    <script src='{{asset('/page/itsy/js/jquery-migrate-3.0.1.min.js')}}'></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="home sticky-menu sidebar-off" id="top">
<header class="header">
    <div class="header-wrap">

        <div class="logo plain logo-left">
            <div class="site-title">
                <a href="index.html" title="Go to Home">{{ config('app.name') }}</a>
            </div>
        </div><!-- /logo -->
        <nav id="nav" role="navigation">
            <div class="table">
                <div class="table-cell">
                    <ul id="menu-menu-1">
                        <li class="menu-item">
                            <a href="index.html">home</a></li>
                        <li class="menu-item">
                            <a href="/login">Entrar</a></li>
                        <li class="menu-item">
                            <a href="about.html">About me</a></li>
                        <li class="menu-item">
                            <a href="#">Dropdown</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="#">Cute</a></li>
                                <li class="menu-item">
                                    <a href="#">Fun</a></li>
                                <li class="menu-item">
                                    <a href="#">Fitness</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="single.html">Single</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="typography.html">Typography</a></li>
                        <li class="menu-item">
                            <a href="contact.html">Contact me</a></li>
                        <li class="menu-inline menu-item">
                            <a title="Twitter" href="http://twitter.com/fh5co">
                                <i class="fa fa-twitter"></i><span class="i">Twitter</span>
                            </a></li>
                        <li class="menu-inline menu-item">
                            <a title="Facebook" href="http://www.facebook.com/fh5co">
                                <i class="fa fa-facebook"></i><span class="i">Facebook</span>
                            </a></li>
                        <li class="menu-inline menu-item">
                            <a title="Flickr" href="#"><i class="fa fa-flickr"></i><span class="i">Flickr</span></a>
                        </li>
                        <li class="menu-inline menu-item">
                            <a title="Instagram" href="#">
                                <i class="fa fa-instagram"></i><span class="i">Instagram</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <a href="#nav" class="menu-trigger"><i class="fa fa-bars"></i></a>
        <a href="#topsearch" class="search-trigger"><i class="fa fa-search"></i></a>
    </div>
</header>
