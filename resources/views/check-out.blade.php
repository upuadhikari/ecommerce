@extends('layouts.app')

@section('content')


    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="/checkout/payment" method="POST" class="checkout-form">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        {{session('flash')}}
                        <h4>Biiling Details</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir">First Name<span>*</span></label>
                                <input type="text" id="fir" name="fname">
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Last Name<span>*</span></label>
                                <input type="text" id="last" name="lname">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun-name">Region</label>
                                <input type="text" id="cun-name" name="region">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">city<span>*</span></label>
                                <input type="text" id="street" class="street-first" name="city">
                                
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email Address<span>*</span></label>
                                <input type="text" id="email" name="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Phone<span>*</span></label>
                                <input type="text" id="phone" name="phone">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Choose payment method<span>*</span></label>
                                  <div id="paypal-button-container"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product <span>Total</span></li>
                                    <?php
                                    $total=0;
                                    ?>
                                    @foreach($items as $item)
                                    <li class="fw-normal">{{$item->name}} x {{$item->quantity}} <span>{{$item->quantity*$item->price}}</span></li>
                                    <?php
                                    $total+=$item->price *$item->quantity;
                                    ?>
                                    @endforeach



                                    <li class="fw-normal">Subtotal <span>$240.00</span></li>
                                    <li class="total-price" id="total" value="{{$total/100}}">Total <span>Rs.{{$total}}</span></li>
                                </ul>                           
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
    <script
    src="https://www.paypal.com/sdk/js?client-id=AaLfW-Kk7GRMkS-hVGA4RBSJpovRj5IK722J9bnFDAKvKn5o9asGX-eWH-0PpHcHPWXt0a1P3UUb4QT0"> 
    </script> 


    <script>
     const total = document.getElementById('total').value;
     paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: total,
            currency: 'NP',
          }
        }]
      });
    },
    style: {
          shape: 'pill',
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
        window.location.href = '/checkoutpaypal';
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
  </script>



@endsection