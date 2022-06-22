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
        <!-- End Header Area -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--24">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center brad__white">
                                <h2 class="bradcaump-title">contact us</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">contact us</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- Start Contact Map -->
        <div class="contact__map__area">
            <div class="contact__map__wrapper">
                <div class="contact__map__left">
                    <div class="map__thumb">
                        <img src="{{asset('assets/images/banner/contact/1.jpg')}}" alt="images">
                    </div>
                </div>
                <div class="contact__map__right">
                    <div class="htc__google__map">
                        <div class="map-contacts">
                            <div id="googlemap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Map -->
        <!-- Start Address -->
        <div class="food__contact">
            <div class="food__contact__wrapper d-flex flex-wrap flex-lg-nowrap">
                <!-- Start Single Contact -->
                <div class="contact">
                    <div class="ct__icon">
                        <i class="zmdi zmdi-phone"></i>
                    </div>
                    <div class="ct__address">
                        <p><a href="#">{{$data7->phone}}</a></p>
                      
                    </div>
                </div>
                <!-- End Single Contact -->
                <!-- Start Single Contact -->
                <div class="contact">
                    <div class="ct__icon">
                        <i class="zmdi zmdi-home"></i>
                    </div>
                    <div class="ct__address">
                        <p>{{$data7->address}} <br> </p>
                    </div>
                </div>
                <!-- End Single Contact -->
                <!-- Start Single Contact -->
                <div class="contact">
                    <div class="ct__icon">
                        <i class="zmdi zmdi-email"></i>
                    </div>
                    <div class="ct__address">
                        <p><a href="#">{{$data7->email}}</a></p>
                        
                    </div>
                </div>
                <!-- End Single Contact -->
            </div>
        </div>
        <!-- End Address -->
        <section class="food__contact__form bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact__form__wrap">
                            <h2>Get In Touch With Aahar</h2>
                            <div class="contact__form__inner">
                                <form id="contact-form" action="#" method="post">
                                    <div class="single-contact-form">
                                        <div class="contact-box name d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                            <input type="text" name="name" placeholder="Your Name">
                                            <input type="email" name="email" placeholder="E-mail">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="single-contact-form">
                                        <div class="contact-box message">
                                            <textarea name="message"  placeholder="Message*"></textarea>
                                        </div>
                                    </div>
                                    <div class="contact-btn">
                                        <button type="submit" class="food__btn">submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        <!-- End Footer Area -->
      
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.7286, 90.3854), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                 styles: 
[
  
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    }
]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googlemap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.7286, 90.3854),
                map: map,
                title: 'Food Delivery!',
                icon: {{asset('assets/images/icon/map-2.png')}},
                animation:google.maps.Animation.BOUNCE

            });
        }
    </script>




    <script src="{{asset('assets/js/active.js')}}"></script>
</body>


</html>
