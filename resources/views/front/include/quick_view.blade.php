<link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/quick_view.css')}}">
@php
   $product_name = str_replace(' ', '-', $singleproduct->product_name);
    $product_url = strtolower($product_name);
@endphp
<div class="ajax-success-modal halo-modal ajax-quickview" data-quickview-modal="" style="display: block;">
    <div class="modal-overlay">
        <div class="halo-modal-content">
            <a class="close close-modal" title="Close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px" class="icon-close">
                    <path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" font-weight="400" font-family="sans-serif" white-space="normal" overflow="visible"></path>
                </svg>

            </a>

            <div class="halo-modal-body mfp-with-anim" id="quickView-modal">
                <div class="loading-modal"></div>
                <div id="cart-modal-content"></div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="slider">
                            <!-- model thumbnail -->
                            <div id="myCarousel" class="carousel slide">
                                <!-- image slide carousel items -->
                                <div class="carousel-inner">
                                    @foreach($singleproductmultiplepic as $k=>$smplist)
                                        @if($k == 0)
                                        <?php $i=0; ?>
                                        @else
                                            <?php $i=$i+1; ?>
                                        @endif
                                    <!-- slide 1 -->
                                    <div class="item carousel-item @if($i == 0) active @endif" data-slide-number="{{$i}}">
                                        <img data-src="{{asset('pgallery/'.$smplist->productimg_img)}}" src="{{asset('pgallery/'.$smplist->productimg_img)}}" alt="" title="">
                                    </div>
                                    <!-- End slide 1 -->
                                        @endforeach

                                </div>
                                <!-- End image slide carousel items -->
                                <!-- model thumbnail image -->
                                <div class="model-thumbnail-img">
                                    <!-- model thumbnail slide -->
                                    <ul class="carousel-indicators list-inline">
                                    @foreach($singleproductmultiplepic as $k=>$smplist)
                                        @if($k == 0)
                                            <?php $i=0; ?>
                                        @else
                                            <?php $i=$i+1; ?>
                                        @endif
                                            <!-- slide 1 -->
                                            <li class="list-inline-item  @if($i == 0) active @endif">
                                                <a id="carousel-selector-{{$i}}"  @if($i == 0) class="selected" @endif data-slide-to="{{$i}}" data-target="#myCarousel">
                                                    <img data-src="{{asset('pgallery/'.$smplist->productimg_img)}}" src="{{asset('pgallery/'.$smplist->productimg_img)}}" alt="" title="">
                                                </a>
                                            </li>
                                            <!-- End slide 1 -->
                                    @endforeach


                                    </ul>
                                    <!-- End model thumbnail slide -->
                                    <!-- arrow button -->
                                    <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                    <!-- End arrow button -->
                                </div>
                                <!-- End model thumbnail image -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <h2 class="product-title"> {{$singleproduct->product_name}}</h2>
                        <div class="product-info">
                            <div class="product-stock">
                                @if($product_qty > 0)
                                    <span class="instock ">In Stock</span>
                                @elseif($product_qty <= 0)
                                    <span class="outstock">Unavailable</span>
                                @endif
                            </div>
                            <div class="product-sku">Code: <span
                                        class="variant-sku">{{$singleproduct->product_styleref}}</span></div>
                        </div>
                        <div class="pricebox">
                            @if($singleproduct->discount > 0)
                            <span class="price old-price text-danger" style="font-size: 16px" >BDT {{ $singleproduct->product_price}}</span>
                            <span class="price">BDT {{ $singleproduct->discount_product_price}}</span>
                                <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                        <span>You Save</span>
                                        <span class="product-single__save-amount"><span class="money">BDT {{ $singleproduct->product_price - $singleproduct->discount_product_price}}</span></span>
                                        <span class="off">(<span>{{$singleproduct->discount}}</span>%)</span>
                                    </span>
                            @else
                                <span class="price">BDT {{ $singleproduct->product_price}}</span>
                            @endif

                        </div>
                        <div class="sort-description">{!! $singleproduct->product_short_description !!} </div>
                        <form action="{{url('/add-to-cart')}}" method="POST" id="add-to-cart-quickview-form"  class="product-form product-form-product-template hidedropdown">
                            @csrf
                            <input type="hidden" name="productid" value="{{$singleproduct->id}}" />
                            <input type="hidden" name="productcolor" id="selectcolor" value="{{$product_color}}">
                            <input type="hidden" name="productimage" id="productImage" value="{{$cart_image->productimg_img_thm}}">

                            <div class="product-options">
                                <div class="swatch clearfix swatch-0 option1" style="width: 100%">
                                    <div class="product-form__item">
                                        <label class="label">Color:<span class="required">*</span></label>
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
                                <br>
                                <div class="swatch clearfix swatch-1 option2">
                                    <div class="product-form__item">
                                        <label class="label">Size:<span class="required">*</span> <span class="text-danger ml-3" id="outOfStock">This Size is Currently Out Of Stock</span> </label></label>
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
                                <div class="product-action clearfix">
                                    <div class="add-to-cart">
                                        @if($product_qty > 0)
                                            <button id="add-to-cart" type="submit" class="btn button-cart">
                                                <span>Add to cart</span>
                                            </button>
                                        @elseif($product_qty <= 0)
                                            <button type="button" disabled name="add" class="btn button-cart">
                                                <span>Out of stock</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function ($) {
        $('#outOfStock').hide();
        $('.outstock').click(function () {
            document.getElementById("add-to-cart").disabled = true;
            $('#outOfStock').show();
        });
        $('.stock').click(function () {
            document.getElementById("add-to-cart").disabled = false;
            $('#outOfStock').hide();
        });

    });
</script>
