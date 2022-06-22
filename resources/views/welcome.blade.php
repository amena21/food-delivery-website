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
                                <a href="#">
                                    <img src="{{asset('assets/images/logo/icon.png')}}" alt="logo images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                                <nav class="main__menu__nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="drop"><a href="/">Home</a>
                                           
                                        </li>
                                        <!-- <li><a href="about">About</a></li> -->
                                        <li><a href="fullmenu">Menu</a>
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
                                        <li><a href="contactus">Contact</a></li>
                                      
                                     
                                        
                                   
                             
                                   
                                      

                                <!-- <div class="log__in">
                                    <a class="accountbox-trigger" href="#"><i class="zmdi zmdi-account-o"></i></a>
                                </div> -->
                                 
                                      
                                       
                              
                                
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">
                        
                                <div class="log__in">
                                    <a class="accountbox-trigger" href="#"><i class="zmdi zmdi-account-o">Login</i></a>
                                    <!-- <a href="login"> <i class="zmdi zmdi-account-o" >Login</i></a> -->
                                </div><br>
                            
                                <div class="shopping__cart">
                                    <a class="" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                                    <!-- <div class="shop__qun">
                                        <span></span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    
                                 
                    </div>
                    <!-- Mobile Menu -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- Mobile Menu -->
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <div class="slider__area slider--two">
            <div class="slider__activation--1">
                <!-- Start Single Slide -->
                <style>
                    .bg-image--7 {
                        background-image: url('/sliderimage/{{$data->image}}');


                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center center;
                        }
                </style>
                <div class="slide fullscreen bg-image--7 poss--relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="slider__content">
                                    <div class="slider__inner">
                                        <div class="slider__text__img">
                                            <img class="layear-1" src="{{asset('assets/images/slider/text/1.png')}}" alt="slider text image">
                                            <!-- <h1 class="layear-1" >Good Food , Good Health</h1> -->
                                            <br>
                                            <!-- <img class="layear-2" src="{{asset('assets/images/slider/text/1.png')}}" alt="slider text image"> -->
                                            <h1 class="layear-2" >{{$data->website_name}}</h1>
                                        </div>
                                        <!-- <div class="slider__input">
                                            <input type="text" placeholder="Type Place, City.Division">
                                            <input class="res__search" type="text" placeholder="Restaurant">
                                            <div class="src__btn">
                                                <a href="#">Search</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="slide__pizza">
                        <img src="/sliderimage/{{$data->image2}}" alt="pizza images">
                    </div> -->
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start About Area -->
        <!-- <section class="fd__about__area section-padding--lg bg--white">
            <div class="container">
                <div class="row"> -->
                    <!-- Start Single About -->
                    <!-- <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center">
                        <div class="fd__about__center foo">
                            <div class="fd__about">
                                <div class="section__title service__align--left">
                                    <p>{{$data2->title}}</p>
                                    <h2 class="title__line">About {{$data->website_name}}</h2>
                                </div>
                                <h4>{{$data2->short_description}}</h4>
                                <p>{{$data2->description}}</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Single About -->
                    <!-- Start Single Adout -->
                    <!-- <div class="col-lg-4 col-md-6 col-sm-12 sm--mt--40 md--mt--40">
                        <div class="about wow fadeInRight" data-wow-delay="0.2s">
                            <div class="about__thumb">
                                <img src="/aboutimage/{{$data2->image}}" alt="about images">
                                <div class="pro__offer">
                                    <div class="pro__offer__inner">
                                        <div class="pro__offer__inner__inner">
                                            <span class="fd__diccount">New</span>
                                            <span>Item</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about__details"> -->
                                <!-- <h2>For All <span>“Montanara”</span> Pizza</h2> -->
                                <!-- <p>Don’t Delay to Order</p>
                                <div class="about__btn">
                                    <a class="food__btn white--btn" href="menu">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Single Adout -->
                    <!-- Start Single Adout -->
                    <!-- <div class="col-lg-4 col-md-6 col-sm-12 md--mt--40 sm--mt--40">
                        <div class="about bg--yellow wow fadeInRight" data-wow-delay="0.3s">
                            <div class="about__thumb">
                                <img src="/aboutimage/{{$data2->image}}" alt="about images">
                                <div class="pro__offer">
                                    <div class="pro__offer__inner">
                                        <div class="pro__offer__inner__inner">
                                            <span class="fd__diccount">New</span>
                                            <span>Item</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about__details"> -->
                                <!-- <h2>For All <span>“Montanara”</span> Pizza</h2> -->
                                <!-- <p>Don’t Delay to Order</p>
                                <div class="about__btn">
                                    <a class="food__btn white--btn" href="menu">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Single Adout -->
                <!-- </div>
            </div>
        </section> -->
        <!-- End About Area -->
        <!-- Start Our Pizza Area -->
        <section class="fd__pizza__area bg-image--25 section-padding--lg">
            <div class="bg__cat">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__title service__align--left">
                                <p>The process of our service </p>
                                <h2 class="title__line">Our Special Items</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--40">
                        <!-- Start Single Pizza -->

                        @foreach($data3 as $data3)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="pizza foo" style="box-shadow: 0px 0px 12px #888888;">
                                <div class="pizza__thumb">
                                    <img src="/specialitemimage/{{$data3->image}}" alt="pizza images">
                                    <div class="pizza__hover__action">
                                        <span class="pizza__prize">{{$data3->price}}</span>
                                    </div>
                                </div>
                                <div class="pizza__details">
                                    <h2 class="pizza__title"><a>{{$data3->title}}</a></h2>
                                    <p>{{$data3->description}}</p>
                                    <div class="pizza__btn">
                                        <a class="food__btn white--btn theme--hover  accountbox-trigger">Order Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Single Pizza -->
                        <!-- Start Single Pizza -->
                        <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="pizza foo">
                                <div class="pizza__thumb">
                                    <img src="{{asset('assets/images/product/pizza/3.png')}}" alt="pizza images">
                                    <div class="pizza__hover__action">
                                        <span class="pizza__prize">৳500</span>
                                    </div>
                                </div>
                                <div class="pizza__details">
                                    <h2 class="pizza__title"><a href="menu-details.html">Pepperoni</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectadipisicing labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <div class="pizza__btn">
                                        <a class="food__btn white--btn theme--hover" href="menu-details.html">Order Online</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Single Pizza -->
                        <!-- Start Single Pizza -->
                        <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="pizza foo">
                                <div class="pizza__thumb">
                                    <img src="{{asset('assets/images/product/pizza/4.png')}}" alt="pizza images">
                                    <div class="pizza__hover__action">
                                        <span class="pizza__prize">৳700</span>
                                    </div>
                                </div>
                                <div class="pizza__details">
                                    <h2 class="pizza__title"><a href="menu-details.html">Supreme</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectadipisicing labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <div class="pizza__btn">
                                        <a class="food__btn white--btn theme--hover" href="menu-details.html">Order Online</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Single Pizza -->
                    </div>
                </div>
            </div>
            <!-- <div class="order-now-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="fd__order__now text-center">
                                <div class="order__now__inner">
                                    <h6>We Offer Free Delivery</h6>
                                    <h2>Order Now: {{$data7->phone}}</h2>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        <!-- End Our Pizza Area -->
        <!-- Start Counter Up Area -->
        <!-- <section class="fd__counterup__area funfact--2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="counter__up__inner d-flex flex-wrap flex-lg-nowrap flex-md-nowrap justify-content-between text-center"> -->
                            <!-- Start Single Fact -->
                            <!-- <div class="funfact">
                                <div class="fact__details">
                                    <div class="funfact__count__inner">
                                        <div class="fact__icon">
                                            <img src="{{asset('assets/images/icon/flat-icon/9.png')}}" alt="flat icon">
                                        </div>
                                        <div class="fact__count ">
                                            <span class="count">2456</span>
                                        </div>
                                    </div>
                                    <div class="fact__title">
                                        <h2>Food</h2>
                                    </div>
                                </div>
                            </div>  -->
                            <!-- End Single Fact -->
                            <!-- Start Single Fact -->
                            <!-- <div class="funfact">
                                <div class="fact__details">
                                    <div class="funfact__count__inner">
                                        <div class="fact__icon">
                                            <img src="{{asset('assets/images/icon/flat-icon/8.png')}}" alt="flat icon">
                                        </div>
                                        <div class="fact__count">
                                            <span class="count">2056</span>
                                        </div>
                                    </div>
                                    <div class="fact__title">
                                        <h2>Chef</h2>
                                    </div>
                                </div>
                            </div>  -->
                            <!-- End Single Fact -->
                            <!-- Start Single Fact -->
                            <!-- <div class="funfact">
                                <div class="fact__details">
                                    <div class="funfact__count__inner">
                                        <div class="fact__icon">
                                            <img src="{{asset('assets/images/icon/flat-icon/10.png')}}" alt="flat icon">
                                        </div>
                                        <div class="fact__count ">
                                            <span class="count">3000</span>
                                        </div>
                                    </div>
                                    <div class="fact__title">
                                        <h2>Menu</h2>
                                    </div>
                                </div>
                            </div>  -->
                            <!-- End Single Fact -->
                        <!-- </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Counter Up Area -->
        <!-- Start Resturant MEnu -->
        <section class="resturent__food__menu bg-image--8 section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section__title service__align--center">
                            <p>All delicious food menu  for food lovers</p>
                            <h2 class="title__line">Full Menu</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="resturent__food__menu plr--250px mt--80 d-flex flex-wrap">
                <!-- Start Single Resturent Food -->
                @foreach($data4 as $data4)
                <div class="single__resturent__food d-flex">
                    <div class="resturent__thumb">
                        <a>
                            <img src="/fullmenuimage/{{$data4->image}}" alt="resturent image">
                        </a>
                    </div>
                    <div class="resturent__details d-flex flex-column justify-content-center">
                        <ul class="res__pizz__size d-flex justify-content-center">
                            <!-- <li>small <span>৳20</span></li>
                            <li>Medium <span>৳40</span></li>
                            <li>Large <span>৳50</span></li> -->
                        </ul>
                        <h4><a href="menu-details.html">{{$data4->title}}</a></h4>
                        <!-- <h6>Friends & Family Restaurant</h6> -->
                        <p>{{$data4->description}}</p>
                        <div class="res__btn">
                            <a class="food__btn accountbox-trigger">Order Now</a>
                            <a class="food__btn">Price: ৳{{$data4->price}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <a class="food__btn" href="fullmenu" style="text-align:center">View Full Menu</a>
                   
                <!-- End Single Resturent Food -->
                <!-- Start Single Resturent Food -->
                <!-- <div class="single__resturent__food d-flex">
                    <div class="resturent__thumb">
                        <a href="menu-details.html">
                            <img src="{{asset('assets/images/product/restu/7.png')}}" alt="resturent image">
                        </a>
                    </div>
                    <div class="resturent__details d-flex flex-column justify-content-center">
                        <ul class="res__pizz__size d-flex justify-content-center">
                            <li>small <span>৳20</span></li>
                            <li>Medium <span>৳20</span></li>
                            <li>Large <span>৳60</span></li>
                        </ul>
                        <h4><a href="menu-details.html">Italian Pizza Fev</a></h4>
                        <h6>Friends & Family Restaurant</h6>
                        <p>Provolone is the second most popular one. Cheddar may be mixed with Mozzarella to preserve armesan may be added to the top of a pizza,</p>
                        <div class="res__btn">
                            <a class="food__btn" href="menu-details.html">Order Now</a>
                        </div>
                    </div>
                </div> -->
                <!-- End Single Resturent Food -->
                <!-- Start Single Resturent Food -->
                <!-- <div class="single__resturent__food d-flex">
                    <div class="resturent__thumb">
                        <a href="menu-details.html">
                            <img src="{{asset('assets/images/product/restu/8.png')}}" alt="resturent image">
                        </a>
                    </div>
                    <div class="resturent__details d-flex flex-column justify-content-center">
                        <ul class="res__pizz__size d-flex justify-content-center">
                            <li>small <span>৳30</span></li>
                            <li>Medium <span>৳40</span></li>
                            <li>Large <span>৳20</span></li>
                        </ul>
                        <h4><a href="menu-details.html">Mozzarela Cheez Pizza</a></h4>
                        <h6>Friends & Family Restaurant</h6>
                        <p>Provolone is the second most popular one. Cheddar may be mixed with Mozzarella to preserve armesan may be added to the top of a pizza,</p>
                        <div class="res__btn">
                            <a class="food__btn" href="menu-details.html">Order Now</a>
                        </div>
                    </div>
                </div> -->
                <!-- End Single Resturent Food -->
                <!-- Start Single Resturent Food -->
                <!-- <div class="single__resturent__food d-flex">
                    <div class="resturent__thumb">
                        <a href="menu-details.html">
                            <img src="{{asset('assets/images/product/restu/5.jpeg')}}" alt="resturent image">
                        </a>
                    </div>
                    <div class="resturent__details d-flex flex-column justify-content-center">
                        <ul class="res__pizz__size d-flex justify-content-center">
                            <li>small <span>৳10</span></li>
                            <li>Medium <span>৳60</span></li>
                            <li>Large <span>৳20</span></li>
                        </ul>
                        <h4><a href="menu-details.html">Mozzarela Cheez Pizza</a></h4>
                        <h6>Friends & Family Restaurant</h6>
                        <p>Provolone is the second most popular one. Cheddar may be mixed with Mozzarella to preserve armesan may be added to the top of a pizza,</p>
                        <div class="res__btn">
                            <a class="food__btn" href="menu-details.html">Order Now</a>
                        </div>
                    </div>
                </div> -->
                <!-- End Single Resturent Food -->
            </div>
        </section>
        <!-- End Resturant MEnu -->
     
        <!-- Start Testimonial Area -->
        <section class="fd__testimonial__area testimonial--2 bg-image--9 ptb--150">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fd__testimonial__container testimonial__activation--2">
                            <!-- Start Single Testimonial -->
                          
                            <!-- End Single Testimonial -->
                            <!-- Start Single Testimonial -->
                            @foreach($data5 as $data5)
                            <div class="single__testimonial d-flex justify-content-between flex-wrap">
                                <!-- Start Testimonial -->
                                <div class="testimonial-2">
                                    <p>{{$data5->description}}</p>
                                    <div class="fd__test__info">
                                        <h6>{{$data5->Name}}</h6>
                                        <span>{{$data5->designation}}</span>
                                    </div>
                                </div>
                                <!-- End Testimonial -->
                                <!-- Start Testimonial -->
                                <!-- <div class="testimonial-2">
                                    <p>Lorem ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                    <div class="fd__test__info">
                                        <h6>Mily Cyrus</h6>
                                        <span>Food Expert</span>
                                    </div>
                                </div> -->
                                <!-- End Testimonial -->
                            </div>
                            @endforeach
                            <!-- End Single Testimonial -->
                            <!-- Start Single Testimonial -->
                         
                            <!-- End Single Testimonial -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Area -->
        <!-- Start Subscribe Area -->
        <!-- <section class="fd__subscribe__area bg--white subscribe--2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="subscribe__inner">
                            <h2>Subscribe to our newsletter</h2>
                            <div id="mc_embed_signup">
                                <div id="enter__email__address">
                                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                            <div class="news__input">
                                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your E-mail Address" required>
                                            </div>-->
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                            <div class="clearfix subscribe__btn"><input type="submit" value="Send Now" name="subscribe" id="mc-embedded-subscribe" class="sign__up food__btn">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --> 
        <!-- End Subscribe Area -->
        <!-- Start Banner Area -->
        <!-- <div class="banner__area d-flex instagram__activation owl-carousel owl-theme">
            @foreach($data6 as $data6)
            <div class="banner">
              
                <img src="/galleryimage/{{$data6->image}}" alt="images">
                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
            </div>
            @endforeach
          
        </div> -->
        <!-- End Banner Area -->
      <!-- footer  -->


      <!-- Start Footer Area -->

      
  <!-- Start Footer Area -->
  <footer class="footer__area footer--1">
            <div class="footer__wrapper bg__cat--1 section-padding--lg">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="footer">
                                <h2 class="ftr__title">About {{$data7->title}}</h2>
                                <div class="footer__inner">
                                    <div class="ftr__details">
                                        <!-- <p>Lorem ipsum dolor sit amconsectetur adipisicing elit,</p> -->
                                        <div class="ftr__address__inner">
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-home"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p>{{$data7->address}}</p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-phone"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">{{$data7->phone}}</a></p>
                                                    <!-- <p><a href="#">+088 017xx-xxxxxx</a></p> -->
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-email"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">{{$data7->email}}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="social__icon">
                                            <li><a href="{{$data7->fblink}}"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <!-- <li><a href="#"><i class="zmdi zmdi-google"></i></a></li> -->
                                            <li><a href="{{$data7->instagramlink}}"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="{{$data7->youyubelink}}"><i class="zmdi zmdi-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 sm--mt--40">
                            <div class="footer gallery">
                                <h2 class="ftr__title">Our Gallery</h2> 
                                 <!-- <p>{{$data6->title}}</p> -->
                                <div class="footer__inner">
                                    <ul class="sm__gallery__list">
                                    
                                        <li><a href="#"><img src="/galleryimage/{{$data6->image}}" alt="gallery images"></a></li>

                                   
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                            <div class="footer">
                                <h2 class="ftr__title">Opening Time</h2>
                                <div class="footer__inner">
                                    <ul class="opening__time__list">
                                        @foreach($data8 as $data8)
                                        <li>{{$data8->day}}<span>.......</span>{{$data8->open_time}} am to {{$data8->close_time}} pm</li>
                                        <!-- <li>Sunday<span>.......</span>9am to 11pm</li>
                                        <li>Monday<span>.......</span>9am to 11pm</li>
                                        <li>Tuesday<span>.......</span>9am to 11pm</li>
                                        <li>Wednesday<span>.......</span>9am to 11pm</li>
                                        <li>Thursday<span>.......</span>9am to 11pm</li>
                                        <li>Friday<span>.......</span>9am to 11pm</li> -->
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                            <div class="footer">
                                <h2 class="ftr__title">Latest items</h2>
                                <div class="footer__inner">
                                    <div class="lst__post__list">
                                        
               
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details%2chtml">
                                                    <img  style="width:40px;height:40px;" src="/fullmenuimage/{{$data4->image}}" alt="blog images">
                                                  
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">{{$data4->title}}</a></h6>
                                                <p>{{$data4->description}}</p>
                                            </div>
                                        </div>
                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                    </div>
                </div>
            </div>
            <div class="copyright bg--theme">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="copyright__inner">
                                <div class="cpy__right--left">
                                    <p>@All Right Reserved.<a href="#">i2D Communications Limited</a></p>
                                </div>
                                <div class="cpy__right--right">
                                    <a href="#">
                                        <!-- <img src="images/icon/shape/2.png" alt="payment images"> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        @include('auth.login')
        <!-- End Footer Area -->
        </div><!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="{{asset('assets/js/vendor/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/plugins.js')}}"></script>
	<script src="{{asset('assets/js/active.js')}}"></script>
</body>


</html>
