@extends('movil.main')
@section('contenido')
    <section class="inicial" style="background-image: url({{asset('videos/fondo3.png')}})">

    </section>
    <section class="productos">
        <div class="container-fluid">
            <h3 class="titulos">Productos</h3>
            @if(count($productos) > 0)
                @for($a = 0; $a < count($productos); $a++)
                    <a href="{{route('producto', ['nombre' => $productos[$a]['nombre'],'id' => $productos[$a]['id']])}}" class="itemproduct"
                    >
                        <div class="card cardproductos">
                            <img src="{{asset($productos[$a]['img_url_min'])}}" class="card-img-top"
                                 alt="{{$productos[$a]['nombre']}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$productos[$a]['nombre']}}</h5>
                                <p class="card-text">{{$productos[$a]['descripcion']}}</p>
                            </div>
                        </div>
                    </a>
                @endfor
            @endif
        </div>
    </section>
@endsection
