<!DOCTYPE html>
<html lang="en">
<head>
    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artisan</title>
    <!-- PLUGINS CSS STYLE -->
    <!-- Bootstrap -->
    <link href="{{asset('page/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Themefisher Font -->
    <link href="{{asset('page/plugins/themefisher-font/style.css')}}" rel="stylesheet">
    <!-- Slick Carousel -->
    <link href="{{asset('page/plugins/slick/slick.css')}}" rel="stylesheet">
    <!-- Slick Carousel Theme -->
    <link href="{{asset('page/plugins/slick/slick-theme.css')}}" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="{{asset('page/css/style.css')}}" rel="stylesheet">
    <!-- FAVICON -->
    <link href="/favicon.ico" rel="shortcut icon">
</head>
<body class="body-wrapper">
<nav class="navbar main-nav fixed-top navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{asset('page/images/logo.png')}}" class="logopagina"
                                              alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="tf-ion-android-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link scrollTo" href="#home">Inicio</a>
                </li>
                @if(Request::url() == Request::root())
                    <li class="nav-item">
                        <a class="nav-link scrollTo" href="#about">Acerca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollTo" href="#feature">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollTo" href="#pricing">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollTo" href="#team">Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollTo" href="#contact">Contactenos</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="/login">Entrar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
