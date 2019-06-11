@extends('movil.main')
@section('contenido')
    <section class="inicial" style="background-image: url({{asset('videos/fondo3.png')}})">
        <h1>{{Session::get('configuracionpublica')['nombresistema']}}</h1>
        <h2>Una tienda virtual de artesanos para el mundo.</h2>
    </section>
    @if(count($productos) > 0)
        <section class="productos">
            <div class="container-fluid">
                <h3 class="titulos">Productos</h3>
                @php
                    $a = 0;
                @endphp
                @for($c = 0; $c < round(count($productos)/8); $c++)
                    <div class="owl-carousel owl-theme">
                        @for($a = 0; $a < count($productos); $a++)
                            <div class="item"><a
                                    href="{{route('producto', ['nombre' => $productos[$a]['nombre'],'id' => $productos[$a]['id']])}}"
                                    class="itemproduct">
                                    <div class="card cardproductos">
                                        <img src="{{asset($productos[$a]['img_url_min'])}}" class="card-img-top"
                                             alt="{{$productos[$a]['nombre']}}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$productos[$a]['nombre']}}</h5>
                                            <p class="card-text">{{$productos[$a]['descripcion']}}</p>
                                            <p>${{number_format($productos[$a]['valor'])}}</p>
                                        </div>
                                    </div>
                                </a></div>
                        @endfor
                    </div>
                @endfor
            </div>
        </section>
    @endif
    <section class="promociones" style="background-image: url({{asset('img/bg-img/bg-2.png')}})">
        <h2>Productos 100% <strong>Artesanales</strong></h2>
    </section>
    @if(count($categoria) > 0)
        <section class="categorias">
            <div class="container-fluid">
                <h3 class="titulos">Categorias</h3>
                <div class="owl-carousel owl-theme">
                    @for($b = 0; $b < count($categoria); $b++)
                        @if($categoria[$b]['id'] != 1)
                            <div class="item"><a href="{{route('categorias', ['nombre' => $categoria[$b]['nombre']])}}">
                                    <div class="card bg-dark text-white">
                                        <img src="{{asset($categoria[$b]['rutaimg'])}}" class="card-img"
                                             alt="{{$categoria[$b]['nombre']}}">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title">{{$categoria[$b]['nombre']}}</h5>
                                        </div>
                                    </div>
                                </a></div>
                        @endif
                    @endfor
                </div>
            </div>
        </section>
    @endif
@endsection
