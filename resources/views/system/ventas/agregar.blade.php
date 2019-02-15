@extends('system.ventas.ventas')
@section('contentventas')
    <div class="container-fluid">
        <form action="{{route('usuarioscrear')}}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="titulos">Nueva venta</h3>
                </div>
                <div class="col-md-4">
                    <h4 class="titulos">Cliente</h4>
                    <hr>
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tipo documento</label>
                        <select class="form-control" id="exampleFormControlSelect1"
                                name="tipodocumento"
                                required>

                            <option selected></option>
                            @for($b = 0; $b < count($documentos); $b++)
                                <option
                                    value="{{$documentos[$b]['id']}}">{{$documentos[$b]['nombre']}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Documento</label>
                        <input type="text" class="form-control"
                               value="" name="documento"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombres</label>
                        <input type="text" class="form-control" name="nombre"
                               value=""
                               required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Correos</label>
                        <input type="email" class="form-control" name="email"
                               value=""
                               required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Contraseña</label>
                        <input type="password" class="form-control" name="password"
                               value=""
                               required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Teléfono</label>
                        <input type="text" class="form-control" name="telefono"
                               value="" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Dirección</label>
                        <input type="text" class="form-control"
                               value="" name="direccion"
                               required>
                    </div>
                </div>
                <div class="col-md-8">
                    <h4 class="titulos">Productos</h4>
                    <hr>
                    <div id="curponuevoproducto">
                        <div class="row">
                            <div class="col-md-1"><br>
                                <h1>1</h1></div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Producto</label>
                                    <select class="form-control" id="exampleFormControlSelect1"
                                            name="tipodocumento"
                                            required>

                                        <option selected></option>
                                        @for($b = 0; $b < count($documentos); $b++)
                                            <option
                                                value="{{$documentos[$b]['id']}}">{{$documentos[$b]['nombre']}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Cantidad</label>
                                    <input type="text" class="form-control"
                                           value="" name="direccion"
                                           required>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Unidad</label>
                                    <p>$40.000</p>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Subtotal</label>
                                    <p>$200.000</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="titulo">Detalles producto</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#!">Agregar nuevo producto</a>
                </div>
            </div>
        </form>
    </div>
@endsection
