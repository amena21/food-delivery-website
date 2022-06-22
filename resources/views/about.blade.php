     @include('include.head');
        <!-- End Header Area -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--20">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center brad__white">
                                <h2 class="bradcaump-title">about us</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">about us</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start About Us Area  -->
        <section class="food__about__us__area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title title__style--2 service__align--center">
                            <h2 class="title__line">Why Choose Us</h2>
                            <p>The process of our service </p>
                        </div>
                    </div>
                </div>
                <div class="row mt--80">
                    <div class="col-lg-6 col-sm-12 col-md-12 align-self-center">
                        <div class="food__container">
                            <div class="food__inner">
                                <h2>{{$data2->title}}</h2>
                                <p>{{$data2->short_description}}</p>
                            </div>
                            <div class="food__details">
                                <p>{{$data2->description}}</p>
                            </div>
                            <!-- <div class="food__tab">
                                <div class="food__nav nav nav-tabs d-block" role="tablist">
                                    <a class="active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">1. History of Aahar (2000-2017)</a>

                                    <a id="nav-prepare-tab" data-toggle="tab" href="#prepare" role="tab" aria-controls="prepare" aria-selected="false">2. How  We prepare your meals</a>

                                    <a id="nav-meals-tab" data-toggle="tab" href="#meals" role="tab" aria-controls="meals" aria-selected="false">3. How  We prepare your meals</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-12">
                        <div class="food__video__wrap tab-content" id="nav-tabContent">
                            <!-- Start Single Video -->
                            <div class="video__owl__activation tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="about__video__activation owl-carousel owl-theme">
                                    <div class="about__video__inner">
                                        <div class="about__video__thumb">
                                            <img src="/aboutimage/{{$data2->image}}" alt="video images">
                                            <a class="video-play-button" href="https://www.youtube.com/watch?v=wJ9Ll8uD07I"><img src="{{asset('assets/images/icon/play.png')}}" alt="viveo play icon"></a>
                                        </div>
                                        <div class="about__video__content">
                                            <span>1</span>
                                        </div>
                                    </div>
                                    <div class="about__video__inner">
                                        <div class="about__video__thumb">
                                            <img src="/aboutimage/{{$data2->image2}}" alt="video images">
                                            <a class="video-play-button" href="https://www.youtube.com/watch?v=wJ9Ll8uD07I"><img src="{{asset('assets/images/icon/play.png')}}" alt="viveo play icon"></a>
                                        </div>
                                        <div class="about__video__content">
                                            <span>2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Video -->
                            <!-- Start Single Video -->
                            <div class="video__owl__activation tab-pane fade" id="prepare" role="tabpanel" aria-labelledby="nav-prepare-tab">
                                <div class="about__video__activation owl-carousel owl-theme">
                                    <div class="about__video__inner">
                                        <div class="about__video__thumb">
                                            <img src="images/about/video/2.jpg" alt="video images">
                                            <a class="video-play-button" href="https://www.youtube.com/watch?v=wJ9Ll8uD07I"><img src="images/icon/play.png" alt="viveo play icon"></a>
                                        </div>
                                        <div class="about__video__content">
                                            <span>1</span>
                                        </div>
                                    </div>
                                    <div class="about__video__inner">
                                        <div class="about__video__thumb">
                                            <img src="images/about/video/3.jpg" alt="video images">
                                            <a class="video-play-button" href="https://www.youtube.com/watch?v=wJ9Ll8uD07I"><img src="images/icon/play.png" alt="viveo play icon"></a>
                                        </div>
                                        <div class="about__video__content">
                                            <span>2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Video -->
                            <!-- Start Single Video -->
                            <div class="video__owl__activation tab-pane fade" id="meals" role="tabpanel" aria-labelledby="nav-meals-tab">
                                <div class="about__video__activation owl-carousel owl-theme">
                                    <div class="about__video__inner">
                                        <div class="about__video__thumb">
                                            <img src="images/about/video/3.jpg" alt="video images">
                                            <a class="video-play-button" href="https://www.youtube.com/watch?v=wJ9Ll8uD07I"><img src="images/icon/play.png" alt="viveo play icon"></a>
                                        </div>
                                        <div class="about__video__content">
                                            <span>1</span>
                                        </div>
                                    </div>
                                    <div class="about__video__inner">
                                        <div class="about__video__thumb">
                                            <img src="images/about/video/1.jpg" alt="video images">
                                            <a class="video-play-button" href="https://www.youtube.com/watch?v=wJ9Ll8uD07I"><img src="images/icon/play.png" alt="viveo play icon"></a>
                                        </div>
                                        <div class="about__video__content">
                                            <span>2</span>
                                        </div>
                                    </div>
                                    <div class="about__video__inner">
                                        <div class="about__video__thumb">
                                            <img src="images/about/video/2.jpg" alt="video images">
                                            <a class="video-play-button" href="https://www.youtube.com/watch?v=wJ9Ll8uD07I"><img src="images/icon/play.png" alt="viveo play icon"></a>
                                        </div>
                                        <div class="about__video__content">
                                            <span>2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Video -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Area  -->
        <!-- Start Our Team Area -->
       
        <!-- End Our Team Area -->
        <!-- Start Accordion Area -->
        <!-- <section class="food__acconrdion__area bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section__title title__style--2 service__align--center">
                            <h2 class="title__line">Frequantly Ask Question</h2>
                            <p>The process of our service </p>
                        </div>
                    </div>
                </div>
                <div class="row mt--80 pb--60">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div id="accordion" class="food_accordion" role="tablist">
                            <div class="card">
                                <div class="acc-header" role="tab" id="headingOne">
                                  <h5>
                                        <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne"><span>1.</span> Djanj  sit amet, consectetur adipisicing elit, sed do eiusmod temrem ?</a>
                                  </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magaliqua. oenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duidolreprehendevoluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecupidatat proident, sunt in culpa qui officideserunt mollitanim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium d sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labor fqa cabfm szdt jkasp faq havrtm
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="acc-header" role="tab" id="headingTwo">
                                  <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>2.</span> Djanj  sit amet, consectetur adipisicing elit, sed do eiusmod tem pororem ?. 
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                  <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magaliqua. oenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duidolreprehendevoluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecupidatat proident, sunt in culpa qui officideserunt mollitanim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium d sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labor fqa cabfm szdt jkasp faq havrtm
                                  </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="acc-header" role="tab" id="headingThree">
                                  <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
                                        <span>3.</span> Djanj  sit amet, consectetur adipisicing elit, sed do eiusmod tem pororem ?. 
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magaliqua. oenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duidolreprehendevoluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecupidatat proident, sunt in culpa qui officideserunt mollitanim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium d sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labor fqa cabfm szdt jkasp faq havrtm
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Accordion Area -->
        <!-- Start Footer Area -->
        @include('include.footer');
        <!-- End Footer Area -->
        <!-- Login Form -->
        <div class="accountbox-wrapper">
            <div class="accountbox text-left">
                <ul class="nav accountbox__filters" id="myTab" role="tablist">
                    <li>
                        <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Login</a>
                    </li>
                    <li>
                        <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="accountbox__inner tab-content" id="myTabContent">
                    <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                        <form action="#">
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" placeholder="User name or email">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Password">
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn"><span>Go</span></button>
                            </div>
                            <div class="accountbox-login__others">
                                <h6>Or login with</h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="#">
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" placeholder="User name">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="email" placeholder="Email address">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Password">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Confirm password">
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn"><span>Sign Up</span></button>
                            </div>
                        </form>
                    </div>
                    <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
                </div>
            </div>
        </div><!-- //Login Form -->
            <!-- Cartbox -->
        <div class="cartbox-wrap">
            <div class="cartbox text-right">
                <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
                <div class="cartbox__inner text-left">
                    <div class="cartbox__items">
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/1.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Vanila Muffin</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$15</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/2.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Wheat Bread</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$25</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/3.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Mixed Fruits Pie</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$30</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                    </div>
                    <div class="cartbox__total">
                        <ul>
                            <li><span class="cartbox__total__title">Subtotal</span><span class="price">$70</span></li>
                            <li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">$05</span></li>
                            <li class="grandtotal">Total<span class="price">$75</span></li>
                        </ul>
                    </div>
                    <div class="cartbox__buttons">
                        <a class="food__btn" href="cart.html"><span>View cart</span></a>
                        <a class="food__btn" href="checkout.html"><span>Checkout</span></a>
                    </div>
                </div>
            </div>
        </div><!-- //Cartbox -->        
	</div><!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
</body>

<!-- Mirrored from demo.hasthemes.com/aahar-preview/aahar/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Dec 2021 10:47:50 GMT -->
</html>
