@extends('app')
@section('page')
    <section>
        <div class="container">
            <h1 class="titulos">Configuración del sistema</h1>
            <div class="row">
                <div class="col-md-12">
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
            </div>
            <div class="row">
                <div class="col-md-12">
                    @yield('configuracionpagina')
                </div>
            </div>
        </div>
    </section>
@endsection
