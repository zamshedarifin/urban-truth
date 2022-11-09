<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | Urban Truth</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('front/assets/images/favicon.png')}}" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/responsive.css')}}">
</head>
<body class="template-index index-jewelry-store">
<div id="pre-loader">
    <img src="{{asset('front/assets/images/loader.gif')}}" alt="Loading..." />
</div>
<div class="page-wrapper">

    <!--Header-->
        @include('front.include.menu')
    <!--End Mobile Menu-->
    <div id="page-content" style="margin-top: 20px">
                @yield('content')
    </div>
        <!-- Including Jquery -->
        @include('front.include.footer')
        @include('front.include.popup')

        <script src="{{asset('front/assets/js/vendor/jquery-min.js')}}"></script>
        <script src="{{asset('front/assets/js/vendor/js.cookie.js')}}"></script>
        <!-- Including Javascript -->
        <script src="{{asset('front/assets/js/plugins.js')}}"></script>
        <script src="{{asset('front/assets/js/main.js')}}"></script>
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    <!--Newsletter Popup Cookies-->
    <script>
        function newsletter_popup() {
            var cookieSignup = "cookieSignup", date = new Date();
            if ($.cookie(cookieSignup) != 'true' && window.location.href.indexOf("challenge#newsletter-modal") <= -1) {
                setTimeout(function () {
                        $.magnificPopup.open({
                                items: {
                                    src: '#newsletter-modal'
                                }
                                , type: 'inline', removalDelay: 300, mainClass: 'mfp-zoom-in'
                            }
                        );
                    }
                    , 5000);
            }
            $.magnificPopup.instance.close = function () {
                if ($("#dontshow").prop("checked") == true) {
                    $.cookie(cookieSignup, 'true', {
                            expires: 1, path: '/'
                        }
                    );
                }
                $.magnificPopup.proto.close.call(this);
            }
        }
        newsletter_popup();
    </script>
    <!--End Newsletter Popup Cookies-->
</div>
</body>
</html>
