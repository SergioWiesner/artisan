@extends('app')
@section('page')
    <section>
        <div class="container-fluid">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h3 class="titulos">Datos de correo de envio</h3>
                        <hr>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputEmail4">Host</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Host">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="inputEmail4">Puerto</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Puerto">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="inputEmail4">Encriptación</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Encriptacion">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Correo</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Correo">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Contraseña</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputPassword4">A nombre de</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h3 class="titulos">Información del sistema</h3>
                        <hr>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputCity">Nombre del negocio</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputAddress">Dirección del negocio</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputAddress">Teléfono del negocio</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="3203368199">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>

            <div class="row">
                <div class="col-md-5">
                    <h3 class="titulos">Paquetes</h3>
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
                <div class="col-md-7">
                    <h3 class="titulos">Herramientas</h3>
                    <ul class="herramientaslinks">
                        <li><a href="{{route('CodviewInicio')}}"> <i class="fas fa-street-view"></i> Visitas a la pagina</a>
                        </li>
                        <li><a href="{{route('lienzo.index')}}"> <i class="fas fa-edit"></i> Editor visual</a></li>
                        <li><a href="#!" data-toggle="modal" data-target=".bd-example-modal-sm"> <i
                                    class="fas fa-box"></i> Agregar bodega</a></li>
                        <li><a href="#!" data-toggle="modal" data-target=".bd-example-modal-sm-pernisos"><i
                                    class="fas fa-person-booth"></i> Agregar
                                permiso</a></li>
                        <li><a href="{{route('creaciondeclientesviews')}}"><i class="fas fa-fire"></i> Crear cliente api</a>
                        </li>
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
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Bodega</h5>
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


    <div class="modal fade bd-example-modal-sm-pernisos" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar permiso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('permisocrear')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nombre</label>
                            <input type="text" class="form-control" name="nombre"
                                   value=""
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Rutas disponibles para permisos</label>
                            <select class="form-control" id="exampleFormControlSelect1"
                                    name="url"
                                    required>
                                <option value=""></option>
                                <option value="{{route('bodegacrear')}}">Pestaña de usuarios</option>
                                <option value="{{route('bodegacrear')}}">Pestaña de configuracion</option>
                                <option value="{{route('bodegacrear')}}">Pestaña de clientes</option>
                                <option value="{{route('bodegacrear')}}">Pestaña de iroductos</option>
                                <option value="{{route('bodegacrear')}}">Pestaña de dispositivos</option>
                                <option value="{{route('bodegacrear')}}">Pestaña de informes</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nivel de acceso</label>
                            <select class="form-control" id="exampleFormControlSelect1"
                                    name="nivelacceso"
                                    required>
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block" value="Agregar">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
