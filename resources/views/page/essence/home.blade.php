@extends('page.essence.index')
@section('pagina')
    <script src="{{asset('js/jquery.vide.min.js')}}"></script>
    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay" id="block" data-vide-bg="{{asset('videos/fondo3.mp4')}}"
             data-vide-options="loop: true, muted: true">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h1>{{Session::get('configuracionpublica')['nombresistema']}}</h1>
                        <h3>Una tienda virtual de artesanos para el mundo.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="welcome_area bg-img background-overlay"
             style="background-image: url({{asset('videos/fondo3.png')}})">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h1>{{Session::get('configuracionpublica')['nombresistema']}}</h1>
                        <h3>Una tienda virtual de artesanos para el mundo.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->
    @if(count($productos) > 0)
        @for($c = 0; $c < (count($productos)%2); $c++)
            <section class="new_arrivals_area section-padding-80 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="popular-products-slides owl-carousel">
                            @for($a = 0; $a < 8; $a++)
                                <!-- Single Product -->
                                    <div class="single-product-wrapper">
                                        <!-- Product Image -->
                                        <div class="product-img">
                                            <img src="{{asset($productos[$a]['img_url_min'])}}"
                                                 alt="{{$productos[$a]['nombre']}}" class="lazy"
                                                 data-original="{{asset($productos[$a]['img_url_min'])}}">

                                            <!-- Hover Thumb -->
                                            <img class="hover-img"
                                                 src="{{asset($productos[$a]['img_hover'])}}"
                                                 alt="{{$productos[$a]['nombre']}}" class="lazy"
                                                 data-original="{{asset($productos[$a]['img_url_min'])}}">
                                            <!-- Favourite -->
                                            <div class="product-favourite">
                                                <a href="#" class="favme fa fa-heart"></a>
                                            </div>
                                        </div>
                                        <!-- Product Description -->
                                        <div class="product-description">
                                            <span>{{$productos[$a]['descripcion']}}</span>
                                            <a href="{{route('producto', ['nombre' => $productos[$a]['nombre'],'id' => $productos[$a]['id']])}}">
                                                <h6>{{$productos[$a]['nombre']}}</h6>
                                            </a>
                                            <p class="product-price">
                                                ${{number_format($productos[$a]['valor'])}}</p>

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
        @endfor
    @endif
    <!-- ##### CTA Area Start ##### -->
    {{--    <div class="cta-area">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-12">--}}
    {{--                    <div class="cta-content bg-img background-overlay"--}}
    {{--                         style="background-image: url({{asset('page/essence/img/bg-img/bg-5.jpg')}});">--}}
    {{--                        <div class="h-100 d-flex align-items-center justify-content-end">--}}
    {{--                            <div class="cta--text">--}}
    {{--                                <h6>-60%</h6>--}}
    {{--                                <h2>Global Sale</h2>--}}
    {{--                                <a href="#" class="btn essence-btn">Buy Now</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- ##### CTA Area End ##### -->
    <!-- ##### New Arrivals Area End ##### -->
    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
            @for($b = 0; $b < count($categoria); $b++)
                @if($categoria[$b]['id'] != 1)
                    <!-- Single Catagory -->
                        <div class="col-12 col-sm-6 col-md-4" style="padding: 1%;">
                            <div class="single_catagory_area2 d-flex align-items-center justify-content-center bg-img"
                                 style="background-image: url({{asset($categoria[$b]['rutaimg'])}});">
                                <div class="catagory-content">
                                    <a href="{{route('categorias', ['nombre' => $categoria[$b]['nombre']])}}">{{$categoria[$b]['nombre']}}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->
@endsection
