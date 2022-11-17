<!--Header-->

<header class="header animated d-flex align-items-center header-15">
    <div class="container">
        <div class="row">
            <!--Mobile Icons-->
            <div class="col-4 col-sm-4 col-md-4 d-block d-lg-none mobile-icons">
                <!--Mobile Toggle-->
                <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                    <i class="icon anm anm-times-l"></i>
                    <i class="anm anm-bars-r"></i>
                </button>
                <!--End Mobile Toggle-->
                <!--Search-->
                <div class="site-search iconset">
                    <i class="icon anm anm-search-l"></i>
                </div>
                <!--End Search-->
            </div>
            <!--Mobile Icons-->

            <div class="col-1 col-sm-1 col-md-1 col-lg-5  d-menu-col">
                <!--Desktop Menu-->
                <nav class="grid__item" id="AccessibleNav">
                    <ul id="siteNav" class="site-nav medium center hidearrow" style="text-align: left">

                        <li class="lvl1 parent megamenu"><a href="#">New Arrivals <i class="anm anm-angle-down-l"></i></a>
                            <div class="megamenu style4">
                                <ul class="grid grid--uniform mmWrapper">
                                    <li class="grid__item lvl-1 col-md-3 col-lg-3 mb-0"><a href="#" class="site-nav lvl-1 menu-title text-center">New Arrivals</a>
                                        <img src="{{asset('front/category-image/cat-image1.jpg')}}">
                                    </li>

                                    <li class="grid__item lvl-1 col-md-3 col-lg-3 mb-0"><a href="#" class="site-nav lvl-1 menu-title text-center">Exclusive Collection</a>
                                        <img src="{{asset('front/category-image/cat-image2.jpg')}}">
                                    </li>
                                    <li class="grid__item lvl-1 col-md-3 col-lg-3 mb-0"><a href="#" class="site-nav lvl-1 menu-title text-center">New Arrivals</a>
                                        <img src="{{asset('front/category-image/cat-image1.jpg')}}">
                                    </li>

                                    <li class="grid__item lvl-1 col-md-3 col-lg-3 mb-0"><a href="#" class="site-nav lvl-1 menu-title text-center">Exclusive Collection</a>
                                        <img src="{{asset('front/category-image/cat-image2.jpg')}}">
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="lvl1 parent megamenu"><a href="#">Girls <i class="anm anm-angle-down-l"></i></a>
                            <div class="megamenu style4">
                                <ul class="grid grid--uniform mmWrapper">

                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Clothing</a>
                                        @php
                                            $girlsClothings= \App\Models\Childcategory::where('cat_id',1)->where('sub_cat_id',1)->where('status',1)->get();
                                        @endphp
                                        <ul class="subLinks">
                                            @foreach($girlsClothings as $girlsClothing)
                                            <li class="lvl-2"><a href="{{url("category/{$girlsClothing->category->slug}/{$girlsClothing->subCategory->slug}/{$girlsClothing->slug}")}}" class="site-nav lvl-2">{{$girlsClothing->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Accessories</a>
                                        @php
                                            $girlsAccecorries= \App\Models\Childcategory::where('cat_id',1)->where('sub_cat_id',2)->where('status',1)->get();
                                        @endphp
                                        <ul class="subLinks">
                                            @foreach($girlsAccecorries as $girlsAccecorrie)
                                                <li class="lvl-2"><a href="{{url("category/{$girlsAccecorrie->category->slug}/{$girlsAccecorrie->subCategory->slug}/{$girlsAccecorrie->slug}")}}" class="site-nav lvl-2">{{$girlsAccecorrie->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Shop by Occasion</a>
                                        @php
                                            $occasions = \App\Models\occasion::where('status',1)->get();
                                        @endphp
                                        <ul class="subLinks">
                                            @foreach($occasions as $occasion)

                                                @if($occasion->category == 1 || $occasion->category == 6)
                                                    <li  class="level2 nav-3-1-3 first"><a href='{{url("occasion/girls/{$occasion->slug}")}}' ><span>{{$occasion->name}}</span></a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Collection</a>
                                        @php
                                            $campaigns = \App\Models\Campaign::where('status',1)->get();
                                        @endphp
                                        <ul class="subLinks">
                                            @foreach($campaigns as $campaign)

                                                @if($campaign->category == 1 || $campaign->category == 6)
                                                    <li  class="level2 nav-3-1-3 first"><a href='{{url("collection/girls/{$campaign->slug}")}}' ><span>{{$campaign->name}}</span></a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <!----- Guys Menu ---->
                        <li class="lvl1 parent megamenu"><a href="#">Guys <i class="anm anm-angle-down-l"></i></a>

                            <div class="megamenu style4">
                                <ul class="grid grid--uniform mmWrapper">
                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Clothing</a>
                                        @php
                                            $guysClothings= \App\Models\Childcategory::where('cat_id',2)->where('sub_cat_id',3)->where('status',1)->get();
                                        @endphp
                                        <ul class="subLinks">
                                            @foreach($guysClothings as $guysClothing)
                                                <li class="lvl-2"><a href="{{url("category/{$guysClothing->category->slug}/{$guysClothing->subCategory->slug}/{$guysClothing->slug}")}}" class="site-nav lvl-2">{{$guysClothing->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Accessories</a>
                                        @php
                                            $guysAccecorries= \App\Models\Childcategory::where('cat_id',2)->where('sub_cat_id',4)->where('status',1)->get();
                                        @endphp
                                        <ul class="subLinks">
                                            @foreach($guysAccecorries as $guysAccecorrie)
                                                <li class="lvl-2"><a href="{{url("category/{$guysAccecorrie->category->slug}/{$guysAccecorrie->subCategory->slug}/{$guysAccecorrie->slug}")}}" class="site-nav lvl-2">{{$guysAccecorrie->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">SHOP BY OCCASION</a>
                                        @php
                                            $occasions = \App\Models\occasion::where('status',1)->get();
                                        @endphp
                                        <ul class="subLinks">
                                            @foreach($occasions as $occasion)

                                                @if($occasion->category == 2 || $occasion->category == 6)
                                                    <li  class="level2 nav-3-1-3 first"><a href='{{url("occasion/guys/{$occasion->slug}")}}' ><span>{{$occasion->name}}</span></a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Collection</a>
                                        @php
                                            $campaigns = \App\Models\Campaign::where('status',1)->get();
                                        @endphp
                                        <ul class="subLinks">
                                            @foreach($campaigns as $campaign)

                                                @if($campaign->category == 2 || $campaign->category == 6)
                                                    <li  class="level2 nav-3-1-3 first"><a href='{{url("collection/guys/{$campaign->slug}")}}' ><span>{{$campaign->name}}</span></a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="lvl1 parent megamenu"><a href="#">Featured<i class="anm anm-angle-down-l"></i></a>
                            <div class="megamenu style4">
                                <ul class="grid grid--uniform mmWrapper">
                                    <li class="grid__item lvl-1 col-md-3 col-lg-3 mb-0"><a href="#" class="site-nav lvl-1 menu-title text-center">New Arrivals</a>
                                        <img src="{{asset('front/category-image/cat-image1.jpg')}}">
                                    </li>

                                    <li class="grid__item lvl-1 col-md-3 col-lg-3 mb-0"><a href="#" class="site-nav lvl-1 menu-title text-center">Exclusive Collection</a>
                                        <img src="{{asset('front/category-image/cat-image2.jpg')}}">
                                    </li>
                                    <li class="grid__item lvl-1 col-md-3 col-lg-3 mb-0"><a href="#" class="site-nav lvl-1 menu-title text-center">New Arrivals</a>
                                        <img src="{{asset('front/category-image/cat-image1.jpg')}}">
                                    </li>

                                    <li class="grid__item lvl-1 col-md-3 col-lg-3 mb-0"><a href="#" class="site-nav lvl-1 menu-title text-center">Exclusive Collection</a>
                                        <img src="{{asset('front/category-image/cat-image2.jpg')}}">
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="lvl1 parent dropdown"><a href="#">Lookbook</a></li>

                        <li class="lvl1 parent dropdown"><a href="#">Sale </a></li>
                    </ul>
                </nav>
                <!--End Desktop Menu-->
            </div>

            <!--Desktop Logo-->
            <div class="logo col-4 col-sm-4 col-md-4 col-lg-3 align-self-center" style="margin: auto">
                <a href="{{route('homePage')}}">
                    <img src="{{asset('front/assets/images/logo/ut-logo.png')}}" alt="Avone Multipurpose Html Template" title="Avone Multipurpose Html Template" />
                </a>
            </div>
            <!--End Desktop Logo-->
            <div class="col-4 col-sm-4 col-md-4 col-lg-3 align-self-center icons-col text-right">
                <!--Search-->
                <div class="site-search iconset">
                    <i class="icon anm anm-search-l"></i>
                </div>
                <div class="search-drawer">
                    <div class="container">
                        <span class="closeSearch anm anm-times-l"></span>
                        <h3 class="title">What are you looking for?</h3>
                        <div class="block block-search">
                            <div class="block block-content">
                                <form class="form minisearch" id="header-search" action="#" method="get">
                                    <label for="search" class="label"><span>Search</span></label>
                                    <div class="control">
                                        <div class="searchField">
                                            <div class="search-category">
                                                <select id="rgsearch-category">
                                                    <option value="0">All Categories</option>
                                                    <option value="4">Shop</option>
                                                    <option value="6">- All</option>
                                                    <option value="8">- Men</option>
                                                    <option value="10">- Women</option>
                                                    <option value="12">- Shoes</option>
                                                    <option value="14">- Blouses</option>
                                                    <option value="16">- Pullovers</option>
                                                    <option value="18">- Bags</option>
                                                    <option value="20">- Accessories</option>
                                                </select>
                                            </div>
                                            <div class="input-box">
                                                <input id="search" type="text" name="q" value="" placeholder="Search for products, brands..." class="input-text">
                                                <button type="submit" title="Search" class="action search" disabled=""><i class="icon anm anm-search-l"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Search-->
                <!--Setting Dropdown-->
                <div class="setting-link iconset">
                    <i class="icon anm anm-user-al"></i>
                </div>
                <div id="settingsBox">
                    <div class="customer-links">
                        <p><a href="{{route('user.login')}}" class="btn">Login</a></p>
                        <p class="text-center">New User? <a href="{{route('user.register')}}" class="register">Create an Account</a></p>
                        <p class="text-center">Default welcome msg!</p>
                    </div>

                </div>
                <!--End Setting Dropdown-->
                <!--Wishlist-->
                <div class="wishlist-link iconset">
                    <i class="icon anm anm-heart-l"></i>
                    <span class="wishlist-count">0</span>
                </div>
                <!--End Wishlist-->
                <!--Minicart Dropdown-->
                <div class="header-cart iconset">
                    <a href="#" class="site-header__cart btn-minicart" data-toggle="modal" data-target="#minicart-drawer">
                        <i class="icon anm anm-sq-bag"></i>
                        <span class="site-cart-count">2</span>
                    </a>
                </div>
                <!--End Minicart Dropdown-->
            </div>
        </div>
    </div>
</header>

{{--@if(Route::current()->getName() == 'homePage')--}}
<div class="top-header-wrapper d-none d-sm-none d-md-none d-lg-block">
    <div class="top-header" >
        <div class="container"  style="border-top: 1px #ccc solid;">
            <div class="row" style="margin-top: 7px; margin-left: -8px;">
                <div class="col-12 col-sm-8 col-md-8 col-lg-8 text-left d-none d-sm-none d-md-none d-lg-block p-2" >
                    <i class="anm anm-cart-l"></i> <a href="#"  data-toggle="tooltip" data-placement="bottom" title="Earn Cashback on all orders, limited time only! Plus, enjoy exclusive privileges, such as VIP Sale Access, Partner Discounts, & more."> UT Perks*</a>

                    <i class="anm anm-tag"></i> <a href="#"> Weekly New Arrivals</a>

                    <i class="anm anm-vh-bus-l"></i> <a href="#" data-toggle="tooltip" data-placement="bottom" title="Get your order in just days! Delivery is free for orders above BDT 3000"> Free Delivery Above 3000 BDT</a>

                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-right d-none d-sm-none d-md-none d-lg-block p-2">
                    <a href="#" style="margin-right: 9px;">Your Fashion Playground.</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Header-->
{{--@endif--}}
<!--Mobile Menu-->
<div class="mobile-nav-wrapper" role="navigation">
    <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
    <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent megamenu"><a href="#">Home <i class="anm anm-plus-l"></i></a></li>

        <li class="lvl1 parent megamenu"><a href="#">Girls <i class="anm anm-plus-l"></i></a>
            <ul>
                <li><a href="#" class="site-nav">UT Girls<i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sale</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">New</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">UT Plus</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Loungwear</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Basics</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">ActieWear</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sweatshirts</a></li>
                    </ul>
                </li>

                <li><a href="#" class="site-nav">UT Girls<i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sale</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">New</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">UT Plus</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Loungwear</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Basics</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">ActieWear</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sweatshirts</a></li>
                    </ul>
                </li>

                <li><a href="#" class="site-nav">UT Girls<i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sale</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">New</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">UT Plus</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Loungwear</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Basics</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">ActieWear</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sweatshirts</a></li>
                    </ul>
                </li>

                <li><a href="#" class="site-nav">UT Girls<i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sale</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">New</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">UT Plus</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Loungwear</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Basics</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">ActieWear</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sweatshirts</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="lvl1 parent megamenu"><a href="#">Guys <i class="anm anm-plus-l"></i></a>
            <ul>
                <li><a href="#" class="site-nav">UT Guys<i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sale</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">New</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">UT Plus</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Loungwear</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Basics</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">ActieWear</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sweatshirts</a></li>
                    </ul>
                </li>

                <li><a href="#" class="site-nav">UT Guys<i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sale</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">New</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">UT Plus</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Loungwear</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Basics</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">ActieWear</a></li>
                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sweatshirts</a></li>
                    </ul>
                </li>
            </ul>
        </li>


        <li class="lvl1 parent megamenu"><a href="#">Campaign <i class="anm anm-plus-l"></i></a>
            <ul>
                <li><a href="#" class="site-nav">Summer 2022</a></li>
                <li><a href="#" class="site-nav">F/W 2020</a></li>
                <li><a href="#" class="site-nav">The Holiday Edit</a></li>
            </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="#">New <i class="anm anm-plus-l"></i></a>
            <ul>
                <li><a href="#" class="site-nav">New Arrivals</a></li>
            </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="#">About Us</a></li>

    </ul>
</div>
<!--End Mobile Menu-->
