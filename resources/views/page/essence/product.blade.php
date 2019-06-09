@extends('page.essence.index')
@section('pagina')
    <!-- ##### Single Product Details Area Start ##### -->
    @for($a = 0; $a < count($producto); $a++)
        <section class="single_product_details_area d-flex align-items-center">
            <!-- Single Product Thumb -->
            <div class="single_product_thumb clearfix">
                <div class="product_thumbnail_slides owl-carousel">
                    <img src="{{$producto[$a]['rutaimagen']}}" alt="{{$producto[$a]['nombre']}}"
                         style="max-height: 100vh;">
                    <img src="{{$producto[$a]['rutaimagen']}}" alt="{{$producto[$a]['nombre']}}"
                         style="max-height: 100vh;">
                    <img src="{{$producto[$a]['rutaimagen']}}" alt="{{$producto[$a]['nombre']}}"
                         style="max-height: 100vh;">
                </div>
            </div>

            <!-- Single Product Description -->
            <div class="single_product_desc clearfix">
                <span>{{Session::get('configuracionpublica')['nombresistema']}} - <a
                            href="{{route('categorias', ['nombre' => $producto[$a]['catgorias']['nombre']])}}">{{$producto[$a]['catgorias']['nombre']}}</a></span>
                <a href="#">
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
                                    <option selected>{{$producto[$a]['propiedades'][$b]['nombre']}}</option>
                                    @for($c = 0; $c < count($producto[$a]['propiedades'][$b]['valores']); $c++)
                                        <option value="{{$producto[$a]['propiedades'][$b]['valores'][$c]['productos_id']}}">{{$producto[$a]['propiedades'][$b]['valores'][$c]['valor']}}</option>
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
            </div>
        </section>
        <!-- ##### Welcome Area End ##### -->
        @if(count($producto[$a]['catgorias']['productos']) > 0)
            <section class="new_arrivals_area section-padding-80 clearfix">
                <div class="container">
                    <h2>Productos relacionados</h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="popular-products-slides owl-carousel">
                            @for($d = 0; $d < count($producto[$a]['catgorias']['productos']); $d++)
                                <!-- Single Product -->
                                    <div class="single-product-wrapper">
                                        <!-- Product Image -->
                                        <div class="product-img">
                                            <img src="{{asset($producto[$a]['catgorias']['productos'][$d]['img_url_min'])}}"
                                                 alt="{{$producto[$a]['catgorias']['productos'][$d]['nombre']}}">

                                            <!-- Hover Thumb -->
                                            <img class="hover-img"
                                                 src="{{asset($producto[$a]['catgorias']['productos'][$d]['img_hover'])}}"
                                                 alt="">
                                            <!-- Favourite -->
                                            <div class="product-favourite">
                                                <a href="#" class="favme fa fa-heart"></a>
                                            </div>
                                        </div>
                                        <!-- Product Description -->
                                        <div class="product-description">
                                            <span>{{$producto[$a]['catgorias']['productos'][$d]['descripcion']}}</span>
                                            <a href="{{route('producto', ['nombre' => $producto[$a]['catgorias']['productos'][$d]['nombre'],'id' => $producto[$a]['catgorias']['productos'][$d]['id']])}}">
                                                <h6>{{$producto[$a]['catgorias']['productos'][$d]['nombre']}}</h6>
                                            </a>
                                            <p class="product-price">
                                                ${{number_format($producto[$a]['catgorias']['productos'][$d]['valor'])}}</p>

                                            <!-- Hover Content -->
                                            <div class="hover-content">
                                                <!-- Add to Cart -->
                                                <div class="add-to-cart-btn">
                                                    <a href="#" class="btn essence-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endfor
    <!-- ##### Single Product Details Area End ##### -->
@endsection
