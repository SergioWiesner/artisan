@extends('page.essence.index')
@section('pagina')
    <!-- ##### Single Product Details Area Start ##### -->
    @for($a = 0; $a < count($producto); $a++)
        <section class="single_product_details_area d-flex align-items-center">
            <!-- Single Product Thumb -->
            <div class="single_product_thumb clearfix">
                <div class="product_thumbnail_slides owl-carousel">
                    <img src="{{$producto[$a]['rutaimagen']}}" alt="{{$producto[$a]['nombre']}}" style="max-height: 100vh;">
                    <img src="{{$producto[$a]['rutaimagen']}}" alt="{{$producto[$a]['nombre']}}" style="max-height: 100vh;">
                    <img src="{{$producto[$a]['rutaimagen']}}" alt="{{$producto[$a]['nombre']}}" style="max-height: 100vh;">
                </div>
            </div>

            <!-- Single Product Description -->
            <div class="single_product_desc clearfix">
                <span>{{Session::get('configuracionpublica')['nombresistema']}}</span>
                <a href="cart.html">
                    <h2>{{$producto[$a]['nombre']}}</h2>
                </a>
                <p class="product-price"><span
                            class="old-price">${{number_format($producto[$a]['valor'])}}</span>${{number_format($producto[$a]['valor'])}}
                </p>
                <p class="product-desc">{{$producto[$a]['descripcion']}}</p>
                @if(count($producto[$a]['propiedades']) > 0)
                    <form class="cart-form clearfix" method="post">

                        <div class="select-box d-flex mt-50 mb-30">
                            @for($b = 0; $b < count($producto[$a]['propiedades']); $b++)
                                <select name="select" id="productSize" class="mr-5">
                                    <option value="value">Size: XL</option>
                                    <option value="value">Size: X</option>
                                    <option value="value">Size: M</option>
                                    <option value="value">Size: S</option>
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
            </div>
        </section>
    @endfor
    <!-- ##### Single Product Details Area End ##### -->
@endsection
