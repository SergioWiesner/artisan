@extends('system.productos.productos')
@section('contentproductos')
    <h3 class="titulos">Listar propiedades</h3>
    <hr>
    <ul class="nav justify-content-left">
        <li class="nav-item">
            <a class="nav-link active" href="#!" data-toggle="modal" data-target=".bd-example-modal-lg"><i
                    class="fas fa-plus"></i> Agregar propiedad</a>
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
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
            <th scope="col">propiedad padre</th>
            <th scope="col">categoria</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($propiedades as $propiedad)
            <tr>
                <td>{{$propiedad->id}}</td>
                <td>{{$propiedad->nombre}}</td>
                <td>@if($propiedad->estado)
                        <a href="{{route('tooglepropiedad', ['id' => $propiedad->id, 'estado' => 0])}}"><i
                                class="fas fa-check"></i> Activo</a>
                    @else
                        <a href="{{route('tooglepropiedad', ['id' => $propiedad->id, 'estado' => 1])}}"><i
                                class="fas fa-exclamation"></i> Inactivo</a>
                    @endif</td>
                <td>
                    @foreach($propiedad->categoriaPadre as $padre)
                        {{$padre->nombre}}
                    @endforeach
                </td>
                <td>{{$propiedad->categoriaPropiedad['nombre']}}</td>
                <td>
                    <div class="opcs">
                        <a href=""><i class="fas fa-pencil-alt"></i></a>
                        <a href="{{route('eliminarpropiedad', ['id' => $propiedad->id])}}"><i
                                class="fas fa-trash"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$propiedades->links() }}
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="container-fluid containermodals">
                    <h3 class="titulos">Agregar nueva propiedad</h3>
                    <hr>
                    <form action="{{route('agregarpropiedad')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="inputEmail4"
                                       placeholder="Nombre">
                            </div>
                        </div>
                        <!--------- <div class="form-group">
                             <label for="inputAddress">Valor</label>
                             <input type="text" class="form-control" id="inputAddress" name="valor" placeholder="Valor">
                         </div> ------>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputState">Categoria</label>
                                <select id="inputState" name="categoria" class="form-control">
                                    <option selected></option>
                                    @if(count($categoriapropiedades) > 0)
                                        @for($a = 0; $a < count($categoriapropiedades); $a++)
                                            <option
                                                value="{{$categoriapropiedades[$a]['id']}}">{{$categoriapropiedades[$a]['nombre']}} </option>
                                        @endfor
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputState">Propiedad padre</label>
                                <select id="inputState" name="propiedadpadre" class="form-control">
                                    <option selected></option>
                                    @if(count($propiedades) > 0)
                                        @for($a = 0; $a < count($propiedades); $a++)
                                            <option
                                                value="{{$propiedades[$a]['id']}}">{{$propiedades[$a]['nombre']}} </option>
                                        @endfor
                                    @endif
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
