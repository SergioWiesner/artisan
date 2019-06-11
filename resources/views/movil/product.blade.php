@extends('movil.main')
@section('contenido')
    <section class="productgalery">
        @for($a = 0; $a < count($producto); $a++)
            <h1>{{$producto[$a]['nombre']}}</h1>
            <p>{{$producto[$a]['descripcion']}}</p>
            <p>${{number_format($producto[$a]['valor'])}}</span>${{number_format($producto[$a]['valor'])}}</p>
            @if(count($producto[$a]['propiedades']) > 0)
                <form class="cart-form clearfix" method="post">
                    <div class="select-box d-flex mt-50 mb-30">
                        @for($b = 0; $b < count($producto[$a]['propiedades']); $b++)

                            <select name="select" id="productSize" class="mr-5">
                                <option selected>{{$producto[$a]['propiedades'][$b]['nombre']}}</option>
                                @for($c = 0; $c < count($producto[$a]['propiedades'][$b]['valores']); $c++)
                                    <option
                                        value="{{$producto[$a]['propiedades'][$b]['valores'][$c]['productos_id']}}">{{$producto[$a]['propiedades'][$b]['valores'][$c]['valor']}}</option>
                                @endfor
                            </select>
                        @endfor
                    </div>
                    <!-- Cart & Favourite Box -->
                    <div class="cart-fav-box d-flex align-items-center">
                        <!-- Cart -->
                        <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart
                        </button>
                        <!-- Favourite -->
                        <div class="product-favourite ml-4">
                            <a href="#" class="favme fa fa-heart"></a>
                        </div>
                    </div>
                </form>
            @endif
        @endfor
    </section>

@endsection
