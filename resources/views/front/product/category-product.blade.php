@extends('front.layouts.app')
@section('title')
    {{$childCategory->title}}
@stop
@section('content')

    <!--Body Container-->
    <div class="container">
        <div class="page-title">
            <img src="{{asset('front/assets/images/women-banner.jpg')}}"
                 data-src="{{asset('front/assets/images/women-banner.jpg')}}" alt="">
        </div>
    </div>
    <!--End Breadcrumbs-->
    <div class="container">
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                <div class="sidebar_tags">
                    <!--Categories-->
                    <div class="sidebar_widget categories filter-widget">
                        <div class="widget-title"><h2>Categories</h2></div>
                        <div class="widget-content" style="">
                            <ul class="sidebar_categories">

                                @foreach($categories as $filter)
                                    <li class="level1"><a href="{{route('category',$filter->slug)}}"
                                                          class="site-nav">{{$filter->title}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <!--Categories-->
                    <!--Price Filter-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Price</h2>
                        </div>
                        <form action="#" method="post" class="price-filter">
                            <div id="slider-range"
                                 class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"
                                     style="left: 0%; width: 46.8085%;"></div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                      style="left: 0%;"></span>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                      style="left: 46.8085%;"></span>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="no-margin"><input id="amount" type="text"></p>
                                </div>
                                <div class="col-6 text-right margin-25px-top">
                                    <button class="btn btn-secondary btn--small">filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Price Filter-->
                    <!--Size Swatches-->
                    <div class="sidebar_widget filterBox filter-widget size-swacthes">
                        <div class="widget-title"><h2>Size</h2></div>
                        <div class="filter-color swacth-list">
                            <ul>
                                <li><span class="swacth-btn">X</span><span class="tooltip-label">X</span></li>
                                <li><span class="swacth-btn">XL</span><span class="tooltip-label">XL</span></li>
                                <li><span class="swacth-btn">XLL</span><span class="tooltip-label">XLL</span></li>
                                <li><span class="swacth-btn">M</span><span class="tooltip-label">M</span></li>
                                <li><span class="swacth-btn">L</span><span class="tooltip-label">L</span></li>
                                <li><span class="swacth-btn">S</span><span class="tooltip-label">S</span></li>
                                <li><span class="swacth-btn">XXL</span><span class="tooltip-label">XLL</span></li>
                                <li><span class="swacth-btn">XS</span><span class="tooltip-label">XS</span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Size Swatches-->

                </div>
            </div>
            <!--End Sidebar-->
            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">

                <div class="toolbar">
                    <div class="filters-toolbar-wrapper">
                        <div class="row">
                            <div
                                class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                <a href="#" title="Grid View" class="change-view change-view--active">
                                    <i class="anm anm-th" aria-hidden="true"></i>
                                </a>

                            </div>
                            <div
                                class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                <span class="filters-toolbar__product-count">Showing: {{@count($catWiseProducts)}} Products</span>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 text-right">
                                <div class="filters-toolbar__item">
                                    <label for="SortBy" class="hidden">Sort</label>
                                    <select name="SortBy" id="SortBy"
                                            class="filters-toolbar__input filters-toolbar__input--sort">
                                        <option value="title-ascending" selected="selected">Sort</option>
                                        <option>Best Selling</option>
                                        <option>Alphabetically, A-Z</option>
                                        <option>Alphabetically, Z-A</option>
                                        <option>Price, low to high</option>
                                        <option>Price, high to low</option>
                                        <option>Date, new to old</option>
                                        <option>Date, old to new</option>
                                    </select>
                                    <input class="collection-header__default-sort" type="hidden" value="manual">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Toolbar-->
                <!--Product Grid-->
                <div class="product-load-more">
                    <div class="grid-products grid--view-items">
                        <div class="row">


                            @foreach($catWiseProducts as $catProduct)
                                <?php
                                $medium_image = \App\Http\Controllers\ProductController::GetProductImage($catProduct->id);
                                $images = \App\Http\Controllers\ProductController::productImages($catProduct->id);
                                $colors = \App\Http\Controllers\ProductController::GetColors($catProduct->id);
                                $product_qty = \App\Http\Controllers\ProductController::GetProductQty($catProduct->id);
                                ?>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item" style="display: block;">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#" class="product-img">
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('pgallery/'.$medium_image->productimg_img_medium)}}"
                                                 src="{{asset('pgallery/'.$medium_image->productimg_img_medium)}}"
                                                 alt=""
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
                                    <div class="product-details text-center"
                                         style="background: #fffbfb; padding: 10px;">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">{{$catProduct->product_name}} </a>
                                            <a href="#" style="float: right; font-size: 16px; margin-top: 6px;"><i
                                                    class="icon anm anm-heart-l"></i></a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            @if($catProduct->discount < 1)
                                                <span class="price">BDT {{$catProduct->product_price}}</span>
                                            @else
                                                <span class="price">BDT {{$catProduct->discount_product_price}}</span>
                                                <span
                                                    class="old-price text-danger">BDT {{$catProduct->product_price}}</span>
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
                        <!--End Product Grid-->
                        <!--Load More Button-->
                        {{--                        <div class="infinitpaginOuter">--}}
                        {{--                            <div class="infinitpagin">--}}
                        {{--                                <a href="#" class="btn loadMore">Load More</a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <!--End Load More Button-->
                    </div>
                </div>
                <!--End Main Content-->
            </div>

        </div><!--End Body Container-->

    </div>
@stop

