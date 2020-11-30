@extends('layouts.app')

@section('content')
 <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                           
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    $total=0;
                                ?>
                            @foreach($items as $item)
                                
                                <tr id="findclosest">
                                    <td class="cart-pic first-row"><img src="{{ $item->picture_url}}" alt="" style="width:100px"></td>
                                    <td class="cart-title first-row">
                                        <h5>{{ $item->name}}</h5>
                                    </td>
                                    <td class="p-price first-row">{{ $item->price}}</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity" id="updatequantity">
                                          
                                                <input type="number" id="quantity" value="{{ $item->quantity}}" min="0" max="20">
                                            
                                        </div>
                                    </td>
                                    <td><input type="text" value="{{$item->cart_id}}" id="idpass" class="idofdata"  hidden></td>
                                    <td class="total-price first-row">{{ $item->price *$item->quantity}}</td>
                                    <?php
                                    $total+=$item->price *$item->quantity;
                                    ?>
                                    <td class="close-td first-row" id="deletefromocart"><i class="ti-close"></i></td>
                                </tr>

                            @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>Rs.240.00</span></li>
                                    <li class="cart-total">Total <span>Rs.{{$total}}</span></li>
                                </ul>
                                <a href="/checkout" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ajax script for upadte and delete from cart -->

        <script type="text/javascript">
            $(document).ready(function() {

                // Ajax script to delete cart item
                $(document).on('click','#deletefromocart',function(e){
                  e.stopPropagation();
                  e.stopImmediatePropagation();
                  var id=$(this).closest('#findclosest').find('.idofdata').val();
                  $.ajax({
                    url: "/deletefromcarturl",
                    type: "POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        cartid:id},
                    success: function(){
                      alert('Data deleted from cart!');
                      location.reload();
                    }
                  });
                });

                // Ajax script to update cart item
                $(document).on('click','#updatequantity',function(e){
                  e.stopPropagation();
                  e.stopImmediatePropagation();
                  var id=$(this).closest('#findclosest').find('.idofdata').val();
                  var quantity=$(this).closest('#findclosest').find('#quantity').val();
                  $.ajax({
                    url: "/updatecarturl",
                    type: "POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        cartid:id,
                        productquantity:quantity
                    },
                    success: function(){
                    }
                  });
                });


            });
        </script>
        <!-- ajax script end -->

    <!-- Shopping Cart Section End -->



@endsection