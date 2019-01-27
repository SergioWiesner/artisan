@extends('system.usuarios.usuarios')
@section('contentusuarios')
    <div class="row detallesusuario">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <h3 class="titulos">Lista de usuarios</h3>
            <hr>
            <ul class="nav justify-content-left">
                <li class="nav-item">
                    <a href="#!" class="nav-link active" data-toggle="modal" data-target=".bd-example-modal-lg"><i
                            class="fas fa-user"></i> Agregar
                        usuario</a>
                </li>
            </ul>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Bodega</th>
                    <th scope="col">Rol</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $us)
                    <tr>
                        <th>{{$us->name}}</th>
                        <td>{{$us->email}}</td>
                        <td>{{$us->telefono}}</td>
                        <td>@for($a = 0; $a < count($us->bodegas); $a++)
                                - {{$us->bodegas[$a]->nombre}}
                            @endfor
                        </td>
                        <td>
                            @for($c = 0; $c < count($us->bodegas); $c++)
                                - {{$us->perfiles[$c]->nombre}}
                            @endfor
                        </td>
                        <td>
                            <a href="{{route('detallesusuarios', ['id' => $us->id])}}"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @endsection
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nombres</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                   placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Correos</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                   placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Contraseña</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                   placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Teléfono</label>
                            <input type="teléfono" class="form-control" id="exampleFormControlInput1"
                                   placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Documento</label>
                            <input type="teléfono" class="form-control" id="exampleFormControlInput1"
                                   placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Dirección</label>
                            <input type="teléfono" class="form-control" id="exampleFormControlInput1"
                                   placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tipo documento</label>
                            <select class="form-control" id="exampleFormControlSelect1" required>
                                <option selected></option>
                                @for($a = 0; $a < count($documentos); $a++)
                                    <option value="{{$documentos[$a]['id']}}">{{$documentos[$a]['nombre']}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nivel de acceso</label>
                            <select class="form-control" id="exampleFormControlSelect1">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
