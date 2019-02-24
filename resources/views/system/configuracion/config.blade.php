@extends('system.configuracion.configuracion')
@section('configuracionpagina')
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
                            <label for="Dirección">Dirección</label>
                            <input type="text" class="form-control" id="Dirección" name="direccionsistema"
                                   value="{{$configuracion[0]['direccionsistema']}}"
                                   placeholder="1234 Main St">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Teléfono">Teléfono</label>
                            <input type="text" class="form-control" id="Teléfono" name="telefono"
                                   value="{{$configuracion[0]['telefono']}}"
                                   placeholder="3203368199">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="hidden" name="rutaimagenold"
                                   value="{{$configuracion[0]['logosistema']}}">
                            <div class="form-group">
                                <label for="Teléfono">Logo</label>
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
@endsection
