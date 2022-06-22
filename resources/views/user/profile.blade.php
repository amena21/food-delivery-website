@include('include.head');


      <!-- Start Bradcaump area -->
      <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Profile</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">User Profile</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 



        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                          
                                <table>

                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">Name</th>
                                            <th class="product-name">Address</th>
                                            <th class="product-price">Phone</th>
                                            <th class="product-quantity">Email</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                               
                                
                                        <tr>
                                           
                                            <td class="product-name"><a href="#">{{$user->name}}</a></td>
                                            <td class="product-price"><span class="amount">{{$user->address}}</span></td>
                                            <td class="product-quantity">
                                                        
                                                <span class="number">{{$user->phone}}</span>
                                            </td>
                                           
                                            <td class="product-subtotal">{{$user->email}}</td>
                                            
                                        </tr>
                                       
                        
                                    </tbody>
                                </table>
                            </div>
                        </form> 
                     
                    </div>
                </div>
               
            </div>  
        </div>

@include('include.footer');