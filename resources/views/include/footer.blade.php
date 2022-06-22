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
       
            <!-- Cartbox -->
        <div class="cartbox-wrap">
            <div class="cartbox text-right">
                <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
                <div class="cartbox__inner text-left">
                    <div class="cartbox__items">
                        <!-- Cartbox Single Item -->
                        <?php $total = 0 ?>
                      @if(session::has('loginId'))
                      @if(session('cart'))
                                       @foreach(session('cart') as $id => $count)
                                       <?php $total += $count['price'] * $count['quantity'] ?>
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/images/blog/sm-img/1.jpg')}}" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">{{$count['products_title']}}</a></h5>
                                <p>Qty: <span>{{$count['quantity']}}</span></p>
                                <span class="price">৳{{ $total }}</span>
                            </div>
                            <button class="cartbox__item__remove">
                               <a href="{{url('/deletecart',$id)}}"> <i class="fa fa-trash"></i></a>
                            </button>
                        </div>
                        @endforeach
                        @endif
                        @endif
                        
                        <!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <!-- <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/images/blog/sm-img/2.jpg')}}" alt="small thumbnail">
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
                        </div> -->
                        <!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <!-- <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="{{asset('assets/images/blog/sm-img/3.jpg')}}" alt="small thumbnail">
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
                        </div> -->
                        <!-- //Cartbox Single Item -->
                    </div>
                    <div class="cartbox__total">
                        <ul>
                            <li><span class="cartbox__total__title">Subtotal</span><span class="price">৳{{ $total }}</span></li>
                            <li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">৳70</span></li>
                            <li class="grandtotal">Total<span class="price">৳{{ $total +70}}</span></li>
                        </ul>
                    </div>
                    <div class="cartbox__buttons">
                        <a class="food__btn" href="{{url('cart')}}"><span>View cart</span></a>
                        <a class="food__btn" href="{{url('checkout')}}"><span>Checkout</span></a>
                    </div>
                </div>
            </div>
        </div><!-- //Cartbox -->  
	</div><!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="{{asset('assets/js/vendor/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/plugins.js')}}"></script>
	<script src="{{asset('assets/js/active.js')}}"></script>
</body>


</html>
