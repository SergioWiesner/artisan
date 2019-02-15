@extends('system.ventas.ventas')
@section('contentventas')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <h3 class="titulos">Lista de ultimas ventas</h3>
                <hr>
                <ul class="nav justify-content-left">
                    @if(Auth::user()->nivelaccesso  == 10)
                        <li class="nav-item">
                            <a href="{{route('nuevaventa')}}"><i class="fas fa-shopping-bag"></i> Agregar
                                venta</a>
                        </li>
                    @endif

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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
