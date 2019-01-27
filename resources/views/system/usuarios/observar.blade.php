@extends('system.usuarios.usuarios')
@section('contentusuarios')
    <div class="container">
        <div class="row">
            @for($a = 0; $a < count($detalles); $a++)
                @if(!is_null($detalles[$a]['rutaimg']))
                    <div class="col-md-3">
                        <img src="{{$detalles[$a]['rutaimg']}}" alt="{{$detalles[$a]['name']}}" style="width:100%;">
                    </div>
                    <div class="col-md-9">
                        @else
                            <div class="col-md-12">
                                @endif
                                <div class="row infousuario">
                                    <div class="col-12">
                                        <h3 class="titulos">{{$detalles[$a]['name']}}</h3>
                                        <hr>
                                        <ul class="nav justify-content-center">
                                            <li class="nav-item">
                                                <a href="#!" class="nav-link active" data-toggle="modal"
                                                   data-target=".bd-example-modal-lg"><i
                                                        class="fas fa-user"></i> Editar </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#!" class="nav-link active" data-toggle="modal"
                                                   data-target=".bd-example-modal-lg"><i
                                                        class="fas fa-user"></i> Desactivar</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3"><h4>Correo:</h4> {{$detalles[$a]['email']}}</div>
                                    <div class="col-md-2"><h4>Teléfono:</h4> {{$detalles[$a]['telefono']}}</div>
                                    <div class="col-md-4">
                                        <h4>Documento:</h4> {{$detalles[$a]['tipodocumento']['nombre']}}
                                        No. {{$detalles[$a]['documento']}}</div>

                                    <div class="col-md-2">
                                        <h4>Perfil:</h4>
                                        @for($b = 0; $b < count($detalles[$a]['perfiles']); $b++)
                                            - {{$detalles[$a]['perfiles'][$b]['nombre']}}
                                        @endfor
                                    </div>
                                    <div class="col-md-1">
                                        <h4>Acceso</h4>
                                        {{$detalles[$a]['nivelaccesso']}}
                                    </div>
                                    <div class="col-md-3">
                                        <h4>Bodegas:</h4>
                                        @for($c = 0; $c < count($detalles[$a]['perfiles']); $c++)
                                            {{$detalles[$a]['bodegas'][$c]['referencia']}}
                                            - {{$detalles[$a]['bodegas'][$c]['nombre']}},
                                        @endfor
                                    </div>
                                    <div class="col-md-4"><h4>Dirección:</h4> {{$detalles[$a]['direccion']}}
                                        , {{$detalles[$a]['ciudad']}} </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="titulos">Lista de compras</h3>
                                        <hr>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="titulos">Lista de ventas</h3>
                                        <hr>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @endfor
                    </div>
@endsection
