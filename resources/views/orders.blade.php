@include('include.head');
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">My Orders</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">Orders</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- cart-main-area start -->

 
                   


  
                


              
                 <!-- <span style="color: red; font-style:italic"> <b> Order Status:    {{ $data9->status == '0'? ' Pending ':''}} 
                     {{ $data9->status == '1'? 'Order Accepted  ':''}} 
                    {{ $data9->status == '2'? 'Food on the way ':''}} 
                    {{ $data9->status == '3'? 'Delivered ':''}}  </b></span>  -->
                


   

        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                        
                                <table>

                                    <thead>
                                        <tr class="title-top">
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
                                   
                                       @foreach($order as $order)
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
                               <a href="{{url('/deleteorder',$data9->id)}}"> <i class="fa fa-trash"></i></a></td>
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




<!-- <script type="text/javascript">
     $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
        </script> -->
      