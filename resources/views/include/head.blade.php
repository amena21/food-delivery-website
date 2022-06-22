<!doctype html>
<html class="no-js" lang="zxx">
<head>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Food Delivery system</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{asset('assets/images/icon.png')}}">
	<link rel="apple-touch-icon" href="{{asset('assets/images/icon.png')}}">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
	<link rel="stylesheet" href="{{asset('assets/style.css')}}">

	<!-- Cusom css -->
   <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

	<!-- Modernizer js -->
	<script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Add your site or application content here -->
	


	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Start Header Area -->
        <header class="htc__header bg--white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                            <div class="logo">
                                <a href="index">
                                    <img src="{{asset('assets/images/logo/icon.png')}}" alt="logo images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                                <nav class="main__menu__nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="drop"><a href="{{url('index',$data1->id)}}">Home</a>
                                           
                                        </li>
                                        <li><a href="{{url('about',$data1->id)}}">About</a></li>
                                        <li><a href="{{url('menu',$data1->id)}}">Menu</a>
                                            <!-- <ul class="dropdown__menu">
                                                <li><a href="menu-grid.html">Menu Grid</a></li>
                                                <li><a href="menu-list.html">Menu List</a></li>
                                                <li><a href="menu-details.html">Menu Details</a></li>
                                            </ul> -->
                                        </li>
                                        <!-- <li><a href="gallery">Gallery</a></li> -->
                                        <!-- <li class="drop"><a href="blog-list.html">Blog</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-mesonry.html">Blog mesonry</a></li>
                                                <li><a href="blog-grid-left-sidebar.html">Blog Grid</a></li>
                                                <li><a href="blog-list-right-sidebar.html">Blog List with right sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="drop"><a href="#">Pages</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="service.html">Service</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="contact.html">Contact Page</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="{{url('contact',$data1->id)}}">Contact</a></li>
                                        <li class="">
                               </li>
                              

                                <li class="">
                               </li>
                                         @if(Session::has('loginId'))
                                        
                                     

                                          <li class="drop"><a href="#"> My account</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="{{url('profile',$data1->id)}}">Profile</a></li>
                                                <li><a href="{{url('orders',$data1->id)}}">My Orders</a></li>
                                               
                                                <li>
                                               
                                                <a href="{{url('logout')}}">Logout</a></li>
                                            </ul>
                                        </li>

                                        <div class="header__right d-flex justify-content-end">
                                    <div class="shopping__cart">
                                    <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket">Cart</i></a>
                                    <div class="shop__qun">
                                    @if(session('cart'))
                                        <span>{{count(Session('cart'))}}</span>
                                        @endif
                                        
                                    </div>
                                </div>
                                    
                                </div>
                              
                                     
                                   
                                      

                                <!-- <div class="log__in">
                                    <a class="accountbox-trigger" href="#"><i class="zmdi zmdi-account-o"></i></a>
                                </div> -->
                                 
                                      
                                       
                              
                                
                                    </ul>
                                </nav>
                                
                            </div>
                        </div> 
                         @else
                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">
                          
                                <div class="log__in">
                                    <a class="accountbox-trigger" href="#"><i class="zmdi zmdi-account-o">Login</i></a>
                                    <!-- <a href="login"> <i class="zmdi zmdi-account-o" >Login</i></a> -->
                                </div>
                              
                                <div class="shopping__cart">
                                    <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                                    <div class="shop__qun">
                                        <span>03</span>
                                    </div>
                                </div> 
                              
                            </div>
                        </div>
                       @endif
                                 
                    </div>
                    <!-- Mobile Menu -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- Mobile Menu -->
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>