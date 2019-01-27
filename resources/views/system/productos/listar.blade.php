@extends('system.productos.productos')
@section('contentproductos')
    <div class="row">
        <div class="col-md-4">
            <h3 class="titulos">Listar Categorias</h3>
            <hr>
            <ul class="nav justify-content-left">
                <li class="nav-item">
                    <a class="nav-link active" href="#!" data-toggle="modal"
                       data-target=".bd-example-modal-lgcategoria"><i
                            class="fas fa-plus"></i> Agregar categoria</a>
                </li>
            </ul>
            @for($b = 0; $b < count($categoria); $b++)
                <div class="media" style="padding: 1%;">
                    <img class="mr-3 imagenlateral" src="{{$categoria[$b]['rutaimg']}}"
                         alt="{{$categoria[$b]['nombre']}}">
                    <div class="media-body">
                        <h5 class="mt-0"><strong>{{$categoria[$b]['nombre']}}</strong></h5>
                        {{$categoria[$b]['descripcion']}}<br>
                        <a href="#!" data-toggle="modal"
                           data-target=".bd-example-modal-lgcategoria{{$categoria[$b]['id']}}"><i
                                class="fas fa-edit"></i></a>
                        <a href="{{route('eliminarcategoria', ['id' => $categoria[$b]['id']])}}"><i
                                class="fas fa-trash"></i></a>
                        <hr>
                    </div>
                    <div class="modal fade bd-example-modal-lgcategoria{{$categoria[$b]['id']}}" tabindex="-1"
                         role="dialog"
                         aria-labelledby="myLargeModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="container-fluid containermodals">
                                    <h3 class="titulos">Actualizar {{$categoria[$b]['nombre']}}</h3>
                                    <hr>
                                    <form action="{{route('actualizarcategoria', ['id' => $categoria[$b]['id']])}}"
                                          method="post"
                                          enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        @method('patch')
                                        <input type="hidden" name="id" value="{{$categoria[$b]['id']}}">
                                        <input type="hidden" name="rutaimagenold" value="{{$categoria[$b]['rutaimg']}}">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Nombre</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                       placeholder="Nombre"
                                                       name="nombre" value="{{$categoria[$b]['nombre']}}" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="exampleFormControlTextarea1">Descripción</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                          style="width:100%;"
                                                          name="descripcion"
                                                          required>{{$categoria[$b]['descripcion']}}</textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputState">imagen del producto</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFileLang"
                                                           lang="es"
                                                           name="rutaimg" value="">
                                                    <label class="custom-file-label" for="customFileLang">Seleccionar
                                                        Archivo</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputState">categoria padre</label>
                                                <select id="inputState" class="form-control" name="catgoriapadre">
                                                    <option selected value="0"> selecione una categoria</option>

                                                    @for($c = 0; $c < count($categoria); $c++)
                                                        <option
                                                            value="{{$categoria[$c]['id']}}">{{$categoria[$c]['nombre']}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn botonsubmit" value="Actualizar">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="col-md-8">
            <h3 class="titulos">Listar productos</h3>
            <hr>
            <ul class="nav justify-content-left">
                <li class="nav-item">
                    <a class="nav-link active" href="#!" data-toggle="modal" data-target=".bd-example-modal-lg"><i
                            class="fas fa-plus"></i> Agregar producto</a>
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
            @if(isset($productos))
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col">Referencia</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Valor</th>
                        <th scope="col"></th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productos as $produc)
                        <tr>
                            <td>{{$produc->referencia}}</td>
                            <td>{{$produc->nombre}}</td>
                            <td>{{$produc->stock}}</td>
                            <td>${{number_format($produc->valor)}}</td>
                            <td><a href="{{route('verproducto', ['id' => $produc->id])}}"><i class="fas fa-eye"></i></a>
                                <a href="{{route('eliminarproducto', ['id' => $produc->id])}}"><i
                                        class="fas fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$productos->links() }}
            @endif
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container-fluid containermodals">
                    <form action="{{route('agregarproducto')}}" method="post" enctype="multipart/form-data">
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
                                    @for($a = 0; $a < count($categoria); $a++)
                                        <option
                                            value="{{$categoria[$a]['id']}}">{{$categoria[$a]['nombre']}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputState">producto padre</label>
                                <select id="inputState" class="form-control" name="productopadre">
                                    <option selected></option>
                                    @foreach($productos as $produc)
                                        <option value="{{$produc->id}}">{{$produc->nombre}}</option>
                                    @endforeach
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
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar nueva categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container-fluid containermodals">
                    <form action="{{route('agregarcategoria')}}" method="post" enctype="multipart/form-data">
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
