@extends('system.usuarios.usuarios')
@section('contentusuarios')
    <div class="container-fluid">
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
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Producto</th>
                                                <th scope="col">Valor</th>
                                                <th scope="col"></th>
                                                <th scope="col">Fecha compra</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if(count($detalles[$a]['compras']) > 0)
                                                @for($d = 0; $d < count($detalles[$a]['compras']); $d++)
                                                    <tr>
                                                        <td>{{$detalles[$a]['compras'][$d]['cantidad']}}</td>
                                                        <td>{{$detalles[$a]['compras'][$d]['productos']['nombre']}}</td>
                                                        <td>{{number_format($detalles[$a]['compras'][$d]['productos']['valor'])}}</td>
                                                        <td>
                                                            <a href="{{route('verproducto', ['id' => $detalles[$a]['compras'][$d]['id']])}}"><i
                                                                    class="fas fa-eye"></i></a>
                                                        </td>
                                                        <td>{{$detalles[$a]['compras'][$d]['created_at']}}</td>
                                                    </tr>
                                                @endfor
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="titulos">Lista de ventas</h3>
                                        <hr>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Metodo de pago</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Items</th>
                                                <th scope="col">Fecha venta</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if(count($detalles[$a]['ventas']) > 0)
                                                @for($e = 0; $e < count($detalles[$a]['ventas']); $e++)
                                                    <tr>
                                                        <td>{{$detalles[$a]['ventas'][$e]['metododepago']['nombre']}}</td>
                                                        <td>{{number_format($detalles[$a]['ventas'][$e]['total'])}}</td>
                                                        <td>{{count($detalles[$a]['ventas'][$e]['carrito'])}}</td>
                                                        <td>{{$detalles[$a]['ventas'][$e]['created_at']}}</td>
                                                        <td>
                                                            <a href=""><i
                                                                    class="fas fa-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                @endfor
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @endfor
                    </div>
@endsection
