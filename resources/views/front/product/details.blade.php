@extends('front.layouts.app')
@section('title')
    details
@stop
@section('content')
    <div class="container template-product">
        <div class="product-detail-container product-single-style2">
            <div class="product-single">
                <div class="row mb-2">
                    <div class="col-lg-6 col-md-7 col-sm-12 col-12"
                    ">
                    <div class="product-details-img">

                        <div class="zoompro-wrap product-zoom-right pl-20">
                            @foreach ($singleproductmultiplepic as $k=>$smplist)
                                <div class="zoompro-span">
                                    <img class="zoompro" src="{{asset('pgallery/'.$smplist->productimg_img)}}"
                                         data-zoom-image="{{asset('pgallery/'.$smplist->productimg_img)}}" alt="">
                                </div>
                                @if($k== 0)
                                    <div class="product-buttons">
                                        <a href="#" class="btn prlightbox" title="Zoom" tabindex="-1">
                                            <i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i>
                                            <span class="tooltip-label">Zoom Image</span>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>


                        <div class="lightboximages">
                            @foreach ($singleproductmultiplepic as $smplist)
                                <a href="{{asset('pgallery/'.$smplist->productimg_img)}}" data-size="1000x1280"></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                    <div class="product-sticky-style">
                        <div class="product-single__meta">
                            <h1 class="product-single__title">  {{$singleproduct->product_name}}</h1>
                            <div class="prInfoRow">
                                <div class="product-sku">Code: <span
                                        class="variant-sku">{{$singleproduct->product_styleref}}</span></div>
                                @php
                                    $product_qty = \App\Http\Controllers\ProductController::GetProductQty($singleproduct->id);
                                    $product_name = str_replace(' ', '-', $singleproduct->product_name);
                                    $product_url = strtolower($product_name);
                                @endphp
                                <div class="product-stock">
                                    @if($product_qty > 0)
                                        <span class="instock ">In Stock</span>
                                    @elseif($product_qty <= 0)
                                        <span class="outstock">Unavailable</span>
                                    @endif
                                </div>
                            </div>
                            <p class="product-single__price product-single__price-product-template">
                                @if($singleproduct->discount > 0)
                                    <span class="visually-hidden">Regular price</span>
                                    <s id="ComparePrice-product-template"><span class="money">BDT {{ $singleproduct->product_price}}</span></s>
                                    <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                            <span id="ProductPrice-product-template"><span
                                                    class="money">BDT {{ $singleproduct->discount_product_price}}</span></span>
                                        </span>
                                    <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                        <span>You Save</span>
                                        <span class="product-single__save-amount"><span class="money">BDT {{ $singleproduct->product_price - $singleproduct->discount_product_price}}</span></span>
                                        <span class="off">(<span>{{$singleproduct->discount}}</span>%)</span>
                                    </span>
                                @else
                                    <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                            <span id="ProductPrice-product-template"><span
                                                    class="money">BDT {{ $singleproduct->product_price}}</span></span>
                                        </span>

                                @endif
                            </p>
                        </div>
                        <div class="product-single__description rte">
                            <!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. -->
                        </div>
                            <form action="{{url('/add-to-cart')}}" method="POST" id="add-to-cart-quickview-form"  class="product-form product-form-product-template hidedropdown">
                                @csrf
                                <input type="hidden" name="productid" value="{{$singleproduct->id}}" />
                                <input type="hidden" name="productcolor" id="selectcolor" value="{{$product_color}}">
                                <input type="hidden" name="productimage" id="productImage" value="{{$cart_image->productimg_img_thm}}">

                            <!-- Quantity Action -->
                            <div class="product-action clearfix">
                                <div class="product-form__item--quantity">
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                    class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                            <input type="text" id="qty"  class="product-form__input qty" data-qv-qtt-id="quantity" name="quantity" value="1">

                                            <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                    class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Quantity Action -->

                            <div class="swatch clearfix swatch-0 option1">
                                <div class="product-form__item">
                                    <label class="label">Color:<span class="required">*</span> <span
                                            class="slVariant"></span></label>
                                    @foreach ($product_color_image as $i=>$color)
                                        <?php
                                        $swatch_color_album = str_replace('/', '-', $color->productalbum_name);
                                        $swatch_color_album = strtolower($swatch_color_album);
                                        ?>
                                        <div class="swatch-element color">
                                            <input class="swatchInput"
                                                   id="quickview-swatch-1-{{$color->productalbum_name}}" type="radio"
                                                   name="option-{{$i+1}}" value="{{$color->productalbum_name}}"
                                                   @if(strtolower($color->productalbum_name) == $product_color) checked @endif>

                                            <a href='{{url("shop/{$product_url}/color-{$swatch_color_album}/{$singleproduct->id}")}}'>
                                                <img class="rounded"
                                                     src="{{asset('pgallery/'.$color->productalbum_img)}}"
                                                     style="height: 30px; width: 30px">
                                            </a>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                <div class="product-form__item">
                                    <label class="label">Size:<span class="required">*</span>
                                        <span class="text-danger ml-3" id="outOfStock">This Size is Currently Out Of Stock</span> </label>
                                    @foreach($product_sizes as $s=>$size)


                                        <div data-value="XS" class="swatch-element xs available">
                                            <input class="swatchInput"
                                                   id="quickview-swatch-0-{{$size->productsize_size}}" type="radio"
                                                   name="option" value="{{$size->productsize_size}}" <?php if ($i == 0) {
                                                echo 'checked';
                                            }?>>
                                            <label class="swatchLbl medium @if($size->SizeWiseQty <= 0) outstock @else stock @endif"
                                                   for="quickview-swatch-0-{{$size->productsize_size}}"
                                                   title="{{$size->productsize_size}}">{{$size->productsize_size}}</label>
                                        </div>

                                    @endforeach
                                </div>
                            </div>

                            <!-- Product Action -->
                            <div class="product-action clearfix">
                                <div class="product-form__item--submit">
                                    @if($product_qty > 0)

                                        <button id="add-to-cart" type="submit" class="btn product-form__cart-submit action tocart">
                                            <span>Add to cart</span>
                                        </button>
                                    @elseif($product_qty <= 0)
                                        <button type="button" disabled name="add" class="btn product-form__cart-submit">
                                            <span>Out of stock</span>
                                        </button>
                                    @endif
                                </div>
                            </div>
                            <!-- End Product Action -->
                        </form>


                        <div class="tabs-listing tab-accordian-style">
                            <div class="tab-container">
                                <h3 class="acor-ttl" rel="tab1">Details</h3>
                                <div id="tab1" class="tab-content" style="display: block;">
                                    <div class="product-description rte">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                                                <h3>Specification</h3>
                                                <p>{!! $singleproduct->product_description !!}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="acor-ttl" rel="tab2">Size Chart</h3>
                                <div id="tab2" class="tab-content" style="display: none;">
                                    <h3>Women's Body Sizing Chart</h3>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <th>Size</th>
                                            <th>XS</th>
                                            <th>S</th>
                                            <th>M</th>
                                            <th>L</th>
                                            <th>XL</th>
                                        </tr>
                                        <tr>
                                            <td>Chest</td>
                                            <td>31" - 33"</td>
                                            <td>33" - 35"</td>
                                            <td>35" - 37"</td>
                                            <td>37" - 39"</td>
                                            <td>39" - 42"</td>
                                        </tr>
                                        <tr>
                                            <td>Waist</td>
                                            <td>24" - 26"</td>
                                            <td>26" - 28"</td>
                                            <td>28" - 30"</td>
                                            <td>30" - 32"</td>
                                            <td>32" - 35"</td>
                                        </tr>
                                        <tr>
                                            <td>Hip</td>
                                            <td>34" - 36"</td>
                                            <td>36" - 38"</td>
                                            <td>38" - 40"</td>
                                            <td>40" - 42"</td>
                                            <td>42" - 44"</td>
                                        </tr>
                                        <tr>
                                            <td>Regular inseam</td>
                                            <td>30"</td>
                                            <td>30½"</td>
                                            <td>31"</td>
                                            <td>31½"</td>
                                            <td>32"</td>
                                        </tr>
                                        <tr>
                                            <td>Long (Tall) Inseam</td>
                                            <td>31½"</td>
                                            <td>32"</td>
                                            <td>32½"</td>
                                            <td>33"</td>
                                            <td>33½"</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                {{--                                    <h3 class="acor-ttl" rel="tab3">Materials</h3>--}}
                                {{--                                    <div id="tab3" class="tab-content" style="display: none;">--}}
                                {{--                                        <table class="table" style="border: 0px #fff solid !important">--}}
                                {{--                                            <tbody style="border: 0px #fff solid !important">--}}
                                {{--                                            <tr>--}}
                                {{--                                                <td>Fabric</td>--}}
                                {{--                                                <td>--}}
                                {{--                                                    Cotton 98% <br>--}}
                                {{--                                                    Spandex 2%--}}
                                {{--                                                </td>--}}
                                {{--                                            </tr>--}}

                                {{--                                            <tr>--}}
                                {{--                                                <td>Lining</td>--}}
                                {{--                                                <td>--}}
                                {{--                                                    10%--}}
                                {{--                                                </td>--}}
                                {{--                                            </tr>--}}
                                {{--                                            <tr>--}}
                                {{--                                                <td>Thickness</td>--}}
                                {{--                                                <td>--}}
                                {{--                                                    25 %--}}
                                {{--                                                </td>--}}
                                {{--                                            </tr>--}}

                                {{--                                            <tr>--}}
                                {{--                                                <td>Stretch</td>--}}
                                {{--                                                <td>--}}
                                {{--                                                    25 %--}}
                                {{--                                                </td>--}}
                                {{--                                            </tr>--}}
                                {{--                                            </tbody>--}}
                                {{--                                        </table>--}}
                                {{--                                    </div>--}}

                                <h3 class="acor-ttl" rel="tab4">Care Instructions</h3>
                                <div id="tab4" class="tab-content" style="display: none;">
                                    <div class="product-description rte">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                                                <p>{!! $singleproduct->product_care !!}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="infolinks">
                            <a href="#ShippingInfo" class="mfp btn shippingInfo"><i
                                    class="anm anm-paper-l-plane"></i> Delivery &amp; Returns</a>
                            <a href="#productInquiry" class="emaillink btn"> <i class="anm anm-envelope-l"></i>
                                Enquiry</a>
                        </p>

                        <p id="freeShipMsg" class="freeShipMsg" data-price="199"><i class="fa fa-truck"
                                                                                    aria-hidden="true"></i> Getting
                            Closer! Only <b class="freeShip"><span class="money" data-currency-usd="BDT 199.00"
                                                                   data-currency="USD">BDT 3000.00</span></b> Away
                            From <b>FREE SHIPPING!</b></p>
                        <div class="userViewMsg" data-user="20" data-time="11000">
                            <i class="fa fa-users" aria-hidden="true"></i> <strong class="uersView">13</strong>
                            People are Looking for this Product
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>




    </div>


