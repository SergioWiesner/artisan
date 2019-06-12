@extends('movil.main')
@section('contenido')
    <section class="categorias">
        <div class="container-fluid">
            @foreach($productos as $producto)
                <div class="row listaproductoscategorias">
                    @foreach($producto->productos as $item)
                        @if(file_exists(public_path($item->rutaimagen)))
                            <div class="col-md">
                                <img src="{{$item->rutaimagen}}" alt="{{$item->nombre}}">
                                <br>
                                <h2>{{$item->nombre}}</h2>
                                <p>{{$item->descripcion}}</p>
                                <a href="{{route('producto', ['nombre' => $item->nombre,'id' => $item->id])}}"
                                   class="btn btn-block btn-dark">VER
                                    MÁS</a>
                                <br></div>
                        @endif
                    @endforeach
                </div>
            @endforeach
            {{$productos->links()}}

            <h3 class="titulos">CATEGORIAS</h3>
            <ul class="list-group list-group-horizontal-md">
                @for($b = 0; $b < count($categoria); $b++)
                    <li class="list-group-item"><a
                                href="{{route('categorias', ['nombre' => $categoria[$b]['nombre']])}}">{{$categoria[$b]['nombre']}}</a>
                    </li>
                @endfor
            </ul>
        </div>
    </section>
@endsection

