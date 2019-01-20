@extends('system.productos.productos')
@section('contentproductos')
    <h3 class="titulos">Listar productos</h3>
    <hr>
    <ul class="nav justify-content-left">
        <li class="nav-item">
            <a class="nav-link active" href="#!" data-toggle="modal" data-target=".bd-example-modal-lg"><i
                    class="fas fa-plus"></i> Agregar producto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#!" data-toggle="modal" data-target=".bd-example-modal-lgcategoria"><i
                    class="fas fa-plus"></i> Agregar categoria</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-file-excel"></i> Descargar excel</a>
        </li>
    </ul>
    <form>
        <div class="input-group">
            <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option selected></option>
                <option value="1">One</option>
            </select>
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Buscar</button>
            </div>
    </form>
    <table class="table table-borderless">
        <thead>
        <tr>
            <th></th>
            <th scope="col">Referencia</th>
            <th scope="col">Nombre</th>
            <th scope="col">Stock</th>
            <th scope="col">Valor</th>
            <th scope="col">categoria</th>
            <th scope="col">Descrpción</th>
        </tr>
        </thead>
        <tbody>
        @php
            $a = 0;
        @endphp
        @foreach($productos as $produc)
            <tr>
                <td>{{$a += 1}}</td>
                <td>{{$produc->referencia}}</td>
                <td>{{$produc->nombre}}</td>
                <td>{{$produc->stock}}</td>
                <td>{{$produc->valor}}</td>
                <td>{{$produc->idcategoria}}</td>
                <td>{{$produc->descripcion}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$productos->links() }}
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="container-fluid containermodals">
                    <h3 class="titulos">Agregar nuevo producto</h3>
                    <hr>
                    <form action="{{route('agregarproducto')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Nombre</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre"
                                       name="nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Valor</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Valor" name="valor">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Stock</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Stock" name="stock">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputState">Categoria</label>
                                <select id="inputState" class="form-control" name="categoria">
                                    <option selected></option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputState">producto padre</label>
                                <select id="inputState" class="form-control" name="productopadre">
                                    <option selected></option>
                                </select>
                            </div>
                        </div>
                        <h4>Propiedades</h4>
                        <hr>
                        <a href="#!" onclick="agregarNuevaPropiedad()"><i class="fas fa-plus"></i> Agregar nueva
                            propiedad</a> <br><br>
                        <div id="anexopropiedades" class="form-row">

                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputState">imagen del producto</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" lang="es"
                                           name="imagenproducto">
                                    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Descripción</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                          style="width:100%;" name="descripcion"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn botonsubmit">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lgcategoria" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="container-fluid containermodals">
                    <h3 class="titulos">Agregar categoria</h3>
                    <hr>
                    <form action="{{route('agregarcategoria')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Nombre</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre"
                                       name="nombre">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Descripción</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                          style="width:100%;" name="descripcion"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputState">imagen del producto</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" lang="es"
                                           name="rutaimg">
                                    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputState">categoria padre</label>
                                <select id="inputState" class="form-control" name="catgoriapadre">
                                    <option selected value="0"> selecione una categoria</option>
                                    @for($a = 0; $a < count($categoria); $a++)
                                        <option
                                            value="{{$categoria[$a]['id']}}">{{$categoria[$a]['nombre']}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <input type="submit" class="btn botonsubmit" value="Agregar">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
