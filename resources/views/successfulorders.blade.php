@include('include.head');
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Track Orders</h2>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- cart-main-area start -->

          @php
            session()->flash('success', "Your Order has been placed successfully . Your Tracking No is : {$data9->tracking_no} .");
            @endphp

                         
                           @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}} </div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
         
                           

        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <form action="#">   
                            
                        <div class="food__search">
                                <h4 class="side__title" style="text-align:center">Check your prodcut status </h4>
                                <div class="alert alert-success" style="text-align:center"> 
                                <div class="serch__box">
                                    <form action="" >
                                        @csrf
                                    <input type="text" placeholder="Enter your Tracking number" value="" name ="search">
                                    </form>
                                    <a href="#serch__box"><i class="fa fa-search"></i></a>
                                </div>
                                </div>
                    </div >
                
                            <div class="table-content table-responsive">
                        
                                <table>

                                    <thead>
                                        <tr class="title-top">
                                            <!-- <th class="product-thumbnail">Image</th> -->
                                            <th class="product-name">Tracking No</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-subtotal">Status</th>
                                            <th class="product-subtotal">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $total = 0 ?>
                                   
                                       @foreach($order1 as $order)
                                       <?php $total += $order->price * $order->quantity ?>
                                        <tr>
                                        <td class="product-name"><a href="#">{{$order->tracking_no}}</a></td>
                                            <!-- <td class="product-thumbnail"><a href="#"><img src="/fullmenuimage/{{$order->image}}" alt="product img" /></a></td> -->
                                            <td class="product-name"><a href="#">{{$order->products_title}}</a></td>
                                            <td class="product-price"><span class="amount">৳{{$order->price}}</span></td>
                                            <td class="product-quantity">
                                                        
                                                <span class="number">{{$order->quantity}}</span>
                                            </td>
                                            @php 
                                            
                                              $grandtotal = $order->price*$order->quantity;
                                              
                                            @endphp 
                                            <td class="product-subtotal">৳ {{$grandtotal}}</td>
                                            <td class="product-subtotal">{{ $data9->status == '0'? ' Pending ':''}} 
                     {{ $data9->status == '1'? 'Order Accepted  ':''}} 
                    {{ $data9->status == '2'? 'Food on the way ':''}} 
                    {{ $data9->status == '3'? 'Delivered ':''}} </td>

                        <td class="product-subtotal">
                               <a href="{{url('/deletesuccessorder',$order->id)}}"> <i class="fa fa-trash"></i></a></td>
                                        </tr>
                                       
                            @endforeach
                          
                                    </tbody>
                                </table>
                            </div>
                        </form> 
                       
                    </div>
                </div>
               
            </div>  
        </div>
        <!-- cart-main-area end -->
          <!-- Start Footer Area -->
      @include('include.footer');
        <!-- End Footer Area -->





      