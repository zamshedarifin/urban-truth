@extends('front.layouts.app')
@section('title')
    Home
@stop
@section('content')
    <div class="container">
        <!--Home slider-->
        <div class="slideshow slideshow-wrapper">
            <div class="home-slideshow">
                <div class="slide">
                    <img class="blur-up lazyload" data-src="{{asset('front/assets/images/new/slider1.jpg')}}"
                         src="{{asset('front/assets/images/new/slider1.jpg')}}" alt="Urban truth" title=" Urban truth"/>
                    <!-- <div class="container slideshow__text-wrap slideshow__overlay left">
                        <div class="slideshow__text-content left">
                            <div class="wrap-caption left anim-tru style1">
                                <p class="mega-small-title">New collection</p>
                                <h2 class="h1 mega-title slideshow__title">Share the Love</h2>
                                <p class="mega-small-title">Something lovely for someone lovely</p>
                                <a class="btn">Shop now</a>
                            </div>
                        </div>
                    </div> -->
                </div>
                {{--                <div class="slide">--}}
                {{--                    <img class="blur-up lazyload" data-src="{{asset('front/assets/images/new/slider2.jpg')}}" src="{{asset('front/assets/images/new/slider2.jpg')}}" alt="The Powerful Theme You can Trust" title="The Powerful Theme You can Trust" />--}}
                {{--                </div>--}}
            </div>
        </div>
        <!--End Home slider-->

        <!--Body Container-->
        <div class="container">
            <!--Image Banner-->
            <div class="section imgBanners style2 no-pb-section">

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 img-banner-item">
                        <div class="imgBanner-grid-item">
                            <div class="inner">
                                <a href="#">
                                    <span class="img">
                                        <img class="blur-up lazyload"
                                             data-src="{{asset('front/assets/images/new/cat1.jpg')}}"
                                             src="{{asset('front/assets/images/new/cat1.jpg')}}" alt="Trend Alert"
                                             title="Trend Alert"/>
                                    </span>
                                </a>
                                {{--                                <div class="details w-50 center">--}}
                                {{--                                    <h3 class="title">Trend Alert</h3>--}}
                                {{--                                    <!-- <p> Vacation Must Have </p> -->--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 img-banner-item">
                        <div class="imgBanner-grid-item">
                            <div class="inner">
                                <a href="#">
                                    <span class="img">
                                        <img class="blur-up lazyload"
                                             data-src="{{asset('front/assets/images/new/cat2.jpg')}}"
                                             src="{{asset('front/assets/images/new/cat2.jpg')}}" alt="Hot Occasion"
                                             title="Hot Occasion"/>
                                    </span>
                                </a>
                                {{--                                <div class="details w-50 center">--}}
                                {{--                                    <h3 class="title">Hot Occasion</h3>--}}
                                {{--                                    <!-- <p>Weekend Fashion</p> -->--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--End Image Banner-->

            <!--New Arrivals-->
            <div class="section product-slider">
                <div class="section-header">
                    <h2>New Arrivals</h2>
                </div>
                <div class="productSlider grid-products">
                    @foreach($newArrivals as $newProduct)
                        @php
                            $medium_image = \App\Http\Controllers\ProductController::GetProductImage($newProduct->id);
                            $images = \App\Http\Controllers\ProductController::productImages($newProduct->id);
                            $colors = \App\Http\Controllers\ProductController::GetColors($newProduct->id);
                            $product_qty = \App\Http\Controllers\ProductController::GetProductQty($newProduct->id);
                             $product_name = str_replace(' ', '-', $newProduct->product_name);
                             $product_url = strtolower($product_name);
                             $color_album=str_replace('/','-',$newProduct->productalbum_name);
    						$color_album = strtolower($color_album);
                        @endphp
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload"
                                         data-src="{{asset('pgallery/'.$medium_image->productimg_img_medium)}}"
                                         src="{{asset('pgallery/'.$medium_image->productimg_img_medium)}}" alt=""
                                         title="">
                                    <!-- End image -->
                                    <!-- Hover image -->

                                    @php($i = 0)
                                    @foreach($images as $image)
                                        <img class="hover blur-up lazyload"
                                             data-src="{{asset('pgallery/'.$image->productimg_img_medium) }}"
                                             src="{{asset('pgallery/'.$image->productimg_img_medium) }}" alt=""
                                             title="">
                                        @php($i++)
                                    @endforeach
                                <!-- End hover image -->

                                    @if($product_qty > 0)
                                    <!-- <div class="new-in">New In</div> -->
                                        <div class="product-labels"><span class="lbl pr-label1">New</span></div>
                                    @elseif($product_qty <= 0)
                                        <div class="product-labels"><span class="lbl on-sale">sold out</span></div>
                                @endif
                                <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!--Product Button-->
                                <div class="button-set style1">
                                    <ul>
                                        <li>
                                            <!--Cart Button-->
                                            <form class="add" action="#" method="post">
                                                <button class="btn-icon btn btn-addto-cart btn-square" type="button"
                                                        tabindex="0">
                                                    <i class="icon anm anm-cart-l"></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </button>
                                            </form>
                                            <!--end Cart Button-->
                                        </li>
                                        <li>
                                            <!--Quick View Button-->
                                            <button href="javascript:void(0)" title="Quick View" data-id="{{$newProduct->id}}"
                                                    data-color="{{$newProduct->productalbum_name}}"
                                               class="btn-icon quick-view-popup quick-view btn-square"
                                               data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </button>
                                            <!--End Quick View Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center" style="background: #fffbfb; padding: 10px;">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="{{url("shop/{$product_url}/color-{$color_album}/{$newProduct->id}")}}">{{$newProduct->product_name}} </a>
                                    <a href="#" style="float: right; font-size: 16px; margin-top: 6px;"><i
                                            class="icon anm anm-heart-l"></i></a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    @if($newProduct->discount < 1)
                                        <span class="price">BDT {{$newProduct->product_price}}</span>
                                    @else
                                        <span class="price">BDT {{$newProduct->discount_product_price}}</span>
                                        <span class="old-price text-danger">BDT {{$newProduct->product_price}}</span>
                                        {{--                                    <del style="margin-left: 20px">BDT {{$newProduct->product_price}}</del>--}}

                                    @endif
                                </div>
                                <!-- End product price -->
                                <!--Color Variant -->
                                <ul class="swatches">
                                @foreach($colors as $color)
                                    <!--                                    --><?php // $colorName = strtolower($color->productalbum_name); ?>
                                        <li class="swatch rounded"><img
                                                src="{{asset('pgallery/'.$color->productalbum_img)}}"></li>

                                    @endforeach

                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div>
                    @endforeach
                </div>
            </div>
            <!--End New Arrivals-->

            <!--Best Seller-->

            @if(@count($bestsales)> 0)
                <div class="section product-slider " style="margin-bottom: 20px;">
                    <div class="section-header">
                        <h2>Best Sellers</h2>
                    </div>
                    <div class="productSlider grid-products">
                        @foreach($bestsales as $sale)
                            <?php
                            $medium_image = \App\Http\Controllers\ProductController::GetProductImage($sale->id);
                            $images = \App\Http\Controllers\ProductController::productImages($sale->id);
                            $colors = \App\Http\Controllers\ProductController::GetColors($sale->id);
                            $product_qty = \App\Http\Controllers\ProductController::GetProductQty($sale->id);
                            ?>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#" class="product-img">
                                        <img class="primary blur-up lazyload"
                                             data-src="{{asset('pgallery/'.$medium_image->productimg_img_medium)}}"
                                             src="{{asset('pgallery/'.$medium_image->productimg_img_medium)}}" alt=""
                                             title="">
                                        <!-- End image -->
                                        <!-- Hover image -->

                                        @php($i = 0)
                                        @foreach($images as $image)
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('pgallery/'.$image->productimg_img_medium) }}"
                                                 src="{{asset('pgallery/'.$image->productimg_img_medium) }}" alt=""
                                                 title="">
                                            @php($i++)
                                        @endforeach
                                    <!-- End image -->
                                        @if($product_qty <= 0)
                                            <span class="sold-out"><span>Sold out</span></span>
                                        @endif
                                    </a>
                                    <!-- end product image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <ul>
                                            @if($product_qty > 0)
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="#" method="post">
                                                        <button class="btn-icon btn btn-addto-cart btn-square"
                                                                type="button"
                                                                tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                            @endif
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View"
                                                   class="btn-icon quick-view-popup quick-view btn-square"
                                                   data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center" style="background: #fffbfb; padding: 10px;">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">{{$sale->product_name}} </a>
                                        <a href="#" style="float: right; font-size: 16px; margin-top: 6px;"><i
                                                class="icon anm anm-heart-l"></i></a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        @if($sale->discount < 1)
                                            <span class="price">BDT {{$sale->product_price}}</span>
                                        @else
                                            <span class="price">BDT {{$sale->discount_product_price}}</span>
                                            <span class="old-price text-danger">BDT {{$sale->product_price}}</span>
                                            {{--                                    <del style="margin-left: 20px">BDT {{$newProduct->product_price}}</del>--}}

                                        @endif
                                    </div>
                                    <!-- End product price -->
                                    <!--Color Variant -->
                                    <ul class="swatches">
                                        @foreach($colors as $color)
                                            <li class="swatch rounded">
                                                <img src="{{asset('pgallery/'.$color->productalbum_img)}}">
                                            </li>
                                        @endforeach
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                        @endforeach
                    </div>
                </div>
                <!--End Best Seller-->
            @endif
        </div>

        <!--Insta Feed -->

        <div class="section home-blog-post">
            <div class="container">
                <div class="section-header p-2">
                    <h2>Feed From Our InstaGram</h2>

                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="blog-post-slider">
                            <div class="blogpost-item">
                                <a href="#;" class="post-thumb">
                                    <img src="{{asset('front/assets')}}/images/new/blog1.jpg" alt="" title=""/>
                                </a>
                                <div class="post-detail">
                                    <h3 class="post-title"><a href="#;">Our development is your success</a></h3>
                                    <ul class="publish-detail">
                                        <li><span class="article__date">March 06, 2019</span></li>
                                        <li><i class="anm anm-comments-l"></i> <a href="#;" class="btn-link">1
                                                comment</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blogpost-item">
                                <a href="#;" class="post-thumb">
                                    <img src="{{asset('front/assets')}}/images/new/blog2.jpg" alt="" title=""/>
                                </a>
                                <div class="post-detail">
                                    <h3 class="post-title"><a href="#;">Ensuring Customer Success</a></h3>
                                    <ul class="publish-detail">
                                        <li><span class="article__date">February 11, 2019</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blogpost-item">
                                <a href="#;" class="post-thumb">
                                    <img src="{{asset('front/assets')}}/images/new/blog3.jpg" alt="" title=""/>
                                </a>
                                <div class="post-detail">
                                    <h3 class="post-title"><a href="#;">We can make your business shine!</a></h3>
                                    <ul class="publish-detail">
                                        <li><span class="article__date">February 19, 2019</span></li>
                                        <li><i class="anm anm-comments-l"></i> <a href="#;" class="btn-link">2
                                                comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End insta feed-->
    </div>


@stop