@stop
@push('script')

    <script>
        $(function () {
            var $pswp = $('.pswp')[0],
                image = [],
                getItems = function () {
                    var items = [];
                    $('.lightboximages a').each(function () {
                        var $href = $(this).attr('href'),
                            $size = $(this).data('size').split('x'),
                            item = {
                                src: $href,
                                w: $size[0],
                                h: $size[1]
                            }
                        items.push(item);
                    });
                    return items;
                }
            var items = getItems();

            $.each(items, function (index, value) {
                image[index] = new Image();
                image[index].src = value['src'];
            });
            $('.prlightbox').on('click', function (event) {
                event.preventDefault();

                var $index = $(".active-thumb").parent().attr('data-slick-index');
                $index++;
                $index = $index - 1;

                var options = {
                    index: $index,
                    bgOpacity: 0.9,
                    showHideOpacity: true
                }
                var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                lightBox.init();
            });
        });
    </script>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function ($) {
            $('#outOfStock').hide();
            $('.outstock').click(function () {
                    alert('This Size is Currently Out Of Stock')
                document.getElementById("add-to-cart").disabled = true;
                $('#outOfStock').show();
            });
            $('.stock').click(function () {
                document.getElementById("add-to-cart").disabled = false;
                $('#outOfStock').hide();
            });

        });
    </script>
@endpush
