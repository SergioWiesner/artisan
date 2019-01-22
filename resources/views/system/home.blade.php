@extends('app')
@section('page')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
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
