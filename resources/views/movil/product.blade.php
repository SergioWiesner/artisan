@extends('movil.main')
@section('contenido')
    <section class="productgalery">
        <div class="container-fluid">
            @for($a = 0; $a < count($producto); $a++)
                <h1 class="titulos">{{$producto[$a]['nombre']}}</h1>
                <h3>{{Session::get('configuracionpublica')['nombresistema']}} - <a
                            href="{{route('categorias', ['nombre' => $producto[$a]['catgorias']['nombre']])}}">{{$producto[$a]['catgorias']['nombre']}}</a>
                </h3>
                <br>
                <img src="{{$producto[$a]['rutaimagen']}}" alt="{{$producto[$a]['nombre']}}">
                <br>
                <br>
                <p>{{$producto[$a]['descripcion']}}</p>
                @if(count($producto[$a]['propiedades']) > 0)
                    <form method="post">
                        @for($b = 0; $b < count($producto[$a]['propiedades']); $b++)
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">{{$producto[$a]['propiedades'][$b]['nombre']}}</label>
                                <select name="select" id="productSize" class="form-control">
                                    <option selected></option>
                                    @for($c = 0; $c < count($producto[$a]['propiedades'][$b]['valores']); $c++)
                                        <option value="{{$producto[$a]['propiedades'][$b]['valores'][$c]['productos_id']}}">{{$producto[$a]['propiedades'][$b]['valores'][$c]['valor']}}</option>
                                    @endfor
                                </select>
                            </div>
                        @endfor
                    </form>
                @endif
                <br>
                <h4>Valor <span id="valorproducto">${{number_format($producto[$a]['valor'])}}</span></h4>
                <br>
                <a href="#" class="btn btn-block btn-dark">Agregar al carrito</a>
                <br>
                @if(count($producto[$a]['catgorias']['productos']) > 0)
                    <h2 class="titulos">PRODUCTOS RELACIONADOS</h2>
                    <div class="owl-carousel owl-theme">
                        @for($d = 0; $d < count($producto[$a]['catgorias']['productos']); $d++)
                            <div class="item">
                                <a href="{{route('producto', ['nombre' => $producto[$a]['catgorias']['productos'][$d]['nombre'],'id' => $producto[$a]['catgorias']['productos'][$d]['id']])}}"
                                   class="itemproduct">
                                    <div class="card cardproductos">
                                        <img src="{{asset($producto[$a]['catgorias']['productos'][$d]['img_url_min'])}}"
                                             class="card-img-top"
                                             alt="{{$producto[$a]['catgorias']['productos'][$d]['nombre']}}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$producto[$a]['catgorias']['productos'][$d]['nombre']}}</h5>
                                            <p class="card-text">{{$producto[$a]['catgorias']['productos'][$d]['descripcion']}}</p>
                                            <p>
                                                ${{number_format($producto[$a]['catgorias']['productos'][$d]['valor'])}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                @endif
            @endfor
        </div>
    </section>

@endsection
