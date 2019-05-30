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
                        <select class="form-control" id="tipodocumento"
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
                        <label for="Documento">Documento</label>
                        <input type="text" class="form-control" name="documento" id="documentoBuscar" required>
                        <p id="logdocumento"></p>
                    </div>
                    <div class="form-group">
                        <label for="Nombres">Nombres</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="Correos">Correos</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="Teléfono">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" required>
                    </div>
                    <div class="form-group">
                        <label for="Dirección">Dirección</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-primary" value="Generar factura">
                    </div>
                </div>
                <div class="col-md-8">
                    <h4 class="titulos">Productos</h4>
                    <div class="form-group" id="Buscadorproductos">
                        <input type="text" id="busquedaproducto" placeholder="Buscar producto" class="form-control">
                        <p id="log"></p>
                    </div>
                    <hr>
                    <div id="curponuevoproducto" style="width: 100%; padding: 2%;">

                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-2"><h5>Subtotal</h5></div>
                        <div class="col-md-8"><p id="subtotaltotal"></p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-2"><h5>Total</h5></div>
                        <div class="col-md-8"><p id="total"></p></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="{{asset('system/js/cotizador.js')}}"></script>
@endsection
