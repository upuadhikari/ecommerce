@extends('layouts.app')

@section('content')

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                         @include('sidebar')
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Brand</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                <label for="bc-calvin">
                                    Samsung
                                    <input type="checkbox" id="bc-calvin">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-diesel">
                                    Apple
                                    <input type="checkbox" id="bc-diesel">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-polo">
                                    Mi
                                    <input type="checkbox" id="bc-polo">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-tommy">
                                    Google
                                    <input type="checkbox" id="bc-tommy">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>               
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-thumbs">
                                <div class="product-thumbs-track">
                                    <div data-imgbigurl="img/product-single/product-1.jpg"><img
                                            src="/uploads/profile/{{$product->image}}" alt=""></div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>Apples</span>
                                    <h3>{{$product->name}}</h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
            
                                <div class="pd-desc">
                                    <p>{{$product->description}}</p>
                                    <h4>{{$product->price}} <span>Rs {{$product->price+$product->price*0.2}}</span></h4>
                                </div>
                                                             
                                <div class="quantity">
                                    <input type="number" id="quantity" value="1" min="0" max="20" style="border:none; width:50px;margin-right:15px; font-size:16px;background-color:unset;">
                                    <a href="#" class="primary-btn pd-cart">Add To Cart</a>
                                </div>
                                <ul class="pd-tags">
                                    <li><span>CATEGORIES: </span>{{$product->category->name}}</li>
                                </ul>
                                <div class="pd-share">
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                           
                        <div class="taab-item-content">
                            <div class="taab-content">
                                <div class="taab-pane">
                                    <div class="specification-table">
                                        <table class="table-condensed">                                          
                                            <tr>
                                                <td class="p-catagory">Price</td>
                                                <td>
                                                    <div class="p-price">{{$product->price}}</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Dimensions (mm)</td>
                                                <td>
                                                    <div class="cart-add">305.70 x 220.60 x 6.90</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Availability</td>
                                                <td>
                                                    <div class="p-stock">22 in stock</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Weight</td>
                                                <td>
                                                    <div class="p-weight">713.00 g</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Screen size (inches)</td>
                                                <td>
                                                    <div class="p-size">12.90</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Processor</td>
                                                <td><span class="cs-code">one-core</span></td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Processor make</td>
                                                <td>
                                                    <div class="p-code">Apple A9X</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">RAM</td>
                                                <td>
                                                    <div class="p-code">4GB</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Internal storage</td>
                                                <td>
                                                    <div class="p-code">32GB</div>
                                                </td>
                                            </tr>
                                              <tr>
                                                <td class="p-catagory">Rear camera</td>
                                                <td>
                                                    <div class="p-code">16 mp</div>
                                                </td>
                                            </tr>
                                              <tr>
                                                <td class="p-catagory">Front camera</td>
                                                <td>
                                                    <div class="p-code">10 mp</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </section>
    <!-- Product Shop Section End -->


@endsection