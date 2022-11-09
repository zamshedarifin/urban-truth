<!--MiniCart Drawer-->
<div class="minicart-right-drawer modal right fade" id="minicart-drawer">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="cart-drawer" class="block block-cart">
                <a href="javascript:void(0);" class="close-cart" data-dismiss="modal" aria-label="Close"><i class="anm anm-times-r"></i></a>
                <h4>Your cart (2 Items)</h4>
                <div class="minicart-content">
                    <ul class="clearfix">
                        <li class="item clearfix">
                            <a class="product-image" href="#">
                                <img src="{{asset('front/assets')}}/images/product-images/cart-page-img2.jpg" alt="" title="">
                            </a>
                            <div class="product-details">
                                <a href="#" class="remove"><i class="anm anm-times-sql" aria-hidden="true"></i></a>
                                <a href="#" class="edit-i remove"><i class="icon icon-pencil" aria-hidden="true"></i></a>
                                <a class="product-title" href="cart-style1.html">Backpack With Contrast Bow</a>
                                <div class="variant-cart">Black / XL</div>
                                <div class="wrapQtyBtn">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="anm anm-minus-r" aria-hidden="true"></i></a>
                                        <input type="text"  name="quantity" value="1" class="qty">
                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="anm anm-plus-r" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="money">$59.00</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item clearfix">
                            <a class="product-image" href="#">
                                <img src="{{asset('front/assets')}}/images/product-images/cart-page-img1.jpg" alt="" title="">
                            </a>
                            <div class="product-details">
                                <a href="#" class="remove"><i class="anm anm-times-sql" aria-hidden="true"></i></a>
                                <a href="#" class="edit-i remove"><i class="icon icon-pencil" aria-hidden="true"></i></a>
                                <a class="product-title" href="cart-style1.html">Innerbloom Puffer</a>
                                <div class="variant-cart">Red / S</div>
                                <div class="wrapQtyBtn">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="anm anm-minus-r" aria-hidden="true"></i></a>
                                        <input type="text"  name="quantity" value="1" class="qty">
                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="anm anm-plus-r" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="money">$89.00</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="minicart-bottom">
                    <div class="subtotal list">
                        <span>Shipping:</span>
                        <span class="product-price">$10.00</span>
                    </div>
                    <div class="subtotal list">
                        <span>Tax:</span>
                        <span class="product-price">$05.00</span>
                    </div>
                    <div class="subtotal">
                        <span>Total:</span>
                        <span class="product-price">$93.13</span>
                    </div>
                    <button type="button" class="btn proceed-to-checkout">Proceed to Checkout</button>
                    <button type="button" class="btn btn-secondary cart-btn">View Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End MiniCart Drawer-->

<!--Quickview Popup-->
<div class="loadingBox"><div class="anm-spin"><i class="anm anm-spinner4"></i></div></div>
<div class="modalOverly"></div>
<div id="quickView-modal" class="mfp-with-anim mfp-hide">
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
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
<!--End Quickview Popup-->

<!--Product Promotion Popup-->
<div class="product-notification" id="dismiss">
    <span class="close" aria-hidden="true"><i class="an an-times-r"></i></span>
    <div class="media d-flex">
        <a href="#"><img class="mr-2 blur-up lazyload" src="{{asset('front/assets/images/product-images/bags-store-pro2.jpg')}}" data-src="{{asset('front/assets/images/product-images/bags-store-pro2.jpg')}}" alt="Trim Button Front Blouse" /></a>
        <div class="media-body">
            <h5 class="mt-0 mb-1">New Product</h5>
            <p class="pname"><a href="#">Trim Button Front Blouse</a></p>
            <p class="detail">14 Minutes ago from New York, USA</p>
        </div>
    </div>
</div>
<!--End Product Promotion Popup-->


<!--Newsletter Popup-->
<div id="newsletter-modal" class="style1 mfp-with-anim mfp-hide">
    <div class="d-flex flex-column">
        <div class="newsltr-img d-none d-sm-none d-md-block"><img class="blur-up lazyload" src="{{asset('front/assets/images/newsletter-img.webp')}}" data-src="{{asset('front/assets/images/newsletter-img.webp')}}" alt="image" width="550" height="290"></div>
        <div class="newsltr-text text-center">
            <div class="wraptext">
                <p><b>GET THE UPDATES ABOUT LATEST TREANDS</b></p>
                <h2 class="title fw-normal mb-4">20% OFF YOUR FIRST ORDER</h2>
                <form action="#" method="post" class="mcNewsletter mb-4">
                    <div class="input-group d-flex flex-nowrap">
                        <input type="email" class="rounded-start newsletter__input" name="EMAIL" value="" placeholder="Email address" required>
                        <span><button type="submit" class="btn mcNsBtn rounded-end" name="commit"><span>Subscribe</span></button></span>
                    </div>
                </form>
                <div class="customCheckbox justify-content-center checkboxlink clearfix mb-3">
                    <input id="dontshow" name="newsPopup" type="checkbox" />
                    <label for="dontshow" class="pt-1">Don't show this popup again</label>
                </div>
                <p>Your information will never be shared</p>
            </div>
        </div>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
</div>
<!--End Newsletter Popup-->

