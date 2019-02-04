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
                        <li><a href="#!" data-toggle="modal" data-target=".bd-example-modal-sm">Agregar bodega</a></li>
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
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar bodega</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('bodegacrear')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Referencia</label>
                            <input type="text" class="form-control" name="referencia"
                                   value=""
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nombre</label>
                            <input type="text" class="form-control" name="nombre"
                                   value=""
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="validationTextarea">Descripción</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Descripción"
                                      name="descripcion"
                                      required></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block" value="Agregar">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
