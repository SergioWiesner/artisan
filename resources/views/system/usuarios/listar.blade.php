@extends('system.usuarios.usuarios')
@section('contentusuarios')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Teléfono</th>
        </tr>
        </thead>
        <tbody>
        @php
            $a = 0;
        @endphp
        @foreach($usuarios as $us)
            <tr>
                <th scope="row">{{$a++}}</th>
                <td>{{$us->name}}</td>
                <td>{{$us->email}}</td>
                <td>{{$us->telefono}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
