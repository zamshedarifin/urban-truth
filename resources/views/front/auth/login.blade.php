@extends('front.layouts.app')
@section('title')
    Login
@stop
@section('content')
<!--Breadcrumbs-->
<div class="breadcrumbs-wrapper">
    <div class="container">
        <div class="breadcrumbs"><a href="{{route('homePage')}}" title="Back to the home page">Home</a> <span aria-hidden="true">|</span> <span>Login</span></div>
    </div>
</div>
<!--End Breadcrumbs-->
<!--Page Title with Image-->
<div class="page-title"><h1>Login</h1></div>
<!--End Page Title with Image-->
<div class="container">
    <div class="row">
        <!--Main Content-->
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 box">
            <h3>New Customers</h3>
            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
            <a href="{{route('user.register')}}" class="btn">Create an account</a>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 box">
            <div class="mb-4">
                <form method="post" action="{{route('user.login')}}" class="contact-form">
                    @csrf
                    <h3>Registered Customers</h3>
                    <p>If you have an account with us, please log in.</p>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerEmail">Mobile No <span class="required">*</span></label>
                                <input type="text" name="mobile" value="{{old('mobile')}}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerPassword">Password <span class="required">*</span></label>
                                <input type="password" name="password" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-left col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="submit" class="btn mb-3" value="Sign In">
                            <p class="mb-4">
                                <a href="#">Forgot your password?</a> &nbsp; | &nbsp;
                                <a href="{{route('user.register')}}" id="customer_register_link">Create account</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--End Main Content-->
    </div>

</div><!--End Body Container-->
@stop
