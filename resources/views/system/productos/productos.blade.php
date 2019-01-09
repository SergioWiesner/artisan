@extends('app')
@section('page')
    <section>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('productos')}}">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('propiedades')}}">Propiedades</a>
            </li>
        </ul>
    </section>
    <section>
        <div class="container">
            @yield('contentproductos')
        </div>
    </section>
@endsection
