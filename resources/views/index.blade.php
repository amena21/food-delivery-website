@include('include.head');
        <!-- End Header Area -->
        <!-- Start Slider Area -->
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
                                           
                                            <!-- <h1 class="layear-1" >Good Food , Good Health</h1> -->
                                            <br>
                                            <!-- <img class="layear-2" src="{{asset('assets/images/slider/text/1.png')}}" alt="slider text image"> -->
                                            <h1 class="layear-2" >{{$data->website_name}}</h1>
                                            <!-- <img class="layear-1" src="{{asset('assets/images/slider/text/1.png')}}" alt="slider text image"> -->
                                            <h2 class="layear-2" style="color: #000000;font-size: 40px;">Delivery Service</h2>
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
                                    <form method="post" action="{{url('addcart',$data2->id)}}">
                                        @csrf
                                    <input class="food__btn white--btn" type="number" value="1" min="1" style="width:80px;" name="quantity">
                                    <input class="food__btn white--btn" type="submit"  value="Order Now">
                                    </form>
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
                                    <a class="food__btn white--btn" href="menu">Check Menu</a>
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
                                <!-- <p>The process of our service </p> -->
                                <h2 class="title__line">Our Special Items</h2>
                            </div>
                        </div>
                    </div>
                 
                    <div class="row mt--40">
                        <!-- Start Single Pizza -->

                        @foreach($data3 as $data3)
                        <div class="col-lg-4 col-md-6 col-sm-12" style="box-shadow: 0px 0px 12px #888888;">
                            <div class="pizza foo">
                                <div class="pizza__thumb">
                                    <img src="/specialitemimage/{{$data3->image}}" alt="pizza images">
                                    <div class="pizza__hover__action">
                                        <span class="pizza__prize">৳{{$data3->price}}</span>
                                    </div>
                                </div>
                                <div class="pizza__details">
                                    <h2 class="pizza__title"><a>{{$data3->title}}</a></h2>
                                    <p>{{$data3->description}}</p>
                                  
                                 
                                    <div class="pizza__btn">
                                        <a class="food__btn white--btn theme--hover" href="{{url('menu/{id}')}}">Order Online</a>
                                        <!-- <input class="food__btn white--btn" type="number" value="1" min="1" style="width:80px;" name="quantity">
                                        <input class="food__btn white--btn theme--hover" type="submit"  value="Order Now"> -->
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
            <div class="order-now-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="fd__order__now text-center">
                                <div class="order__now__inner">
                                    <h6>We Offer Free Delivery</h6>
                                    <h2>Order Now: {{$data7->phone}}</h2>
                                    <!-- <p>Extremely thin ,juicy,cheeze,fluffy,crispy & light weight Pizza</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
            <div class="resturent__food__menu plr--280px mt--80 d-flex flex-wrap">
                <!-- Start Single Resturent Food -->
                @foreach($data4 as $data4)

                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="menu-details.html">
                                            <img src="/fullmenuimage/{{$data4->image}}" alt="list food images">
                                        </a>
                                    </div>
                                    <div class="food__list__inner d-flex align-items-center justify-content-between">
                                        <div class="food__list__details">
                                            <h2><a href="menu-details.html">{{$data4->title}}</a></h2>
                                            <p>{{$data4->description}}</p>
                                            <form action="{{url('addcart',$data4->id)}}"  method="post">
                                    @csrf
                                    <div class="pizza__btn">
                                        <!-- <a class="food__btn white--btn theme--hover" href="menu-details.html">Order Online</a> -->
                                        <input class="food__btn white--btn" type="number" value="1" min="1" style="width:80px;" name="quantity">
                                        <input class="food__btn white--btn theme--hover" type="submit"  value="Add to Cart">
                                        
                                    </div>
                                    </form>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span>{{$data4->price}}BDT</span>
                                            </div>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
               
                @endforeach
               
                   
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
            <div  class="service__align--center">
                <a class="food__btn" href="{{url('menu/{id}')}}" style="text-align:center">View Full Menu</a>
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

      
      @include('include.footer')
        <!-- End Footer Area -->
