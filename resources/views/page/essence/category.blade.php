@extends('page.essence.index')
@section('pagina')
    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">
                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Categorias</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <ul class="sub-menu collapse show" id="clothing">
                                            @for($b = 0; $b < count($categoria); $b++)
                                                @if($categoria[$b]['id'] != 1)
                                                    <li>
                                                        <a href="{{route('categorias', ['nombre' => $categoria[$b]['nombre']])}}">{{$categoria[$b]['nombre']}}</a>
                                                    </li>
                                                @endif
                                            @endfor
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p><span></span> Productos encontrados</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Highest Rated</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach($productos as $producto)
                            <div class="row">
                                @foreach($producto->productos as $item)
                                    @if(file_exists(public_path($item->rutaimagen)))
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single-product-wrapper">
                                                <!-- Product Image -->
                                                <div class="product-img">
                                                    <img src="{{$item->rutaimagen}}"
                                                         alt="{{$item->nombre}}">
                                                    <!-- Hover Thumb -->
                                                    <img class="hover-img"
                                                         src="{{$item->rutaimagen}}"
                                                         alt="{{$item->nombre}}">

                                                    <!-- Product Badge -->
                                                    <div class="product-badge offer-badge">
                                                        <span>-30%</span>
                                                    </div>
                                                    <!-- Favourite -->
                                                    <div class="product-favourite">
                                                        <a href="#" class="favme fa fa-heart"></a>
                                                    </div>
                                                </div>

                                                <!-- Product Description -->
                                                <div class="product-description">
                                                    <span>{{$item->nombre}}</span>
                                                    <a href="{{route('producto', ['nombre' => $item->nombre,'id' => $item->id])}}">
                                                        <h6>{{$item->descripcion}}</h6>
                                                    </a>
                                                    <p class="product-price"><span class="old-price">$75.00</span>
                                                        ${{number_format($item->valor)}}
                                                    </p>

                                                    <!-- Hover Content -->
                                                    <div class="hover-content">
                                                        <!-- Add to Cart -->
                                                        <div class="add-to-cart-btn">
                                                            <a href="#" class="btn essence-btn">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                        {{$productos->links()}}
                    </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->
@endsection
