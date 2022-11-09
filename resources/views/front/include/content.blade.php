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
                    <img class="blur-up lazyload" data-src="{{asset('front/assets/images/new/slider1.jpg')}}" src="{{asset('front/assets/images/new/slider1.jpg')}}" alt="Urban truth" title=" Urban truth" />
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
                                        <img class="blur-up lazyload" data-src="{{asset('front/assets/images/new/cat1.jpg')}}" src="{{asset('front/assets/images/new/cat1.jpg')}}" alt="Trend Alert" title="Trend Alert" />
                                    </span>
                                </a>
                                <div class="details w-50 center">
                                    <h3 class="title">Trend Alert</h3>
                                    <!-- <p> Vacation Must Have </p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 img-banner-item">
                        <div class="imgBanner-grid-item">
                            <div class="inner">
                                <a href="#">
                                    <span class="img">
                                        <img class="blur-up lazyload" data-src="{{asset('front/assets/images/new/cat2.jpg')}}" src="{{asset('front/assets/images/new/cat2.jpg')}}" alt="Hot Occasion" title="Hot Occasion" />
                                    </span>
                                </a>
                                <div class="details w-50 center">
                                    <h3 class="title">Hot Occasion</h3>
                                    <!-- <p>Weekend Fashion</p> -->
                                </div>
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
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-details.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('front/assets/images/product-images/product1.jpg')}}" src="{{asset('front/assets/images/product-images/product1.jpg')}}" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('front/assets/images/product-images/product1-1.jpg')}}" src="{{asset('front/assets/images/product-images/product1-1.jpg')}}" alt="" title="">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->

                            <!--Product Button-->
                            <div class="button-set style1">
                                <ul>
                                    <li>
                                        <!--Cart Button-->
                                        <form class="add" action="https://www.annimexweb.com/items/avone/cart-variant1.html" method="post">
                                            <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                <i class="icon anm anm-cart-l"></i>
                                                <span class="tooltip-label">Add to Cart</span>
                                            </button>
                                        </form>
                                        <!--end Cart Button-->
                                    </li>
                                    <li>
                                        <!--Quick View Button-->
                                        <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-l"></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                        <!--End Quick View Button-->
                                    </li>
                                    <li>
                                        <!--Wishlist Button-->
                                        <div class="wishlist-btn">
                                            <a class="btn-icon wishlist add-to-wishlist btn-square" href="#">
                                                <i class="icon anm anm-heart-l"></i>
                                                <span class="tooltip-label">Add To Wishlist</span>
                                            </a>
                                        </div>
                                        <!--End Wishlist Button-->
                                    </li>
                                    <li>
                                        <!--Compare Button-->
                                        <div class="compare-btn">
                                            <a class="btn-icon compare add-to-compare btn-square" href="#" title="Add to Compare">
                                                <i class="icon icon-reload"></i>
                                                <span class="tooltip-label">Add to Compare</span>
                                            </a>
                                        </div>
                                        <!--End Compare Button-->
                                    </li>
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-details.html">Martha Knit Top</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">BDT 399.01</span>
                            </div>
                            <!-- End product price -->

                            <!--Color Variant -->
                            <ul class="swatches">
                                <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-details.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('front/assets/images/product-images/product2.jpg')}}" src="{{asset('front/assets/images/product-images/product2.jpg')}}" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('front/assets/images/product-images/product2-1.jpg')}}" src="{{asset('front/assets/images/product-images/product2-1.jpg')}}" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->

                            <!--Countdown Timer-->
                            <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                            <!--End Countdown Timer-->

                            <!--Product Button-->
                            <div class="button-set style1">
                                <ul>
                                    <li>
                                        <!--Cart Button-->
                                        <form class="add" action="#" method="post">
                                            <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                <i class="icon anm anm-cart-l"></i>
                                                <span class="tooltip-label">Add to Cart</span>
                                            </button>
                                        </form>
                                        <!--end Cart Button-->
                                    </li>
                                    <li>
                                        <!--Quick View Button-->
                                        <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-l"></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                        <!--End Quick View Button-->
                                    </li>
                                    <li>
                                        <!--Wishlist Button-->
                                        <div class="wishlist-btn">
                                            <a class="btn-icon wishlist add-to-wishlist btn-square" href="#">
                                                <i class="icon anm anm-heart-l"></i>
                                                <span class="tooltip-label">Add To Wishlist</span>
                                            </a>
                                        </div>
                                        <!--End Wishlist Button-->
                                    </li>
                                    <li>
                                        <!--Compare Button-->
                                        <div class="compare-btn">
                                            <a class="btn-icon compare add-to-compare btn-square" href="#" title="Add to Compare">
                                                <i class="icon icon-reload"></i>
                                                <span class="tooltip-label">Add to Compare</span>
                                            </a>
                                        </div>
                                        <!--End Compare Button-->
                                    </li>
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-details.html">Innerbloom Puffer Jacket</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">BDT 199.01</span>
                            </div>
                            <!-- End product price -->

                            <!-- Color Variant -->
                            <ul class="swatches">
                                <li class="swatch small rounded black"><span class="tooltip-label">Black</span></li>
                                <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                <li class="swatch small rounded purple"><span class="tooltip-label">Purple</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-details.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('front/assets/images/product-images/product3.jpg')}}" src="{{asset('front/assets/images/product-images/product3.jpg')}}" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('front/assets/images/product-images/product3-1.jpg')}}" src="{{asset('front/assets/images/product-images/product3-1.jpg')}}" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                            <!--Product label-->
                            <div class="product-labels"><span class="lbl pr-label1">New</span></div>
                            <!--Product label-->

                            <!--Product Button-->
                            <div class="button-set style1">
                                <ul>
                                    <li>
                                        <!--Cart Button-->
                                        <form class="add" action="https://www.annimexweb.com/items/avone/cart-variant1.html" method="post">
                                            <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                <i class="icon anm anm-cart-l"></i>
                                                <span class="tooltip-label">Add to Cart</span>
                                            </button>
                                        </form>
                                        <!--end Cart Button-->
                                    </li>
                                    <li>
                                        <!--Quick View Button-->
                                        <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-l"></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                        <!--End Quick View Button-->
                                    </li>
                                    <li>
                                        <!--Wishlist Button-->
                                        <div class="wishlist-btn">
                                            <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                                <span class="tooltip-label">Add To Wishlist</span>
                                            </a>
                                        </div>
                                        <!--End Wishlist Button-->
                                    </li>
                                    <li>
                                        <!--Compare Button-->
                                        <div class="compare-btn">
                                            <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                <i class="icon icon-reload"></i>
                                                <span class="tooltip-label">Add to Compare</span>
                                            </a>
                                        </div>
                                        <!--End Compare Button-->
                                    </li>
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-details.html">Button Up Top Black</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">BDT 99.01</span>
                            </div>
                            <!-- End product price -->

                            <!-- Color Variant -->
                            <ul class="swatches">
                                <li class="swatch small rounded red"><span class="tooltip-label">red</span></li>
                                <li class="swatch small rounded orange"><span class="tooltip-label">orange</span></li>
                                <li class="swatch small rounded yellow"><span class="tooltip-label">yellow</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-details.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('front/assets/images/product-images/product1.jpg')}}" src="{{asset('front/assets/images/product-images/product1.jpg')}}" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('front/assets/images/product-images/product1-1.jpg')}}" src="{{asset('front/assets/images/product-images/product1-1.jpg')}}" alt="" title="">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->

                            <!--Product Button-->
                            <div class="button-set style1">
                                <ul>
                                    <li>
                                        <!--Cart Button-->
                                        <form class="add" action="https://www.annimexweb.com/items/avone/cart-variant1.html" method="post">
                                            <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                <i class="icon anm anm-cart-l"></i>
                                                <span class="tooltip-label">Add to Cart</span>
                                            </button>
                                        </form>
                                        <!--end Cart Button-->
                                    </li>
                                    <li>
                                        <!--Quick View Button-->
                                        <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-l"></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                        <!--End Quick View Button-->
                                    </li>
                                    <li>
                                        <!--Wishlist Button-->
                                        <div class="wishlist-btn">
                                            <a class="btn-icon wishlist add-to-wishlist btn-square" href="#">
                                                <i class="icon anm anm-heart-l"></i>
                                                <span class="tooltip-label">Add To Wishlist</span>
                                            </a>
                                        </div>
                                        <!--End Wishlist Button-->
                                    </li>
                                    <li>
                                        <!--Compare Button-->
                                        <div class="compare-btn">
                                            <a class="btn-icon compare add-to-compare btn-square" href="#" title="Add to Compare">
                                                <i class="icon icon-reload"></i>
                                                <span class="tooltip-label">Add to Compare</span>
                                            </a>
                                        </div>
                                        <!--End Compare Button-->
                                    </li>
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-details.html">Martha Knit Top</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">BDT 399.01</span>
                            </div>
                            <!-- End product price -->

                            <!--Color Variant -->
                            <ul class="swatches">
                                <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-details.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('front/assets/images/product-images/product2.jpg')}}" src="{{asset('front/assets/images/product-images/product2.jpg')}}" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('front/assets/images/product-images/product2-1.jpg')}}" src="{{asset('front/assets/images/product-images/product2-1.jpg')}}" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->

                            <!--Countdown Timer-->
                            <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                            <!--End Countdown Timer-->

                            <!--Product Button-->
                            <div class="button-set style1">
                                <ul>
                                    <li>
                                        <!--Cart Button-->
                                        <form class="add" action="#" method="post">
                                            <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                <i class="icon anm anm-cart-l"></i>
                                                <span class="tooltip-label">Add to Cart</span>
                                            </button>
                                        </form>
                                        <!--end Cart Button-->
                                    </li>
                                    <li>
                                        <!--Quick View Button-->
                                        <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-l"></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                        <!--End Quick View Button-->
                                    </li>
                                    <li>
                                        <!--Wishlist Button-->
                                        <div class="wishlist-btn">
                                            <a class="btn-icon wishlist add-to-wishlist btn-square" href="#">
                                                <i class="icon anm anm-heart-l"></i>
                                                <span class="tooltip-label">Add To Wishlist</span>
                                            </a>
                                        </div>
                                        <!--End Wishlist Button-->
                                    </li>
                                    <li>
                                        <!--Compare Button-->
                                        <div class="compare-btn">
                                            <a class="btn-icon compare add-to-compare btn-square" href="#" title="Add to Compare">
                                                <i class="icon icon-reload"></i>
                                                <span class="tooltip-label">Add to Compare</span>
                                            </a>
                                        </div>
                                        <!--End Compare Button-->
                                    </li>
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-details.html">Innerbloom Puffer Jacket</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">BDT 199.01</span>
                            </div>
                            <!-- End product price -->

                            <!-- Color Variant -->
                            <ul class="swatches">
                                <li class="swatch small rounded black"><span class="tooltip-label">Black</span></li>
                                <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                <li class="swatch small rounded purple"><span class="tooltip-label">Purple</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-details.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('front/assets/images/product-images/product3.jpg')}}" src="{{asset('front/assets/images/product-images/product3.jpg')}}" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('front/assets/images/product-images/product3-1.jpg')}}" src="{{asset('front/assets/images/product-images/product3-1.jpg')}}" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                            <!--Product label-->
                            <div class="product-labels"><span class="lbl pr-label1">New</span></div>
                            <!--Product label-->

                            <!--Product Button-->
                            <div class="button-set style1">
                                <ul>
                                    <li>
                                        <!--Cart Button-->
                                        <form class="add" action="https://www.annimexweb.com/items/avone/cart-variant1.html" method="post">
                                            <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                <i class="icon anm anm-cart-l"></i>
                                                <span class="tooltip-label">Add to Cart</span>
                                            </button>
                                        </form>
                                        <!--end Cart Button-->
                                    </li>
                                    <li>
                                        <!--Quick View Button-->
                                        <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-l"></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                        <!--End Quick View Button-->
                                    </li>
                                    <li>
                                        <!--Wishlist Button-->
                                        <div class="wishlist-btn">
                                            <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                                <span class="tooltip-label">Add To Wishlist</span>
                                            </a>
                                        </div>
                                        <!--End Wishlist Button-->
                                    </li>
                                    <li>
                                        <!--Compare Button-->
                                        <div class="compare-btn">
                                            <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                <i class="icon icon-reload"></i>
                                                <span class="tooltip-label">Add to Compare</span>
                                            </a>
                                        </div>
                                        <!--End Compare Button-->
                                    </li>
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-details.html">Button Up Top Black</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">BDT 99.01</span>
                            </div>
                            <!-- End product price -->

                            <!-- Color Variant -->
                            <ul class="swatches">
                                <li class="swatch small rounded red"><span class="tooltip-label">red</span></li>
                                <li class="swatch small rounded orange"><span class="tooltip-label">orange</span></li>
                                <li class="swatch small rounded yellow"><span class="tooltip-label">yellow</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>


                </div>
            </div>
            <!--End New Arrivals-->

            <!--Best Seller-->
            <div class="section product-slider " style="margin-bottom: 20px;">
                <div class="section-header">
                    <h2>Best Sellers</h2>
                </div>
                <div class="productSlider grid-products">
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-details.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('front/assets')}}/images/product-images/product1.jpg" src="{{asset('front/assets')}}/images/product-images/product1.jpg" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('front/assets')}}/images/product-images/product1-1.jpg" src="{{asset('front/assets')}}/images/product-images/product1-1.jpg" alt="" title="">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->

                            <!--Product Button-->
                            <div class="button-set style1">
                                <ul>
                                    <li>
                                        <!--Cart Button-->
                                        <form class="add" action="https://www.annimexweb.com/items/avone/cart-variant1.html" method="post">
                                            <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                <i class="icon anm anm-cart-l"></i>
                                                <span class="tooltip-label">Add to Cart</span>
                                            </button>
                                        </form>
                                        <!--end Cart Button-->
                                    </li>
                                    <li>
                                        <!--Quick View Button-->
                                        <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-l"></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                        <!--End Quick View Button-->
                                    </li>
                                    <li>
                                        <!--Wishlist Button-->
                                        <div class="wishlist-btn">
                                            <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                                <span class="tooltip-label">Add To Wishlist</span>
                                            </a>
                                        </div>
                                        <!--End Wishlist Button-->
                                    </li>
                                    <li>
                                        <!--Compare Button-->
                                        <div class="compare-btn">
                                            <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                <i class="icon icon-reload"></i>
                                                <span class="tooltip-label">Add to Compare</span>
                                            </a>
                                        </div>
                                        <!--End Compare Button-->
                                    </li>
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-details.html">Martha Knit Top</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">BDT 399.01</span>
                            </div>
                            <!-- End product price -->

                            <!--Color Variant -->
                            <ul class="swatches">
                                <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-details.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('front/assets')}}/images/product-images/product2.jpg" src="{{asset('front/assets')}}/images/product-images/product2.jpg" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('front/assets')}}/images/product-images/product2-1.jpg" src="{{asset('front/assets')}}/images/product-images/product2-1.jpg" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->

                            <!--Countdown Timer-->
                            <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                            <!--End Countdown Timer-->

                            <!--Product Button-->
                            <div class="button-set style1">
                                <ul>
                                    <li>
                                        <!--Cart Button-->
                                        <form class="add" action="https://www.annimexweb.com/items/avone/cart-variant1.html" method="post">
                                            <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                <i class="icon anm anm-cart-l"></i>
                                                <span class="tooltip-label">Add to Cart</span>
                                            </button>
                                        </form>
                                        <!--end Cart Button-->
                                    </li>
                                    <li>
                                        <!--Quick View Button-->
                                        <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-l"></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                        <!--End Quick View Button-->
                                    </li>
                                    <li>
                                        <!--Wishlist Button-->
                                        <div class="wishlist-btn">
                                            <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                                <span class="tooltip-label">Add To Wishlist</span>
                                            </a>
                                        </div>
                                        <!--End Wishlist Button-->
                                    </li>
                                    <li>
                                        <!--Compare Button-->
                                        <div class="compare-btn">
                                            <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                <i class="icon icon-reload"></i>
                                                <span class="tooltip-label">Add to Compare</span>
                                            </a>
                                        </div>
                                        <!--End Compare Button-->
                                    </li>
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-details.html">Innerbloom Puffer Jacket</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">BDT 199.01</span>
                            </div>
                            <!-- End product price -->

                            <!-- Color Variant -->
                            <ul class="swatches">
                                <li class="swatch small rounded black"><span class="tooltip-label">Black</span></li>
                                <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                <li class="swatch small rounded purple"><span class="tooltip-label">Purple</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-details.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('front/assets')}}/images/product-images/product3.jpg" src="{{asset('front/assets')}}/images/product-images/product3.jpg" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('front/assets')}}/images/product-images/product3-1.jpg" src="{{asset('front/assets')}}/images/product-images/product3-1.jpg" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                            <!--Product label-->
                            <div class="product-labels"><span class="lbl pr-label1">New</span></div>
                            <!--Product label-->

                            <!--Product Button-->
                            <div class="button-set style1">
                                <ul>
                                    <li>
                                        <!--Cart Button-->
                                        <form class="add" action="https://www.annimexweb.com/items/avone/cart-variant1.html" method="post">
                                            <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                <i class="icon anm anm-cart-l"></i>
                                                <span class="tooltip-label">Add to Cart</span>
                                            </button>
                                        </form>
                                        <!--end Cart Button-->
                                    </li>
                                    <li>
                                        <!--Quick View Button-->
                                        <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-l"></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                        <!--End Quick View Button-->
                                    </li>
                                    <li>
                                        <!--Wishlist Button-->
                                        <div class="wishlist-btn">
                                            <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                                <span class="tooltip-label">Add To Wishlist</span>
                                            </a>
                                        </div>
                                        <!--End Wishlist Button-->
                                    </li>
                                    <li>
                                        <!--Compare Button-->
                                        <div class="compare-btn">
                                            <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                <i class="icon icon-reload"></i>
                                                <span class="tooltip-label">Add to Compare</span>
                                            </a>
                                        </div>
                                        <!--End Compare Button-->
                                    </li>
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-details.html">Button Up Top Black</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">BDT 99.01</span>
                            </div>
                            <!-- End product price -->

                            <!-- Color Variant -->
                            <ul class="swatches">
                                <li class="swatch small rounded red"><span class="tooltip-label">red</span></li>
                                <li class="swatch small rounded orange"><span class="tooltip-label">orange</span></li>
                                <li class="swatch small rounded yellow"><span class="tooltip-label">yellow</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-details.html" class="product-img">
                                <!-- image -->
                                <img class="blur-up lazyload" src="{{asset('front/assets')}}/images/product-images/product8-1.jpg" alt="" title="">
                                <!-- End image -->
                                <span class="sold-out"><span>Sold out</span></span>
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-details.html">Sunset Sleep Scarf Top</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">BDT 99.01</span>
                            </div>
                            <!-- End product price -->

                            <!-- Color Variant -->
                            <ul class="swatches">
                                <li class="swatch small rounded black"><span class="tooltip-label">black</span></li>
                                <li class="swatch small rounded navy"><span class="tooltip-label">navy</span></li>
                                <li class="swatch small rounded darkgreen"><span class="tooltip-label">darkgreen</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-details.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('front/assets')}}/images/product-images/product6.jpg" src="{{asset('front/assets')}}/images/product-images/product6.jpg" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('front/assets')}}/images/product-images/product6-1.jpg" src="{{asset('front/assets')}}/images/product-images/product6-1.jpg" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->

                            <!--Product Button-->
                            <div class="button-set style1">
                                <ul>
                                    <li>
                                        <!--Cart Button-->
                                        <form class="add" action="https://www.annimexweb.com/items/avone/cart-variant1.html" method="post">
                                            <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                <i class="icon anm anm-cart-l"></i>
                                                <span class="tooltip-label">Add to Cart</span>
                                            </button>
                                        </form>
                                        <!--end Cart Button-->
                                    </li>
                                    <li>
                                        <!--Quick View Button-->
                                        <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-l"></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                        <!--End Quick View Button-->
                                    </li>
                                    <li>
                                        <!--Wishlist Button-->
                                        <div class="wishlist-btn">
                                            <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                                <span class="tooltip-label">Add To Wishlist</span>
                                            </a>
                                        </div>
                                        <!--End Wishlist Button-->
                                    </li>
                                    <li>
                                        <!--Compare Button-->
                                        <div class="compare-btn">
                                            <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                <i class="icon icon-reload"></i>
                                                <span class="tooltip-label">Add to Compare</span>
                                            </a>
                                        </div>
                                        <!--End Compare Button-->
                                    </li>
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-details.html">Backpack With Contrast Bow</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">BDT 39.01</span>
                            </div>
                            <!-- End product price -->

                            <!-- Color Variant -->
                            <ul class="swatches">
                                <li class="swatch small rounded black"><span class="tooltip-label">black</span></li>
                                <li class="swatch small rounded maroon"><span class="tooltip-label">maroon</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-details.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('front/assets')}}/images/product-images/product4.jpg" src="{{asset('front/assets')}}/images/product-images/product4.jpg" alt="" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{asset('front/assets')}}/images/product-images/product4-1.jpg" src="{{asset('front/assets')}}/images/product-images/product4-1.jpg" alt="" title="">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                            <!--Product label-->
                            <div class="product-labels"><span class="lbl pr-label2">Hot</span></div>
                            <!--Product label-->
                            <!--Product Button-->
                            <div class="button-set style1">
                                <ul>
                                    <li>
                                        <!--Cart Button-->
                                        <form class="add" action="#" method="post">
                                            <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0"  data-toggle="modal" data-target="#minicart-drawer">
                                                <i class="icon anm anm-cart-l"></i>
                                                <span class="tooltip-label">Add to Cart</span>
                                            </button>
                                        </form>
                                        <!--end Cart Button-->
                                    </li>

                                    <li>
                                        <!--Quick View Button-->
                                        <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-l"></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                        <!--End Quick View Button-->
                                    </li>

                                    <li>
                                        <!--Wishlist Button-->
                                        <div class="wishlist-btn">
                                            <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                                <span class="tooltip-label">Add To Wishlist</span>
                                            </a>
                                        </div>
                                        <!--End Wishlist Button-->
                                    </li>

                                    <li>
                                        <!--Compare Button-->
                                        <div class="compare-btn">
                                            <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                <i class="icon icon-reload"></i>
                                                <span class="tooltip-label">Add to Compare</span>
                                            </a>
                                        </div>
                                        <!--End Compare Button-->
                                    </li>

                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-details.html">Toledo Mules shoes</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">BDT 299.01</span>
                            </div>
                            <!-- End product price -->

                            <!-- Color Variant -->
                            <ul class="swatches">
                                <li class="swatch small rounded gray"><span class="tooltip-label">gray</span></li>
                                <li class="swatch small rounded red"><span class="tooltip-label">red</span></li>
                                <li class="swatch small rounded orange"><span class="tooltip-label">orange</span></li>
                                <li class="swatch small rounded yellow"><span class="tooltip-label">yellow</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>

                </div>
            </div>
            <!--End Best Seller-->

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
                                        <li><i class="anm anm-comments-l"></i> <a href="#;" class="btn-link">1 comment</a></li>
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
                                        <li><i class="anm anm-comments-l"></i> <a href="#;" class="btn-link">2 comments</a></li>
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
