<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="enable">
<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Urban truth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('back/assets/images/favicon.ico')}}">

    <!-- jsvectormap css -->
    <link href="{{asset('back/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{asset('back/assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{asset('back/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('back/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('back/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('back/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('back/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>

<body>
<!-- Begin page -->
<div id="layout-wrapper">

@include('back.include.nav')
    <div class="main-content">
       @yield('content')
        @include('back.include.footer')
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->
<!--start back-to-top-->
{{--<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">--}}
{{--    <i class="ri-arrow-up-line"></i>--}}
{{--</button>--}}
<!--end back-to-top-->

<!--preloader-->
<div id="preloader">
    <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
<!-- JAVASCRIPT -->

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="{{asset('back/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('back/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('back/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('back/assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('back/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('back/assets/js/plugins.js')}}"></script>
<script src="{{asset('back/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('back/assets/libs/jsvectormap/js/jsvectormap.min.j')}}s"></script>
<script src="{{asset('back/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>
<script src="{{asset('back/assets/libs/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('back/assets/js/pages/dashboard-ecommerce.init.js')}}"></script>

<script src="{{asset('back/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>
<script src="{{asset('back/assets/js/pages/form-editor.init.js')}}"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

<!-- App js -->
<script src="{{asset('back/assets/js/app.js')}}"></script>
@stack('js')
</body>
</html>
