@include('include.head');
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">cart page</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">cart page</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- cart-main-area start -->
        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                            @if(session()->has('message'))
                                    <div class="alert alert-success"> 
                                        <button type="button" class="close" data-dismiss="alert">
                                            X
                                        </button>
                                        {{session()->get('message')}}
                                    </div>
                                    @endif
                                <table>

                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $total = 0 ?>
                                    @if(session::has('loginId'))
                                     @if(session('cart'))
                                       @foreach(session('cart') as $id => $count)
                                       <?php $total += $count['price'] * $count['quantity'] ?>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="/fullmenuimage/{{$count['image']}}" alt="product img" /></a></td>
                                            <td class="product-name"><a href="#">{{$count['products_title']}}</a></td>
                                            <td class="product-price"><span class="amount">৳{{$count['price']}}</span></td>
                                            <td class="product-quantity">
                                                        
                                                <span class="number">{{$count['quantity']}}</span>
                                            </td>
                                            @php 
                                              $grandtotal = $count['price']*$count['quantity'];
                                              
                                            @endphp 
                                            <td class="product-subtotal">৳ {{$grandtotal}}</td>
                                            <td class="product-remove"><a href="{{url('/deletecart',$id)}}"  >X</a></td>
                                        </tr>
                                       
                            @endforeach
                           @endif
                           @endif
                                    </tbody>
                                </table>
                            </div>
                        </form> 
                        <div class="cartbox__btn">
                            <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                              
                                <li></li>
                                <li><a href="{{url('checkout',$count['id'])}}">Check Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <!-- <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Cart total</li>
                                    <li>Sub Total</li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>৳70</li>
                                    <li>৳70</li>
                                </ul>
                            </div> -->
                            <div class="cart__total__amount"> 
                              
                                <span>Grand Total</span>
                                <span> ৳{{ $total }}</span>
                                
                               
                            </div>
                        </div>
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
      