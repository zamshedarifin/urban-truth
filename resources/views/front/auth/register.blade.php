@extends('front.layouts.app')
@section('title')
    Register
@stop
@section('content')
    <!--Breadcrumbs-->
    <div class="breadcrumbs-wrapper">
        <div class="container">
            <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a> <span aria-hidden="true">|</span> <span>Create An Account</span></div>
        </div>
    </div>
    <!--End Breadcrumbs-->
    <!--Page Title with Image-->
    <div class="page-title"><h1>Create An Account</h1></div>

    <!--End Page Title with Image-->
    <div class="container">
        <!--Main Content-->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 box">
                <div class="mb-4">
                    <h3>Personal Information</h3>
                    <form method="post" action="{{route('user.register')}}" accept-charset="UTF-8" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerFirstName">First Name <span class="required">*</span></label>
                                    <input id="CustomerFirstName" type="text" name="first_name" value="{{old('first_name')}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerLastName">Last Name <span class="required">*</span></label>
                                    <input id="CustomerLastName" type="text" name="last_name" value="{{old('last_name')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerEmail">Email Address <span class="required">*</span></label>
                                    <input id="CustomerEmail" type="email" name="email" value="{{old('email')}}">
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerEmail">Mobile <span class="required">*</span></label>
                                    <input id="CustomerEmail" type="text" name="mobile" value="{{old('mobile')}}">
                                </div>
                            </div>
                        </div>

                        <h3>Login Information</h3>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerPassword">Password <span class="required">*</span></label>
                                    <input id="CustomerPassword" type="password" name="password">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerConfirmPassword">Confirm Password <span class="required">*</span></label>
                                    <input id="CustomerConfirmPassword" type="Password" name="password_confirmation">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-left col-12 col-sm-12 col-md-6 col-lg-6">
                                <input type="submit" class="btn mb-3" value="Submit">
                            </div>
                            <div class="text-right col-12 col-sm-12 col-md-6 col-lg-6">
                                <a href="{{route('user.login')}}">« Back To Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--End Main Content-->
    </div><!--End Body Container-->


@stop
