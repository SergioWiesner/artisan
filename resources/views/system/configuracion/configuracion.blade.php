@extends('app')
@section('page')
    <section>
        <div class="container-fluid">
            @if(count($configuracion) > 0)
                <form action="{{route('configuracioncear')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <h3 class="titulos">Datos de correo de envio</h3>
                                    <hr>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Host">Host</label>
                                    <input type="text" class="form-control" id="Host" name="hostmail"
                                           placeholder="Host" value="{{$configuracion[0]['hostmail']}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="Puerto">Puerto</label>
                                    <input type="text" class="form-control" id="Puerto" name="mailpuerto"
                                           value="{{$configuracion[0]['mailpuerto']}}"
                                           placeholder="Puerto">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="Encriptacion">Encriptación</label>
                                    <input type="text" class="form-control" id="Encriptacion" name="mailencryption"
                                           value="{{$configuracion[0]['mailencryption']}}"
                                           placeholder="Encriptacion">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Destinatario">A nombre de</label>
                                    <input type="text" class="form-control" id="Destinatario" name="desde"
                                           value="{{$configuracion[0]['desde']}}"
                                           placeholder="Destinatario">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="Correo">Correo</label>
                                    <input type="email" class="form-control" id="Correo" name="usuariomail"
                                           value="{{$configuracion[0]['usuariomail']}}"
                                           placeholder="Correo">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="Contraseña">Contraseña</label>
                                    <input type="password" class="form-control" id="Contraseña" name="clavemail"
                                           value="{{$configuracion[0]['clavemail']}}"
                                           placeholder="Contraseña">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <h3 class="titulos">Información del sistema</h3>
                                    <hr>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Nombre del negocio</label>
                                    <input type="text" class="form-control" name="nombresistema"
                                           value="{{$configuracion[0]['nombresistema']}}" id="inputCity">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="Dirección">Dirección del negocio</label>
                                    <input type="text" class="form-control" id="Dirección" name="direccionsistema"
                                           value="{{$configuracion[0]['direccionsistema']}}"
                                           placeholder="1234 Main St">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="Teléfono">Teléfono del negocio</label>
                                    <input type="text" class="form-control" id="Teléfono" name="telefono"
                                           value="{{$configuracion[0]['telefono']}}"
                                           placeholder="3203368199">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="hidden" name="rutaimagenold"
                                           value="{{$configuracion[0]['logosistema']}}">
                                    <div class="form-group">
                                        <label for="Teléfono">Logo sistema</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="rutaimg" id="customFile">
                                            <label class="custom-file-label" for="customFile">Bucar logo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Configurar</button>
                </form>
            @else
                <form action="{{route('configuracioncear')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <h3 class="titulos">Datos de correo de envio</h3>
                                    <hr>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Host">Host</label>
                                    <input type="text" class="form-control" id="Host" name="hostmail"
                                           placeholder="Host">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="Puerto">Puerto</label>
                                    <input type="text" class="form-control" id="Puerto" name="mailpuerto"
                                           placeholder="Puerto">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="Encriptacion">Encriptación</label>
                                    <input type="text" class="form-control" id="Encriptacion" name="mailencryption"
                                           placeholder="Encriptacion">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Destinatario">A nombre de</label>
                                    <input type="text" class="form-control" id="Destinatario" name="desde"
                                           placeholder="Destinatario">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="Correo">Correo</label>
                                    <input type="email" class="form-control" id="Correo" name="usuariomail"
                                           placeholder="Correo">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="Contraseña">Contraseña</label>
                                    <input type="password" class="form-control" id="Contraseña" name="clavemail"
                                           placeholder="Contraseña">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <h3 class="titulos">Información del sistema</h3>
                                    <hr>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Nombre del negocio</label>
                                    <input type="text" class="form-control" name="nombresistema" id="inputCity">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="Dirección">Dirección del negocio</label>
                                    <input type="text" class="form-control" id="Dirección" name="direccionsistema"
                                           placeholder="1234 Main St">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="Teléfono">Teléfono del negocio</label>
                                    <input type="text" class="form-control" id="Teléfono" name="telefono"
                                           placeholder="3203368199">
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="form-group">
                                        <label for="Teléfono">Logo sistema</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="rutaimg" id="customFile">
                                            <label class="custom-file-label" for="customFile">Bucar logo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Configurar</button>
                </form>
            @endif
        </div>
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
