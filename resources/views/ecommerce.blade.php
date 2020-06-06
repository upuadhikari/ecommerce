@extends('layouts.app')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/img1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/img2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/img3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 <div id="our-products" class="slider">
        <h2 id="tp" data-aos="fade-right" >Our <b>Products</b></h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0"> 
 </div>

 
  <div class="products">
      <div class="content">
          <div>
             <img src="img/phone.jpg" id="phone" />
             <button id="btn">Phone</button>
          </div>
          <div>
             <img src="img/desktop.jpg" id="desktop" />
             <button id="btn">Desktop</button>

          </div>
          <div>
             <img src="img/laptop.jpg" id="laptop" />
             <button id="btn">Laptop</button>

          </div>
          <div>
             <img src="img/tablet.jpg" id="tablet" />
             <button id="btn">Tablets</button>

          </div>
      </div>
</div>



<!---Product slider--->

<div class="slider">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 id="tp" data-aos="fade-left">Trending <b>Products</b></h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0"> 
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item carousel-item active">
                    <div class="row">


@foreach($items as $item)
                    <!-- start here -->
                        <div class="col-sm-3" >
                            <a href="/details">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{$item->picture_url}}" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>{{$item->name}}</h4>
                                    <p class="item-price"><strike>Rs {{$item->price+$item->price*0.2}}</strike> <span>Rs {{$item->price}}</span></p>
                                     </a>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                     

                    <!-- card end here -->
                @endforeach
                    </div>
                </div>
                <div class="item carousel-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="/details">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/ps.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Sony Play Station</h4>
                                    <p class="item-price"><strike>Rs 48,900</strike> <span>Rs 46,900</span></p>
                                    </a>                               
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/details">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/m-pro.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Macbook Pro</h4>
                                    <p class="item-price"><strike>Rs 1,09,900</strike> <span>Rs 99,900</span></p> 
                                    </a>                                  
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/details">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/bose.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Bose Speaker</h4>
                                    <p class="item-price"><strike>Rs 10,900</strike> <span>Rs 9,900</span></p>
                                    </a>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/details">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/s9.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Samsung Galaxy S9</h4>
                                    <p class="item-price"><strike>Rs 99,900</strike> <span>Rs 96,900</span></p> 
                                    </a>                               
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>                      
                    </div>
                </div>
                <div class="item carousel-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/iphone.jfif" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>iPhone 10 X</h4>
                                   <p class="item-price"><strike>Rs 96,900</strike> <span>Rs 94,900</span></p>
                                   </a>                                
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/details">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/canon.png" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Canon DSLR</h4>
                                    <p class="item-price"><strike>Rs 61,500</strike> <span>Rs 55,000</span></p>
                                    </a>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/details">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/pixel.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Google Pixel</h4>
                                    <p class="item-price"><strike>Rs 65,000</strike> <span>Rs 61,800</span></p>
                                    </a>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>  
                        <div class="col-sm-3">
                            <a href="/details">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/watch.jfif" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Apple Watch</h4>
                                    <p class="item-price"><strike>Rs 45,000</strike> <span>Rs 40,000</span></p>
                                     </a>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
        </div>
    </div>
    <hr>
</div>

<!---end of product slider--->

 <!-- Latest Blog Section Begin -->
        <div class="container">
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery On Time</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    <!-- Latest Blog Section End -->



@endsection