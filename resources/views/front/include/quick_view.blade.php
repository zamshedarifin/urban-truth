<link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/quick_view.css')}}">

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
                                    <!-- slide 1 -->
                                    <div class="item carousel-item active" data-slide-number="0">
                                        <img data-src="{{asset('front/assets')}}/images/product-images/product2.jpg" src="{{asset('front/assets')}}/images/product-images/product2.jpg" alt="" title="">
                                    </div>
                                    <!-- End slide 1 -->
                                    <!-- slide 2 -->
                                    <div class="item carousel-item" data-slide-number="1">
                                        <img data-src="{{asset('front/assets')}}/images/product-images/product2-1.jpg" src="{{asset('front/assets')}}/images/product-images/product2-1.jpg" alt="" title="">
                                    </div>
                                    <!-- End slide 3 -->
                                    <!-- slide 2 -->
                                    <div class="item carousel-item" data-slide-number="2">
                                        <img data-src="{{asset('front/assets')}}/images/product-images/product2-2.jpg" src="{{asset('front/assets')}}/images/product-images/product2-2.jpg" alt="" title="">
                                    </div>
                                    <!-- End slide 3 -->
                                    <!-- slide 4 -->
                                    <div class="item carousel-item" data-slide-number="3">
                                        <img data-src="{{asset('front/assets')}}/images/product-images/product2-3.jpg" src="{{asset('front/assets')}}/images/product-images/product2-3.jpg" alt="" title="">
                                    </div>
                                    <!-- End slide 4 -->
                                    <!-- slide 5 -->
                                    <div class="item carousel-item" data-slide-number="4">
                                        <img data-src="{{asset('front/assets')}}/images/product-images/product2-4.jpg" src="{{asset('front/assets')}}/images/product-images/product2-4.jpg" alt="" title="">
                                    </div>
                                    <!-- End slide 4 -->
                                </div>
                                <!-- End image slide carousel items -->
                                <!-- model thumbnail image -->
                                <div class="model-thumbnail-img">
                                    <!-- model thumbnail slide -->
                                    <ul class="carousel-indicators list-inline">
                                        <!-- slide 1 -->
                                        <li class="list-inline-item active">
                                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                                <img data-src="{{asset('front/assets')}}/images/product-images/product2.jpg" src="{{asset('front/assets')}}/images/product-images/product2.jpg" alt="" title="">
                                            </a>
                                        </li>
                                        <!-- End slide 1 -->
                                        <!-- slide 2 -->
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                                <img data-src="{{asset('front/assets')}}/images/product-images/product2-1.jpg" src="{{asset('front/assets')}}/images/product-images/product2-1.jpg" alt="" title="">
                                            </a>
                                        </li>
                                        <!-- End slide 2 -->
                                        <!-- slide 3 -->
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-2" class="selected" data-slide-to="2" data-target="#myCarousel">
                                                <img data-src="{{asset('front/assets')}}/images/product-images/product2-2.jpg" src="{{asset('front/assets')}}/images/product-images/product2-2.jpg" alt="" title="">
                                            </a>
                                        </li>
                                        <!-- End slide 3 -->
                                        <!-- slide 4 -->
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                                                <img data-src="{{asset('front/assets')}}/images/product-images/product2-3.jpg" src="{{asset('front/assets')}}/images/product-images/product2-3.jpg" alt="" title="">
                                            </a>
                                        </li>
                                        <!-- End slide 4 -->
                                        <!-- slide 5 -->
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                                                <img data-src="{{asset('front/assets')}}/images/product-images/product2-4.jpg" src="{{asset('front/assets')}}/images/product-images/product2-4.jpg" alt="" title="">
                                            </a>
                                        </li>
                                        <!-- End slide 5 -->
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
                        <div class="product-brand"><a href="#">Charcoal</a></div>
                        <h2 class="product-title">Product Quick View Popup</h2>

                        <div class="product-info">
                            <div class="product-stock"> <span class="instock">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                            <div class="product-sku">SKU: <span class="variant-sku">UTM-123456</span></div>
                        </div>
                        <div class="pricebox">
                            <span class="price old-price"> BDT 900.00</span>
                            <span class="price"> BDT 800.00</span>
                        </div>
                        <div class="sort-description">Avone Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion.. </div>
                        <form method="post" action="#" id="product_form--option" class="product-form">
                            <div class="product-options">
                                <div class="swatch clearfix swatch-0 option1">
                                    <div class="product-form__item">
                                        <label class="label">Color:<span class="required">*</span> <span class="slVariant">Red</span></label>
                                        <div class="swatch-element color">
                                            <input class="swatchInput" id="swatch-black0" type="radio" name="option-0" value="Black">
                                            <label class="swatchLbl small black" for="swatch-black0" title="Black"></label>
                                        </div>
                                        <div class="swatch-element color">
                                            <input class="swatchInput" id="swatch-blue1" type="radio" name="option-0" value="blue">
                                            <label class="swatchLbl small blue" for="swatch-blue1" title="Blue"></label>
                                        </div>
                                        <div class="swatch-element color">
                                            <input class="swatchInput" id="swatch-red1" type="radio" name="option-0" value="Blue">
                                            <label class="swatchLbl small red" for="swatch-red1" title="Red"></label>
                                        </div>
                                        <div class="swatch-element color">
                                            <input class="swatchInput" id="swatch-pink1" type="radio" name="option-0" value="Pink">
                                            <label class="swatchLbl color small pink" for="swatch-pink1" title="Pink"></label>
                                        </div>
                                        <div class="swatch-element color">
                                            <input class="swatchInput" id="swatch-orange1" type="radio" name="option-0" value="Orange">
                                            <label class="swatchLbl color small orange" for="swatch-orange1" title="Orange"></label>
                                        </div>
                                        <div class="swatch-element color">
                                            <input class="swatchInput" id="swatch-yellow1" type="radio" name="option-0" value="Yellow">
                                            <label class="swatchLbl color small yellow" for="swatch-yellow1" title="Yellow"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="swatch clearfix swatch-1 option2">
                                    <div class="product-form__item">
                                        <label class="label">Size:<span class="required">*</span></label>
                                        <div class="swatch-element xs">
                                            <input class="swatchInput" id="swatch-1-xs1" type="radio" name="option-1" value="XS">
                                            <label class="swatchLbl medium" for="swatch-1-xs1" title="XS">XS</label>
                                        </div>
                                        <div class="swatch-element s">
                                            <input class="swatchInput" id="swatch-1-s1" type="radio" name="option-1" value="S">
                                            <label class="swatchLbl medium" for="swatch-1-s1" title="S">S</label>
                                        </div>
                                        <div class="swatch-element m">
                                            <input class="swatchInput" id="swatch-1-m1" type="radio" name="option-1" value="M">
                                            <label class="swatchLbl medium" for="swatch-1-m1" title="M">M</label>
                                        </div>
                                        <div class="swatch-element l">
                                            <input class="swatchInput" id="swatch-1-l1" type="radio" name="option-1" value="L">
                                            <label class="swatchLbl medium" for="swatch-1-l1" title="L">L</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-action clearfix">
                                    <div class="add-to-cart">
                                        <button type="button" class="btn button-cart">
                                            <span>Add to cart</span>
                                        </button>
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
    jQuery(window).ready(function($){
        $("#product-add-to-cart").click(function(e){
            e.preventDefault();
            $(".loading-modal").show();
            var datastring = $("#add-to-cart-quickview-form").serialize();
            //alert(datastring);
            var base_url = "{{URL::to('/')}}";

            var cart_url = base_url + "/cart/popup-add-to-cart";
            $.ajax({
                url:cart_url,
                type:'POST',
                data:datastring,
                success:function(result){
                    // alert(result);
                    $(".loading-modal").hide();
                    $("#cart-modal-content").html(result).fadeIn(800).delay(3000).fadeOut(1500);
                    $('.close-modal').on('click', function (e) {
                        $("#cart-modal-content").hide();
                    });
                    $('.continue-shopping').on('click', function (e) {
                        $("#cart-modal-content").hide();
                    });
                    $("#btn_checkout_pop").on('click',function(){
                        window.location.href = base_url+"/checkout";
                    });
                    var cart_count = base_url + "/cart/item-count";
                    $.ajax({
                        url:cart_count,
                        type:'GET',
                        success:function(result){
                            if(result==0){
                                $(".counter").hide();
                                //$(".g-stickycart-count").hide();
                            }else{
                                $(".counter").show();
                                $(".counter").html(result);
                                //$(".g-stickycart-count").html(result);
                            }
                        }
                    });
                    var cart_reload = base_url + "/cart/reload";
                    $.ajax({
                        url:cart_reload,
                        type:'GET',
                        success:function(result){
                            $('.block-minicart').empty();
                            $('.block-minicart').append(result);
                            $("#btn-minicart-close").on("click", function () {
                                $(".block-minicart").removeClass("block-minicart-open");
                            });
                            $("#top-cart-btn-checkout").click(function(){
                                window.location=base_url+ "/checkout";
                            });
                            $("#top-cart-btn-cart").click(function(){
                                window.location=base_url+ "/shop-cart";
                            });
                        }
                    });

                }
            });
        });

        var output = document.getElementById('customers_view');
        setInterval(function ()
        {
            var x = Math.floor((Math.random() * 50) + 1);
            output.innerHTML = x;
        }, 3500);

        function updatePricingQuickview() {
            var quantity = parseInt($('[data-qv-qtt-id]').val());
            var p = $('.quickview-tpl #product_regular_price').val();
            var totalPrice1 = p * quantity;
            $('.quickview-tpl .total-price span').html('Tk '+totalPrice1);

        };

        $('[data-qv-qtt-id]').on('change', updatePricingQuickview);

        var buttonSlt = '[data-qv-minus-qtt], [data-qv-plus-qtt]',
            buttonElm = $(buttonSlt);

        $(document).off('click.changeQttQv', buttonSlt).on('click.changeQttQv', buttonSlt, function(e) {
            e.preventDefault();
            e.stopPropagation();

            var self = $(this),
                input = self.siblings('input[name="quantity"]'),
                oldVal = parseInt(input.val()),
                newVal = 1;

            switch (true) {
                case (self.hasClass('plus')): {
                    newVal = oldVal + 1;
                    break;
                }
                case (self.hasClass('minus') && oldVal > 1): {
                    newVal = oldVal - 1;
                    break;
                }
            }

            input.val(newVal);

            updatePricingQuickview();
        });
    });
</script>
