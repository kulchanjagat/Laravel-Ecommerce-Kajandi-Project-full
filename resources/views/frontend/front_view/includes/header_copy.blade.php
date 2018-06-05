<!DOCTYPE HTML>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>@yield('page-title')</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="TheBox - premium e-commerce template">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/selectize.bootstrap3.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/star-rating.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/table-responsive01.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/table-responsive02.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/mystyles.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.css')}}">

</head>

<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <div class="navbar-before mobile-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="navbar-before-sign">Everything You Need is theBox</p>
                </div>
                <div class="col-md-6">
                    <ul class="nav navbar-nav navbar-right navbar-right-no-mar">
                        <li><a href="#">About Us</a>
                        </li>
                        <li><a href="#">Blog</a>
                        </li>
                        <li><a href="#">Contact Us</a>
                        </li>
                        <li><a href="#">FAQ</a>
                        </li>
                        <li><a href="#">Wishlist</a>
                        </li>
                        <li><a href="#">Help</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
          <form method="POST" action="{{ route('login') }}">
              @csrf

            <h3 class="widget-title">Member Login</h3>
            <p>Welcome back, friend. Login to get started</p>
            <hr />
                <p class="alert alert-danger loginformerror" style="display: none;">Email or Password incorrect</p>
                <div class="form-group">
                    <label>Email or Username</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}</label>
                </div>
                <input class="btn btn-primary" type="submit" value="Sign In" />
              </form>

            <div class="gap gap-small"></div>
            <ul class="list-inline">
                <li><a href="#nav-account-dialog" class="popup-text">Not Member Yet</a>
                </li>
                <li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>
                </li>
            </ul>
        </div>
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">


    <form method="POST" action="{{ route('register') }}">
        @csrf

      <h3 class="widget-title">Create TheBox Account</h3>
      <p>Ready to get best offers? Let's get started!</p>
      <hr />
      <div class="form-group">
          <label>Name</label>
          <input class="form-control" name="name" type="text" />

      </div>
      <div class="form-group">
          <label>Email</label>
          <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="email" />


          @if ($errors->has('email'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
      </div>
      <div class="form-group">
          <label>Phone Number</label>
          <input class="form-control" name="phone" type="text" />

      </div>
      <div class="form-group">
          <label>Password</label>
          <input id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" type="password" />

          @if ($errors->has('password'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
      </div>
      <div class="form-group">
          <label>Repeat Password</label>
          <input id="password-confirm" class="form-control" type="password" name="password_confirmation" required/>

      </div>
      <p class="alert alert-danger passwordcorrespond" style="display: none;">
          Password fields must correspond
      </p>
      <div class="checkbox">
          <label>
              <input class="i-check" type="checkbox" />Subscribe to the Newsletter</label>
      </div>
      <input class="btn btn-primary" type="submit" value="Create Account" />

    </form>



        <div class="gap gap-small"></div>
        <ul class="list-inline">
            <li><a href="#nav-login-dialog" class="popup-text">Already Memeber</a>
            </li>
        </ul>
    </div>
    <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-pwd-dialog">
        <h3 class="widget-title">Password Recovery</h3>
        <p>Enter Your Email and We Will Send the Instructions</p>
        <hr />
        <form>
            <div class="form-group">
                <label>Your Email</label>
                <input class="form-control" type="text" class="recover" />
            </div>
            <input class="btn btn-primary" type="submit" value="Recover Password" />
        </form>
    </div>
    <nav class="navbar navbar-inverse navbar-main navbar-pad">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset('public/frontend/img/')}}/logo.png">
                </a>
            </div>
            <div class="rel">
                <form  action="{{url('/search-by-category')}}" class="navbar-form navbar-left navbar-main-search navbar-main-search-category" role="search">
                    <select class="navbar-main-search-category-select" name="category">
                        <option>All Departmens</option>
                        @foreach($all_category as $category)
                        <option value="{{$category->id}}">{{$category->cat_name}}</option>
                            @foreach($all_sub_category as $sub_category)
                                @if($sub_category->cat_id==$category->id)
                                    <option value="{{$sub_category->id}}"> &nbsp;&nbsp;&nbsp;{{$sub_category->sub_cat_name}}</option>
                                @endif
                            @endforeach
                        @endforeach
                    </select>
                    <div class="form-group">
                        {{--id="searchbox"--}}
                        <input class="form-control searchbox"  name="keyword" type="text" placeholder="Search the Entire Store..." />
                    </div>
                    <button type="submit" class="fa fa-search navbar-main-search-submit" href="#" style="z-index: 4"></button>
                </form>
                <a class="navbar-theme-img" href="#">
                    <img src="{{asset('public/frontend/img/')}}/ecommerce_banner.png" alt="Image Alternative text" style="width: 80px" title="Image Title" />
                </a>
            </div>
        </div>
    </nav>
    <nav class="navbar-inverse navbar-main yamm">
        <div class="container">
            <div class="collapse navbar-collapse navbar-collapse-no-pad" id="main-nav-collapse">
                <ul class="nav navbar-nav navbar-nav-lg">
                    <li class="dropdown yamm-fw"><a href="#"><span >Navigation & Communication</span>NAVCOM<i class="drop-caret" data-toggle="dropdown"></i></a>
                        <ul class="dropdown-menu">
                            <li class="yamm-content">
                                <div class="row row-eq-height row-col-border">
                                    <div class="col-md-2">
                                        <h5>Homepages</h5>
                                        <ul class="dropdown-menu-items-list">
                                            <li><a href="index-2.html">Layout 1</a>
                                                <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                            </li>
                                            <li><a href="index-layout-2.html">Layout 2</a>
                                                <p class="dropdown-menu-items-list-desc">Banners Area + Product Carousel</p>
                                            </li>
                                            <li><a href="index-layout-3.html">Layout 3</a>
                                                <p class="dropdown-menu-items-list-desc">Aside Departmens</p>
                                            </li>
                                            <li><a href="index-layout-4.html">Layout 4</a>
                                                <p class="dropdown-menu-items-list-desc">Sidebar Right</p>
                                            </li>
                                            <li><a href="index-layout-5.html">Layout 5</a>
                                                <p class="dropdown-menu-items-list-desc">Small Aside Departmens + Sidebar</p>
                                            </li>
                                            <li><a href="index-layout-6.html">Layout 6</a>
                                                <p class="dropdown-menu-items-list-desc">Full Banners + Product Tabs</p>
                                            </li>
                                            <li><a href="index-layout-7.html">Layout 7</a>
                                                <p class="dropdown-menu-items-list-desc">Small Aside Departmens + Slider</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Category Pages</h5>
                                        <ul class="dropdown-menu-items-list">
                                            <li><a href="category.html">Layout 1</a>
                                                <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                            </li>
                                            <li><a href="category-layout-2.html">Layout 2</a>
                                                <p class="dropdown-menu-items-list-desc">Banner Title</p>
                                            </li>
                                            <li><a href="category-layout-3.html">Layout 3</a>
                                                <p class="dropdown-menu-items-list-desc">4 Columns Thumbs</p>
                                            </li>
                                            <li><a href="category-layout-4.html">Layout 4</a>
                                                <p class="dropdown-menu-items-list-desc">6 Columns Small Thumbs</p>
                                            </li>
                                            <li><a href="category-layout-5.html">Layout 5</a>
                                                <p class="dropdown-menu-items-list-desc">3 Columns Horizontal Thumbs</p>
                                            </li>
                                            <li><a href="category-layout-6.html">Layout 6</a>
                                                <p class="dropdown-menu-items-list-desc">4 Columns Horizontal Thumbs</p>
                                            </li>
                                            <li><a href="category-layout-7.html">Layout 7</a>
                                                <p class="dropdown-menu-items-list-desc">No Filters</p>
                                            </li>
                                            <li><a href="category-layout-8.html">Layout 8</a>
                                                <p class="dropdown-menu-items-list-desc">Sidebar Right</p>
                                            </li>
                                            <li><a href="category-layout-9.html">Layout 9</a>
                                                <p class="dropdown-menu-items-list-desc">Sidebar Inverse</p>
                                            </li>
                                            <li><a href="category-layout-10.html">Layout 10</a>
                                                <p class="dropdown-menu-items-list-desc">Sidebar Color</p>
                                            </li>
                                            <li><a href="category-layout-11.html">Layout 11</a>
                                                <p class="dropdown-menu-items-list-desc">Horizontal Thumbs</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Product Pages</h5>
                                        <ul class="dropdown-menu-items-list">
                                            <li><a href="product-page.html">Layout 1</a>
                                                <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                            </li>
                                            <li><a href="product-layout-2.html">Layout 2</a>
                                                <p class="dropdown-menu-items-list-desc">No Sidebar</p>
                                            </li>
                                            <li><a href="product-layout-3.html">Layout 3</a>
                                                <p class="dropdown-menu-items-list-desc">Full Area Layout + Banners</p>
                                            </li>
                                            <li><a href="product-layout-4.html">Layout 4</a>
                                                <p class="dropdown-menu-items-list-desc">Gallery Style</p>
                                            </li>
                                            <li><a href="product-layout-5.html">Layout 5</a>
                                                <p class="dropdown-menu-items-list-desc">Sidebar Right</p>
                                            </li>
                                            <li><a href="product-layout-6.html">Layout 6</a>
                                                <p class="dropdown-menu-items-list-desc">Sidebar Left</p>
                                            </li>
                                            <li><a href="product-layout-7.html">Layout 7</a>
                                                <p class="dropdown-menu-items-list-desc">Product Gallery Left</p>
                                            </li>
                                            <li><a href="product-layout-8.html">Layout 8</a>
                                                <p class="dropdown-menu-items-list-desc">Product Gallery Right</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Header Layouts</h5>
                                        <ul class="dropdown-menu-items-list">
                                            <li><a href="index-2.html">Layout 1</a>
                                                <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                            </li>
                                            <li><a href="index-nav-layout-2.html">Layout 2</a>
                                                <p class="dropdown-menu-items-list-desc">Center Logo + Category Nav</p>
                                            </li>
                                            <li><a href="index-nav-layout-3.html">Layout 3</a>
                                                <p class="dropdown-menu-items-list-desc">Special Area + Extended Search</p>
                                            </li>
                                            <li><a href="index-nav-layout-4.html">Layout 4</a>
                                                <p class="dropdown-menu-items-list-desc">White Area + Extended Search</p>
                                            </li>
                                        </ul>
                                        <hr />
                                        <h5>Footer Layouts</h5>
                                        <ul class="dropdown-menu-items-list">
                                            <li><a href="index-2.html">Layout 1</a>
                                                <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                            </li>
                                            <li><a href="index-footer-layout-2.html">Layout 2</a>
                                                <p class="dropdown-menu-items-list-desc">Minimal</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Misc</h5>
                                        <ul class="dropdown-menu-items-list">
                                            <li><a href="shopping-cart.html">Shopping Cart</a>
                                            </li>

                                            <li><a href="checkout.html">Checkout</a>
                                            </li>
                                            <li><a href="category/Welding_&_Fabrication.html">Product category</a>
                                            </li>
                                            <li><a href="product/Hot_wedge_welding_1.html">Single Product Page</a>
                                            </li>
                                            <li><a href="vendor.html">Vendor Page</a>
                                            </li>
                                            <li><a href="same-product.html">Same product</a>
                                            </li>
                                            <li><a href="blog.html">Blog</a>
                                            </li>
                                            <li><a href="blog-post.html">Blog Post</a>
                                            </li>
                                            <li><a href="login-register.html">Login/Register</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <?php
                        $all_category = DB::table('categories')->where('cat_major',1)->orderBy('id','desc')->get();
                    ?>
                   @foreach($all_category as $category)
                    <li class="dropdown yamm-fw"><a href="#"><span >{{$category->cat_title}}</span> {{$category->cat_name}}<i class="drop-caret" data-toggle="dropdown"></i></a>
                        <ul class="dropdown-menu">
                            <li class="yamm-content">
                                <div class="row row-eq-height row-col-border">
                                    <div class="col-md-2">
                                        <h5>Sub Categories</h5>
                                        <ul class="dropdown-menu-items-list">
                                            @foreach($all_sub_category as $sub_category)
                                            @if($sub_category->cat_id==$category->id)
                                                    <li><a href="#">{{$sub_category->sub_cat_name}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>


                                </div>
                                <img class="dropdown-menu-theme-image" src="{{asset($category->cat_image)}}" alt="Image Alternative text" title="Image Title" />
                            </li>
                        </ul>
                    </li>
                   @endforeach


                </ul>
                <ul class="nav navbar-nav navbar-right navbar-right-no-mar navbar-nav-lg">
                    <li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text"><span >Hello, Sign in</span>Your Account</a>
                    </li>

                    <li class="dropdown"><a href="mycart.html"><span ></span><i class="fa fa-shopping-cart"></i></a>
                        <ul class='dropdown-menu dropdown-menu-shipping-cart'>
                            <div class='text-center'><i class='fa fa-cart-arrow-down fa-4x'></i>
                                <p class='lead' style='font-size: 16px'>You haven't Fill Your Shopping Cart Yet</p><a class='btn btn-primary btn-lg' href='#'>Start Shopping <i class='fa fa-long-arrow-right'></i></a>
                            </div></ul>                        </li>
                </ul>
            </div>
        </div>
    </nav>