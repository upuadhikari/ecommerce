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
        <h2 id="tp">Our <b>Products</b></h2>
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
            <h2 id="tp">Trending <b>Products</b></h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0"> 
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item carousel-item active">
                    <div class="row">
                        <!-- From here card start -->
                        <div class="col-sm-3" >
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/ipad.jfif" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Apple iPad Pro</h4>
                                    <p class="item-price"><strike>Rs 80,000</strike> <span>Rs 76,900</span></p>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                        <!-- card end here -->
                    </div>
                </div>
                <div class="item carousel-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/ps.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Sony Play Station</h4>
                                    <p class="item-price"><strike>Rs 48,900</strike> <span>Rs 46,900</span></p>                               
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/m-pro.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Macbook Pro</h4>
                                    <p class="item-price"><strike>Rs 1,59,900</strike> <span>Rs 9,99,00</span></p>                                   
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/bose.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Bose Speaker</h4>
                                    <p class="item-price"><strike>Rs 10,900</strike> <span>Rs 9,900</span></p>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/s9.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Samsung Galaxy S9</h4>
                                    <p class="item-price"><strike>Rs 99,900</strike> <span>Rs 96,900</span></p>                                
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
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/canon.png" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Canon DSLR</h4>
                                    <p class="item-price"><strike>Rs 61,500</strike> <span>Rs 55,000</span></p>
                                    
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/pixel.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Google Pixel</h4>
                                    <p class="item-price"><strike>Rs 65,000</strike> <span>Rs 61,800</span></p>
                                  
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>  
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/img/products/watch.jfif" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Apple Watch</h4>
                                    <p class="item-price"><strike>Rs 45,000</strike> <span>Rs 40,000</span></p>
                                    
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
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
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
    </section>
    <!-- Latest Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: Panga-08, kirtipur</li>
                            <li>Phone: +977-9860462244</li>
                            <li>Email: tech.shop@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                          <span>Copyright &copy;2021 All rights reserved |  TechShop</span>
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->


@endsection