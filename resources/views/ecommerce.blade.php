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
      <img class="d-block w-100" src="/img/img4.jpg" alt="Third slide">
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

<!---category slider--->
 <div id="our-products" class="slider" data-aos="fade-left">
        <h2 id="tp" ><b>Categories</b></h2>
 </div>
<div class="products">
  <div id="container"> 
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="4000">
      <div class="carousel-inner">
        <div class="carousel-item active">
           <div class="row" id="product-row">
             <div class="col-md-3">
                    <img src="/img/phone.jpg" id="image"> 
                       <a href="/category/search/4"><button id="btn">Phone</button></a>
                 </div>
            <div class="col-md-3">
                       <img src="/img/desktop.jpg" id="image">
                       <a href="/category/search/2"><button id="btn">Desktop</button></a>
                </div>
            <div class="col-md-3">
                       <img src="/img/laptop.jpg" id="image"> 
                       <a href="/category/search/1"><button id="btn">Laptop</button></a>                    
                   </div>
            <div class="col-md-3">
                       <img src="/img/tablet.jpg" id="image">
                       <a href="/category/search/3"><button id="btn">Tablet</button></a>
                   </div>
           </div>
        </div>
        <div class="carousel-item">
           <div class="row" id="product-row">
            <div class="col-md-3">
                       <img src="/img/headphone.jpg" id="image"> 
                       <a href="/category/search/7"><button id="btn">Headset</button></a>
                   </div>
            <div class="col-md-3">
                       <img src="/img/camera.jpg" id="image"> 
                       <a href="/category/search/8"><button id="btn">Camera</button></a>

                   </div>
            <div class="col-md-3">
                       <img src="/img/watch.jpg" id="image">
                       <a href="/category/search/5"><button id="btn">Watch</button></a>

                   </div>
            <div class="col-md-3">
                       <img src="/img/speaker.jpg" id="image"> 
                       <a href="/category/search/6"><button id="btn">Speaker</button></a>

                  </div>
           </div>
        </div>
      </div>
      <a class="carousel-control-prev" id="prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" id="next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
        </div>
        <hr>
  </div>
<div>




<!---product slider--->
<div class="slider">
    <div id="container">
    <div class="row">
        <div class="col-md-12">
            <h2 id="tp" data-aos="fade-left">Trending <b>Products</b></h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000"> 
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item carousel-item active">
                    <div class="row">


       @foreach($items->take(4) as $item)
                    <!-- start here -->
                        <div class="col-sm-3" >
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/uploads/profile/{{ $item->image}}" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content" id="findclosest">
                                    <input type="text" value="{{$item->product_id}}" id="idpass" class="idofdata"  hidden>
                                    <h4>{{$item->name}}</h4>
                                    <p class="item-price"><strike>Rs {{$item->price+$item->price*0.2}}</strike> <span>Rs {{$item->price}}</span></p>
                                    
                                    <a href="/products/details/{{$item->product_id}}" class="btn btn-primary">More details</a>
                                    
                                </div>                      
                            </div>
                        </div>
                     

                    <!-- card end here -->
                @endforeach
                    </div>
                </div>
                <div class="item carousel-item">
                    <div class="row">
                        
            @foreach($items->skip(4)->take(4) as $item)
                    <!-- start here -->
                        <div class="col-sm-3" >
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/uploads/profile/{{ $item->image}}" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content" id="findclosest">
                                    <input type="text" value="{{$item->product_id}}" id="idpass" class="idofdata"  hidden>
                                    <h4>{{$item->name}}</h4>
                                    <p class="item-price"><strike>Rs {{$item->price+$item->price*0.2}}</strike> <span>Rs {{$item->price}}</span></p>
                                     @guest
                                    <a class="btn btn-primary" href="/login" id="addtocart">Add to Cart</a>
                                    @else
                                    <a href="/products/details/{{$item->product_id}}" class="btn btn-primary">More details</a>
                                    @endguest
                                </div>                      
                            </div>
                        </div>
                     
                    <!-- card end here -->
                @endforeach
                    </div>
                </div>
                <div class="item carousel-item">
                    <div class="row">
                          @foreach($items->skip(8)->take(4) as $item)
                    <!-- start here -->
                        <div class="col-sm-3" >
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/uploads/profile/{{ $item->image}}" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content" id="findclosest">
                                    <input type="text" value="{{$item->product_id}}" id="idpass" class="idofdata"  hidden>
                                    <h4>{{$item->name}}</h4>
                                    <p class="item-price"><strike>Rs {{$item->price+$item->price*0.2}}</strike> <span>Rs {{$item->price}}</span></p>
                                     @guest
                                    <a class="btn btn-primary" href="/login" id="addtocart">Add to Cart</a>
                                    @else
                                    <a href="/products/details/{{$item->product_id}}" class="btn btn-primary">More details</a>
                                    @endguest
                                </div>                      
                            </div>
                        </div>
                     
                    <!-- card end here -->
                @endforeach  
                    
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
        @guest
        <center><a href="/login"><button id="view-more">View more</button></a></center>
        @else
        <center><a href="/shop"><button id="view-more">View more</button></a></center>
      
        @endguest
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

        <!-- Ajax script for add to cart -->

        <script type="text/javascript">
            $(document).ready(function() {
                $(document).on('click','#addtocart',function(e){
                  e.stopPropagation();
                  e.stopImmediatePropagation();
                  var id=$(this).closest('#findclosest').find('.idofdata').val();
                  alert(id);
                  $.ajax({
                    url: "/addtocarturl",
                    type: "POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        idofdata:id},
                    success: function(){
                      alert('Added to database cart!');
                      //location.reload();
                    }
                  });
                });
            });
        </script>
        <!-- ajax script end -->
    <!-- Latest Blog Section End -->



@endsection