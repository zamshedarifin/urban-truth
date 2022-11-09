<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>

    <meta charset="utf-8" />
    <title> Login | Urban Truth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('back/assets/images/favicon.ico')}}">

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
</head>
<body>
<div class="auth-page-wrapper pt-5">
 <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="{{route('homePage')}}" class="d-inline-block auth-logo">
                                <img src="{{asset('back/assets/images/logo-light.png')}}" alt="" height="20">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p class="text-muted">Sign in to continue to Admin Panel.</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="{{route('admin.login')}}" method="post">@csrf

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" id="username" placeholder="Enter username">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input">
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Sign In</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Pride Team
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->

<!-- JAVASCRIPT -->
<script src="{{asset('back/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('back/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('back/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('back/assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('back/assets/js/pages/plugins/lord-icon-2.1.0.')}}js"></script>
<script src="{{asset('back/assets/js/plugins.js')}}"></script>

<!-- particles js -->
<script src="{{asset('back/assets/libs/particles.js/particles.js')}}"></script>
<!-- particles app js -->
<script src="{{asset('back/assets/js/pages/particles.app.js')}}"></script>
<!-- password-addon init -->
<script src="{{asset('back/assets/js/pages/password-addon.init.js')}}"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 08:12:20 GMT -->
</html>
