<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | Urban Truth</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('front/assets/images/logo/favicon.png')}}"/>
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/responsive.css')}}">
</head>
<body class="template-index index-jewelry-store">
<div id="pre-loader">
    <img src="{{asset('front/assets/images/logo/ut-logo.png')}}" alt="Loading..."/>
</div>
<div class="page-wrapper">

    <!--Header-->
@include('front.include.menu')
<!--End Mobile Menu-->
    <div id="page-content" style="margin-top: 20px">
        @yield('content')
    </div>

    <div id="quick-view"></div>
    <!-- Including Jquery -->
    @include('front.include.footer')
    @include('front.include.popup')

    <script src="{{asset('front/assets/js/vendor/jquery-min.js')}}"></script>
    <script src="{{asset('front/assets/js/vendor/js.cookie.js')}}"></script>
    <!-- Including Javascript -->
    <script src="{{asset('front/assets/js/plugins.js')}}"></script>
    <script src="{{asset('front/assets/js/main.js')}}"></script>
    <script src="{{asset('front/assets/js/vendor/photoswipe.min.js')}}"></script>
@stack('script')
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
        $(".slider").not('.slick-initialized').slick();
    </script>

    <script>
        jQuery(window).ready(function ($) {
            $('.quick-view').on('click', function () {
                //var product_id=700;
                //$(window).scrollTop(0);
                var product_id = $(this).data('id');
                var product_color = $(this).data('color');
                var base_url = "{{URL::to('/')}}";
                var url_op = base_url + "/ajax/ajax-product-details";
                $(".loading-modal").show();
                $.ajax({
                    url: url_op,
                    type: 'GET',
                    data: {id: product_id, color: product_color},
                    success: function (html) {
                        // alert(html);
                        if (html == 'null') {
                            $("#quick-view").html("<p style='text-align:center;color:red;padding-top:20px;'>Server Error.</p>");
                        } else {

                            $("#quick-view").html(html);
                            $(".loading-modal").hide();
                            var product_id = $('#productid').val();

                            // alert(product_id)
                            var color_name = product_color;
                            var productSize = $('#product-size-input').val();
                            $('.swatch-element-size').click(function () {
                                //alert($(this).data('value'));
                                $('#product-size-input').val($(this).data('value'));

                            });
                            getQtyByColorSize(product_id, color_name, productSize);
                            $('#pqty').on('change', function (e) {
                                var pqty = e.target.value;
                                $('#productQty').val(pqty);
                            });
                            $('.swatch-element-size').on('click', function (e) {
                                var productSize = $('#product-size-input').val();
                                $(".loading-modal").show();
                                getQtyByColorSize(product_id, color_name, productSize);
                            });
                            $('#colorName').on('change', function (e) {
                                var productColor = e.target.value;
                                $('#productColor').val(productColor);
                            });

                            function getQtyByColorSize(product_id, color_name, productSize) {
                                var url_op = base_url + "/ajaxcall-getQuantityByColor/" + product_id + '/' + productSize + '/' + color_name;
                                $.ajax({
                                    url: url_op,
                                    type: 'GET',
                                    dataType: 'json',
                                    data: '',
                                    success: function (stock) {
                                        //  alert(html);
                                        $(".loading-modal").hide();
                                        var qty = stock;
                                        //  alert(qty);
                                        if (qty > 0) {
                                            $('#qty').attr({"max": qty});
                                            $("#sold_out_msg").html(" ");
                                            $(".product-inventory").show();
                                            $("#stock-msg").html("<span style='color:green;'>In stock</span>");
                                            $('#qty').val(1);
                                            $('#product-add-to-cart').val("Add to Cart");
                                            document.getElementById("product-add-to-cart").disabled = false;
                                        } else {
                                            $('#qty').val(0);
                                            $('#qty').attr({"max": 0});
                                            $("#sold_out_msg").html("<span style='color:red;font-weight:700;padding-bottom:10px;'>" + productSize + " size has sold out. Please select another size.</span>");
                                            $(".product-inventory").show();
                                            $("#stock-msg").html("<span style='color:red;'>Out of stock</span>");
                                            $('#product-add-to-cart').val("Out of stock");
                                            document.getElementById("product-add-to-cart").disabled = true;
                                        }
                                    }
                                });
                            }

                            $('.close-modal').on('click', function () {
                                $('.ajax-quickview').fadeOut();
                            });

                        }
                    }
                });

            });

        });
    </script>
</div>
</body>
</html>
