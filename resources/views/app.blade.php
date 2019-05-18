<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{Session::get('configinit')['nombresistema']}}</title>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="loading" id="loadingdiv">
    <img src="{{asset('img/loading.gif')}}" alt="loading" class="loadimg ">
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/" style="width: 50px;"><img
                src="{{asset(Session::get('configinit')['logosistema'])}}"
                alt="{{Session::get('configinit')['nombresistema']}}" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @auth
            <ul class="navbar-nav mr-auto">
                @if(Session::has('menu'))
                    @for($a = 0; $a < count(Session::get('menu')); $a++)
                        {!!  Session::get('menu')[$a]['item'] !!}
                    @endfor
                @endif
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{route('productos')}}"></a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">Clientes</a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">Ventas</a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{route('listarusuarios')}}"></a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{route('configuracion')}}"></a>--}}
                {{--</li>--}}
            </ul>
            <div class="my-2  my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Salir') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        @else

        @endauth
    </div>
</nav>
<br>
<div class="containe-fluid maincontainer">
    <div class="container">
        @if(isset($errors))
            @if ($errors->any())
                <div class="alert alert-info" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endif
        @if(Session::has('success'))
            @for($a = 0; $a < count(Session::get('success')); $a++)
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')[$a]}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endfor
            {{Session::forget('success')}}
        @endif
        @if(Session::has('error'))
            @for($a = 0; $a < count(Session::get('error')); $a++)
                <div class="alert alert-danger" role="alert">
                    {{Session::get('error')[$a]}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endfor
            {{Session::forget('error')}}
        @endif
    </div>
    @yield('page')
</div>
<section class="footer">
    <p class="copywrite">
        Copyright © artisan v0.1
        <script>document.write(new Date().getFullYear());</script>
        - Desarrollado por <a href="https://codwelt.com" target="_blank">
            <img src="https://codwelt.com/creditos/creditos.png" class="logofootercredit" alt="codwelt.com">
        </a></p>
    {{--<p>--}}
    {{--Sigue todo el proyecto en nuestras redes sociales--}}
    {{--<ul class="redessocialesfootercredits">--}}
    {{--<li><a href=""><i class="fab fa-instagram"></i></a></li>--}}
    {{--<li><a href=""><i class="fab fa-github"></i></a></li>--}}
    {{--<li><a href=""><i class="fab fa-facebook-f"></i></a></li>--}}
    {{--<li><a href=""><i class="fab fa-twitter"></i></a></li>--}}
    {{--</ul>--}}
    {{--</p>--}}
    {{--<p>{{\Carbon\Carbon::now(new DateTimeZone('America/Bogota'))->format('l jS \\of F Y h:i:s A')}}</p>--}}
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>
<script>
    $(".alert").alert('show')
    $(".close").alert('fade')
</script>
</body>
</html>
