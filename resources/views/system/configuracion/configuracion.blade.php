@extends('app')
@section('page')
    <section>
        <div class="container-fluid">
            <h1 class="titulos">Configuración del sistema</h1>
            <div class="row">
                <div class="col-md-8">
                    <h3>Paquetes</h3>
                    <div class="paquetes">
                        <ul class="nav justify-content-left">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('codviewsconfigcontroller')}}"><i
                                        class="far fa-eye"></i>
                                    codviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('configuracion.index')}}"><i
                                        class="fas fa-paint-brush"></i> codliveditor</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Herramientas</h3>
                    <ul>
                        <li><a href="{{route('CodviewInicio')}}">Visitas a la pagina</a></li>
                        <li><a href="{{route('lienzo.index')}}">Editor visual</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    @yield('configuracionpagina')
                </div>
            </div>
        </div>
    </section>
@endsection
