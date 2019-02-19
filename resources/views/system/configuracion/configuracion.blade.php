@extends('app')
@section('page')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <h3 class="titulos">Herramientas</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('configuracion')}}"> <i class="fas fa-cog"></i>
                                Configuración</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('CodviewInicio')}}"> <i
                                    class="fas fa-street-view"></i>
                                Visitas a la pagina</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('lienzo.index')}}"> <i class="fas fa-edit"></i> Editor
                                visual</a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link" data-toggle="modal" data-target=".bd-example-modal-sm"> <i
                                    class="fas fa-box"></i> Agregar bodega</a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link" data-toggle="modal"
                               data-target=".bd-example-modal-sm-pernisos">
                                <i class="fas fa-person-booth"></i> Agregar
                                permiso</a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link" data-toggle="modal"
                               data-target=".bd-example-modal-sm-perfil">
                                <i class="fas fa-user-circle"></i> Agregar
                                perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('creaciondeclientesviews')}}"> <i class="fas fa-fire"></i>
                                Crear cliente api</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('permisosperfiles')}}"> <i class="fas fa-code-branch"></i>
                                relacion perfiles y permisos</a>
                        </li>
                    </ul>
                    <h3 class="titulos">Paquetes</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('codviewsconfigcontroller')}}"> <i
                                    class="far fa-eye"></i>
                                codviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('configuracion.index')}}"><i
                                    class="fas fa-paint-brush"></i> codliveditor</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="container-fluid">
                        @yield('configuracionpagina')
                    </div>
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
                                <option value="{{route('listarusuarios')}}">Pestaña de usuarios</option>
                                <option value="{{route('configuracion')}}">Pestaña de configuracion</option>
                                <option value="{{route('clientes')}}">Pestaña de clientes</option>
                                <option value="{{route('productos')}}">Pestaña de Productos</option>
                                <option value="{{route('informes')}}">Pestaña de informes</option>
                                <option value="{{route('ventas')}}">Pestaña de ventas</option>
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

    <div class="modal fade bd-example-modal-sm-perfil" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
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
                                <option value="{{route('listarusuarios')}}">Pestaña de usuarios</option>
                                <option value="{{route('configuracion')}}">Pestaña de configuracion</option>
                                <option value="{{route('clientes')}}">Pestaña de clientes</option>
                                <option value="{{route('productos')}}">Pestaña de Productos</option>
                                <option value="{{route('informes')}}">Pestaña de informes</option>
                                <option value="{{route('ventas')}}">Pestaña de ventas</option>
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
