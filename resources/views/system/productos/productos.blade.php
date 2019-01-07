@extends('app')
@section('page')

    <section>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Agregar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Propiedades</a>
            </li>
        </ul>
    </section>
    <section>
        <div class="container">
            @yield('contentproductos')
        </div>
    </section>
@endsection
