@include('include.head');
        <!-- End Header Area -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Checkout</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">Checkout</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 


         <section class="htc__checkout bg--white section-padding--lg">

                           @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}} </div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                       
            <!-- Checkout Section Start-->
            <div class="checkout-section">
                <div class="container">
                    <div class="row">


                   
                            
                            <!-- Order Details -->
                            <div class="col-lg-6 col-12 mb-30">
                               
                                <div class="order-details-wrapper">
                                    <h2>your order</h2>
                                    <div class="order-details">
                                        <form action="#">
                                            <ul>
                                                <li><p class="strong">product</p><p class="strong">total</p></li>

                                            
                                              <?php $total = 0 ?>
                                               @if(session('cart'))
                                               @foreach(session('cart') as $id => $count)
                                               <?php $total += $count['price'] * $count['quantity'] ?>
                                                <li><p>{{$count['products_title']}} x {{$count['quantity']}}</p><p>{{$count['price']*$count['quantity']}}</p></li>
                                                
                                                @endforeach

                                               
                                                <li><p class="strong">cart subtotal</p><p class="strong">৳{{ $total }}</p></li>
                                                @endif
                                                <li><p class="strong">shipping</p><p>
                                                <input type="radio" name="order-shipping" id="flat" /><label for="flat">Flat Rate ৳ 70.00</label><br />
                                                    <!-- <input type="radio" name="order-shipping" id="free" /><label for="free">Free Shipping</label> -->
                                                </p></li>

                                                @php
                                                $alltotal= $total +70;
                                                @endphp
                                                <li><p class="strong">order total</p><p class="strong">৳{{ $total +70}} </p></li>
                                              
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-lg-6 col-12 mb-30">
                               
                               <!-- Checkout Accordion Start -->
                               <div id="checkout-accordion">
                                  
                                   <!-- Checkout Method -->
                                   <!-- <div class="single-accordion">
                                       <a class="accordion-head" data-toggle="collapse" data-parent="#checkout-accordion" href="#checkout-method">1. checkout method</a>
                                       
                                       <div id="checkout-method" class="collapse show">
                                           <div class="checkout-method accordion-body fix">
                                              
                                               <ul class="checkout-method-list">
                                                   <li class="active" data-form="checkout-login-form">Login</li>
                                                   <li data-form="checkout-register-form">Register</li>
                                               </ul>
                                               
                                               <form action="#" class="checkout-login-form">
                                                   <div class="row">
                                                       <div class="input-box col-md-6 col-12 mb--20"><input type="email" placeholder="Email Address"></div>
                                                       <div class="input-box col-md-6 col-12 mb--20"><input type="password" placeholder="Password"></div>
                                                       <div class="input-box col-12"><input type="submit" value="Login"></div>
                                                   </div>
                                               </form>
                                               
                                               <form action="#" class="checkout-register-form">
                                                   <div class="row">
                                                       <div class="input-box col-md-6 col-12 mb--20"><input type="text" placeholder="Your Name"></div>
                                                       <div class="input-box col-md-6 col-12 mb--20"><input type="email" placeholder="Email Address"></div>
                                                       <div class="input-box col-md-6 col-12 mb--20"><input type="password" placeholder="Password"></div>
                                                       <div class="input-box col-md-6 col-12 mb--20"><input type="password" placeholder="Confirm Password"></div>
                                                       <div class="input-box col-12"><input type="submit" value="Register"></div>
                                                   </div>
                                               </form>
                                               
                                           </div>
                                       </div>
                                       
                                   </div> -->
                                   

                                       <!-- Shipping Method -->
                                       <div class="single-accordion">
                                       <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#shipping-method">1. Personal informatioon</a>
                                       <div id="shipping-method" class="collapse">
                                           <div class="accordion-body shipping-method fix">
                                           <h5>Personal info</h5>
                                               <p><span>Name &nbsp;</span>{{$user->name}}</p>
                                               <p><span>Phone &nbsp;</span>{{$user->phone}}</p>
                                               <p><span>Email &nbsp;</span>{{$user->email}}</p>
                                               <br>
                                               <h5>shipping address</h5>
                                               <p><span>address &nbsp;</span>{{$user->address}}</p>
                                               
                                              
                                               
                                           </div>
                                       </div>
                                   </div>
                                   <!-- Billing Method -->
                                   <div class="single-accordion">
                                       <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#billing-method">3. Billing informatioon</a>
                                       <div id="billing-method" class="collapse">

                                           <div class="accordion-body billing-method fix">

                                               <form action="{{ url('place_order',$id)}}" class="billing-form checkout-form" method="post">
                                               @csrf
                                                   <div class="row">
                                                     
                                                       
                                                      
                                                       <div class="col-12 mb--20">
                                                        <select name="pay_type">
                                                                <option>Select Payment Method</option>
                                                                <option value="cod">Cash on Delivery</option>
                                                                <option value="pvb">Pay via Bkash</option>
                                                                
                                                        </select>
                                                       </div>
                                                     
                                                   
                                                        <input type="hidden" name="name" value="{{$user->name}}"> 
                                                        <input type="hidden" name="phone" value="{{$user->phone}}"> 
                                                        <input type="hidden" name="email" value="{{$user->email}}"> 
                                                        <input type="hidden" name="address" value="{{$user->address}}"> 
                                                        @foreach(session('cart') as $id => $count)
                                                        <input type="hidden" name="products_title" value="{{$count['products_title']}}"> 
                                                        <input type="hidden" name="quantity" value="{{$count['quantity']}}"> 
                                                        <input type="hidden" name="price" value="{{$count['price']*$count['quantity']}}"> 
                                                        @endforeach
                                                       <input type="hidden" name="totalprice" value="{{$total + 70}}"> 
                                                      
                                                       <input class="food__btn" style="background: #d50c0d none repeat scroll 0 0;" type="submit" value="place order">
                                                    </div>
                                                  
                                               </form>
                                               
                                           </div>
                                       </div>
                                   </div>
                                   
                               
                                   
                                   <!-- Payment Method -->
                                   <!-- <div class="single-accordion">
                                       <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#payment-method">3. Payment method</a>
                                       <div id="payment-method" class="collapse">
                                           <div class="accordion-body payment-method fix">
                                              
                                               <ul class="payment-method-list">
                                                   <li class="active">Cash on Delivery</li>
                                                   <li class="payment-form-toggle">Pay via Bkash</li>
                                               </ul> -->
                                               
                                               <!-- <form action="#" class="payment-form">
                                                   <div class="row">
                                                       <div class="input-box col-12 mb--20">
                                                           <label for="card-name">Name on Card *</label>
                                                           <input type="text" id="card-name" />
                                                       </div>
                                                       <div class="input-box col-12 mb--20">
                                                           <label>Credit Card Type</label>
                                                           <select>
                                                               <option>Please Select</option>
                                                               <option>Credit Card Type 1</option>
                                                               <option>Credit Card Type 2</option>
                                                           </select>
                                                       </div>
                                                       <div class="input-box col-12 mb--20">
                                                           <label for="card-number">Credit Card Number *</label>
                                                           <input type="text" id="card-number" />
                                                       </div>
                                                       <div class="input-box col-12">
                                                           <div class="row">
                                                               <div class="input-box col-12">
                                                                   <label>Expiration Date</label>
                                                               </div>
                                                               <div class="input-box col-md-6 col-12 mb--20">
                                                                   <select>
                                                                       <option>Month</option>
                                                                       <option>Jan</option>
                                                                       <option>Feb</option>
                                                                       <option>Mar</option>
                                                                       <option>Apr</option>
                                                                       <option>May</option>
                                                                       <option>Jun</option>
                                                                       <option>Jul</option>
                                                                       <option>Aug</option>
                                                                       <option>Sep</option>
                                                                       <option>Oct</option>
                                                                       <option>Nov</option>
                                                                       <option>Dec</option>
                                                                   </select>
                                                               </div>
                                                               <div class="input-box col-md-6 col-12 mb--20">
                                                                   <select>
                                                                       <option>Year</option>
                                                                       <option>2015</option>
                                                                       <option>2016</option>
                                                                       <option>2017</option>
                                                                       <option>2018</option>
                                                                       <option>2019</option>
                                                                       <option>2020</option>
                                                                       <option>2021</option>
                                                                       <option>2022</option>
                                                                       <option>2023</option>
                                                                   </select>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="input-box col-12">
                                                           <label for="card-Verify">Card Verification Number *</label>
                                                           <input type="text" id="card-Verify" />
                                                           <a href="#">What is it ?</a>
                                                       </div>
                                                   </div>
                                               </form> -->
                                           
                                           <!-- </div>
                                       </div>
                                   </div> -->
                                   
                               </div><!-- Checkout Accordion Start -->
                           </div>
                        
                    </div>
                </div>
            </div><!-- Checkout Section End-->             
         </section>   
         <!-- Start Footer Area -->
      @include('include.footer');
        <!-- End Footer Area -->