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


<!--Product Promotion Popup-->
{{--<div class="product-notification" id="dismiss">--}}
{{--    <span class="close" aria-hidden="true"><i class="an an-times-r"></i></span>--}}
{{--    <div class="media d-flex">--}}
{{--        <a href="#"><img class="mr-2 blur-up lazyload" src="{{asset('front/assets/images/product-images/bags-store-pro2.jpg')}}" data-src="{{asset('front/assets/images/product-images/bags-store-pro2.jpg')}}" alt="Trim Button Front Blouse" /></a>--}}
{{--        <div class="media-body">--}}
{{--            <h5 class="mt-0 mb-1">New Product</h5>--}}
{{--            <p class="pname"><a href="#">Trim Button Front Blouse</a></p>--}}
{{--            <p class="detail">14 Minutes ago from New York, USA</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!--End Product Promotion Popup-->


<!--Newsletter Popup-->
{{--<div id="newsletter-modal" class="style1 mfp-with-anim mfp-hide">--}}
{{--    <div class="d-flex flex-column">--}}
{{--        <div class="newsltr-img d-none d-sm-none d-md-block"><img class="blur-up lazyload" src="{{asset('front/assets/images/newsletter-img.webp')}}" data-src="{{asset('front/assets/images/newsletter-img.webp')}}" alt="image" width="550" height="290"></div>--}}
{{--        <div class="newsltr-text text-center">--}}
{{--            <div class="wraptext">--}}
{{--                <p><b>GET THE UPDATES ABOUT LATEST TREANDS</b></p>--}}
{{--                <h2 class="title fw-normal mb-4">20% OFF YOUR FIRST ORDER</h2>--}}
{{--                <form action="#" method="post" class="mcNewsletter mb-4">--}}
{{--                    <div class="input-group d-flex flex-nowrap">--}}
{{--                        <input type="email" class="rounded-start newsletter__input" name="EMAIL" value="" placeholder="Email address" required>--}}
{{--                        <span><button type="submit" class="btn mcNsBtn rounded-end" name="commit"><span>Subscribe</span></button></span>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--                <div class="customCheckbox justify-content-center checkboxlink clearfix mb-3">--}}
{{--                    <input id="dontshow" name="newsPopup" type="checkbox" />--}}
{{--                    <label for="dontshow" class="pt-1">Don't show this popup again</label>--}}
{{--                </div>--}}
{{--                <p>Your information will never be shared</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <button title="Close (Esc)" type="button" class="mfp-close">×</button>--}}
{{--</div>--}}
<!--End Newsletter Popup-->


@push('script')

    <!--Newsletter Popup Cookies-->
{{--    <script>--}}
{{--        function newsletter_popup() {--}}
{{--            var cookieSignup = "cookieSignup", date = new Date();--}}
{{--            if ($.cookie(cookieSignup) != 'true' && window.location.href.indexOf("challenge#newsletter-modal") <= -1) {--}}
{{--                setTimeout(function () {--}}
{{--                        $.magnificPopup.open({--}}
{{--                                items: {--}}
{{--                                    src: '#newsletter-modal'--}}
{{--                                }--}}
{{--                                , type: 'inline', removalDelay: 300, mainClass: 'mfp-zoom-in'--}}
{{--                            }--}}
{{--                        );--}}
{{--                    }--}}
{{--                    , 5000);--}}
{{--            }--}}
{{--            $.magnificPopup.instance.close = function () {--}}
{{--                if ($("#dontshow").prop("checked") == true) {--}}
{{--                    $.cookie(cookieSignup, 'true', {--}}
{{--                            expires: 1, path: '/'--}}
{{--                        }--}}
{{--                    );--}}
{{--                }--}}
{{--                $.magnificPopup.proto.close.call(this);--}}
{{--            }--}}
{{--        }--}}
{{--        newsletter_popup();--}}
{{--    </script>--}}
    <!--End Newsletter Popup Cookies-->
@endpush
