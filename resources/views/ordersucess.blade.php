@extends('layouts.app')

@section('content')
                    <div class="col-lg-6">
                        <div class="place-order">
                            <h4>Your order is made . Tranaction Completed You will receive a call from us soon.If you don't get message withing 2 working days please contact us through email and phone number</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <h4>Here is your order detail</h4>
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

@endsection