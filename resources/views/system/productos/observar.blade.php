@extends('system.productos.productos')
@section('contentproductos')
    <div class="row">
        <div class="col-md-3">
            <h3 class="titulos"><strong>Productos relacionados</strong></h3>
            <hr>
            @if(count($relacionados) > 0)
                @for($d = 0; $d < count($relacionados); $d++)
                    <div class="col-md">
                        <a href="{{route('verproducto', ['id' => $relacionados[$d]['id']])}}" class="linkslaterales">
                            <div class="media">
                                <img src="{{$relacionados[$d]['rutaimagen']}}"
                                     class="align-self-center mr-3 imagenlateral"
                                     alt="{{$relacionados[$d]['nombre']}}">
                                <div class="media-body">
                                    <h5 class="mt-0"><strong>{{$relacionados[$d]['nombre']}}</strong></h5>
                                    <p>{{$relacionados[$d]['descripcion']}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            @else
                <span class="spaninformativo">No hay productos relacionados a la categoria</span>
            @endif
        </div>
        <div class="col-md-9 detallesproductos">
            @if(count($detalles) > 0)
                @for($a = 0; $a < count($detalles); $a++)
                    <h3 class="titulos"><strong>Detalles de producto</strong></h3>
                    <hr>
                    <div class="row">
                        @if(!is_null($detalles[$a]['rutaimagen']))
                            <div class="col-md-3">
                                <img src="{{$detalles[$a]['rutaimagen']}}" alt="{{$detalles[$a]['nombre']}}">
                            </div>
                            <div class="col-md-9">
                                @else
                                    <div class="col-md-12">
                                        @endif
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2><strong>{{$detalles[$a]['nombre']}}</strong></h2>
                                                <ul class="nav justify-content-left opcproductos">
                                                    <li class="nav-item">
                                                        <a href="!#" data-toggle="modal"
                                                           data-target=".bd-example-modal-lg"><i
                                                                class="fas fa-edit"></i></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{route('eliminarproducto', ['id' => $detalles[$a]['id']])}}"><i
                                                                class="fas fa-trash"></i></a>
                                                    </li>
                                                </ul>
                                                <hr>
                                            </div>

                                            <div class="col-md-3">
                                                <h4><strong>Referencia</strong></h4>
                                                <p>{{$detalles[$a]['referencia']}}</p>
                                            </div>
                                            <div class="col-md-3">
                                                <h4><strong>Stock total</strong></h4>
                                                @php
                                                    $cont = $detalles[$a]['stock'];
                                                @endphp
                                                @if(isset($detalles[$a]['propiedades']))
                                                    @for($c = 0; $c < count($detalles[$a]['propiedades']); $c++)
                                                        @for($d = 0; $d < count($detalles[$a]['propiedades'][$c]['valores']); $d++)
                                                            @php
                                                                $cont = $cont+$detalles[$a]['propiedades'][$c]['valores'][$d]['stock'];
                                                            @endphp
                                                        @endfor
                                                    @endfor
                                                @endif
                                                <p>{{$cont}}</p>
                                            </div>
                                            <div class="col-md-3">
                                                <h4><strong>Valor</strong></h4>
                                                <p>${{number_format($detalles[$a]['valor'])}}</p>
                                            </div>
                                            <div class="col-md-3">
                                                <h4><strong>Categoría</strong></h4>
                                                <p>{{$detalles[$a]['catgorias']['nombre']}}</p>
                                            </div>
                                            <div class="col-md-12">
                                                <h4><strong>Descripción</strong></h4>
                                                <p>{{$detalles[$a]['descripcion']}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">

                                            @if(count($detalles[$a]['propiedades']) > 0)
                                                <hr>
                                                <h4><strong>Propiedades</strong></h4>
                                                <div class="row">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Propiedad</th>
                                                            <th scope="col">Variaciones</th>
                                                            <th scope="col">Stock</th>
                                                            <th scope="col">Precio</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @for($c = 0; $c < count($detalles[$a]['propiedades']); $c++)
                                                            @for($x = 0; $x < count($detalles[$a]['propiedades'][$c]['valores']); $x++)
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>{{$detalles[$a]['propiedades'][$c]['nombre']}}</td>
                                                                    <td>{{$detalles[$a]['propiedades'][$c]['valores'][$x]['valor']}}</td>
                                                                    <td>{{$detalles[$a]['propiedades'][$c]['valores'][$x]['stock']}}</td>
                                                                    <td>{{$detalles[$a]['propiedades'][$c]['valores'][$x]['precio']}}</td>
                                                                </tr>
                                                            @endfor
                                                        @endfor
                                                        </tbody>
                                                    </table>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                            </div>
                            <hr>
                            <h2><strong>Categoría</strong></h2>
                            <div class="row">
                                <div class="col-md">
                                    <div class="media">
                                        <img src="{{$detalles[$a]['catgorias']['rutaimg']}}"
                                             class="align-self-center mr-3 categoria"
                                             alt="{{$detalles[$a]['catgorias']['nombre']}}">
                                        <div class="media-body">
                                            <h5 class="mt-0">{{$detalles[$a]['catgorias']['nombre']}}</h5>
                                            <p>{{$detalles[$a]['catgorias']['descripcion']}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                 aria-labelledby="myLargeModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="container-fluid containermodals">
                                            <h3 class="titulos">Actualizar producto {{$detalles[$a]['nombre']}}</h3>
                                            <hr>
                                            <form action="{{route('editarproducto', ['id' => $detalles[$a]['id']])}}"
                                                  method="post"
                                                  enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                @method('patch')
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4">Nombre</label>
                                                        <input type="text" class="form-control" id="inputEmail4"
                                                               placeholder="Nombre"
                                                               name="nombre" value="{{$detalles[$a]['nombre']}}"
                                                               required>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="variaiones"
                                                                   onclick="variacion()">
                                                            <label class="custom-control-label" for="variaiones">¿El
                                                                producto tiene
                                                                variaciones?</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Valor</label>
                                                    <input type="text" class="form-control" id="inputAddress"
                                                           placeholder="Valor" name="valor"
                                                           value="{{$detalles[$a]['valor']}}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Stock</label>
                                                    <input type="text" class="form-control" id="inputAddress"
                                                           placeholder="Stock" name="stock"
                                                           value="{{$detalles[$a]['stock']}}" required>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputState">Categoria</label>
                                                        <select id="inputState" class="form-control" name="categoria"
                                                                required>
                                                            <option></option>
                                                            @for($x = 0; $x < count($categorias); $x++)
                                                                @if($detalles[$a]['catgorias']['id'] == $categorias[$x]['id'])
                                                                    <option
                                                                        value="{{$categorias[$x]['id']}}"
                                                                        selected>{{$categorias[$x]['nombre']}}</option>
                                                                @else
                                                                    <option
                                                                        value="{{$categorias[$x]['id']}}">{{$categorias[$x]['nombre']}}</option>
                                                                @endif
                                                            @endfor
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputState">producto padre</label>
                                                        <select id="inputState" class="form-control"
                                                                name="productopadre">
                                                            <option></option>
                                                            @for($z = 0; $z < count($productos); $z++)
                                                                @if($detalles[$a]['id'] != $productos[$z]['id'])
                                                                    @if($detalles[$a]['idproductopadre'] == $productos[$z]['id'])
                                                                        <option
                                                                            value="{{$productos[$z]['id']}}"
                                                                            selected>{{$productos[$z]['nombre']}}</option>
                                                                    @else
                                                                        <option
                                                                            value="{{$productos[$z]['id']}}">{{$productos[$z]['nombre']}}</option>
                                                                    @endif
                                                                @endif
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                                <h4>Propiedades</h4>
                                                <hr>
                                                <a href="#!" onclick="agregarNuevaPropiedad()"><i
                                                        class="fas fa-plus"></i> Agregar nueva
                                                    propiedad</a> <br><br>
                                                <div class="form-row" id="anexopropiedadesold">
                                                    @for($y = 0; $y < count($detalles[$a]['propiedadesvalor']); $y++)
                                                        <div class="col-md-12">
                                                            <div class="row" id="old{{$y}}">
                                                                <a href="#!" onClick="elimnarestad('old{{$y}}')"
                                                                   class="closepropiedad"
                                                                   style="position: absolute; right: 15px; z-index: 100;"><span
                                                                        aria-hidden="true">×</span></a>
                                                                <div class="form-group col-md-6">
                                                                    <label for="inputState">Propiedades</label>
                                                                    <select id="inputState" class="form-control"
                                                                            name="propiedadanterior[propiedad][]">
                                                                        <option
                                                                            value="{{$detalles[$a]['propiedadesvalor'][$y]['propiedades_padre']['id']}}">{{$detalles[$a]['propiedadesvalor'][$y]['propiedades_padre']['nombre']}}</option>
                                                                        <hr>
                                                                        @for($h = 0; $h < count($propiedades); $h++)
                                                                            <option
                                                                                value="{{$propiedades[$h]['id']}}">{{$propiedades[$h]['nombre']}}</option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="inputAddress">Valor</label>
                                                                    <input type="text" class="form-control"
                                                                           id="inputAddress"
                                                                           placeholder="valor propiedad"
                                                                           name="propiedadanterior[valorpropiedad][]"
                                                                           value="{{$detalles[$a]['propiedadesvalor'][$y]['valor']}}"
                                                                           required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endfor
                                                </div>
                                                    <div id="anexopropiedades" class="row">

                                                </div>
                                                <hr>
                                                <div class="form-row">
                                                    <input type="hidden" name="rutaimagenold"
                                                           value="{{$detalles[$a]['rutaimagen']}}">
                                                    <input type="hidden" name="id" value="{{$detalles[$a]['id']}}">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputState">imagen del producto</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                   id="customFileLang" lang="es"
                                                                   name="rutaimg">
                                                            <label class="custom-file-label" for="customFileLang">Seleccionar
                                                                Archivo</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleFormControlTextarea1">Descripción</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                                  style="width:100%;" name="descripcion"
                                                                  required>{{$detalles[$a]['descripcion']}}</textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn botonsubmit">Agregar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        @else
                            <h1>Error no existe este producto</h1>
                        @endif
                    </div>
        </div>
    </div>
@endsection
