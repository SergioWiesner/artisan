@extends('app')
@section('page')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <h4>Ranking de ventas hoy</h4>
                <hr>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Numero</th>
                        <th scope="col">Bodega</th>
                        <th scope="col">Ventas</th>
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
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-9">
                <h4>Productos</h4>
                <hr>
                <div class="card-columns">
                    @foreach($productos as $product)
                        @if(!is_null($product->rutaimagen))
                            <a href="{{route('verproducto', ['id' => $product->id])}}">
                                <div class="card">
                                    <img class="card-img-top" src="{{$product->rutaimagen}}" alt="{{$product->nombre}}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->nombre}}</h5>
                                        <p class="card-text">{{$product->descripcion}}</p>
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="{{route('verproducto', ['id' => $product->id])}}">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->nombre}}</h5>
                                        <p class="card-text">{{$product->descripcion}}</p>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
                {{$productos->links()}}
            </div>
        </div>
    </div>
@endsection
