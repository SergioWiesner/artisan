<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artisan</title>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="loaderpage " id="preloader">
    <div class="ui active inverted dimmer">
        <div class="ui large text loader">Loading</div>
    </div>
</div>
<div class="ui grid">
    <div class="three wide column">
        <div class="ui left fixed vertical menu">
            <div class="item">
                <a href="/">
                    <img class="ui mini image logo" src="/img/artisan.png" alt="artisan">
                    <h4 class="sitetittle">ARTISAN</h4>
                </a>
            </div>
            <a class="item">Configuración</a>
            <a class="item" href="/productos">Productos</a>
            <a class="item">Salir</a>
        </div>
    </div>
    <div class="thirteen wide column">
        <div class="ui containmain">
            @yield('contenido')
            <div class="ui right floated horizontal list">
                <div class="disabled item" href="#">Artisan, Inc.</div>
                <a class="item" href="#">Terminos</a>
                <a class="item" href="#">Privacidad</a>
                <a class="item" href="#">Contactenos</a>
            </div>
            <div class="ui horizontal list">
                <a class="item" href="#">Acerca</a>
                <a class="item" href="#">Trabajo</a>
            </div>
        </div>
    </div>
</div>


<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
<script src="/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>