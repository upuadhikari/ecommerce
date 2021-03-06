@extends('layouts.app')

@section('content')
<!---Product slider--->
<div class="slider">
    <div id="container">
    <div class="row">
        <div class="col-md-12">
            <h2 id="tp" data-aos="fade-left"><b>Categories</b></h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0"> 
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item carousel-item active">
                    <div class="row">
                        <div class="col-sm-3" style="border:1px solid red">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="img/phone.jpg" class="img-responsive img-fluid" alt="">
                                </div>                     
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/details">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="img/desktop.jpg" class="img-responsive img-fluid" alt="">
                               </div>                                            
                            </div>
                        </div>      
                        <div class="col-sm-3">
                            <a href="/shop">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="img/laptop.jpg" class="img-responsive img-fluid" alt="">
                                </div>                     
                            </div>
                        </div>                              
                        <div class="col-sm-3">
                            <a href="/shop">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="img/tablet.jpg" class="img-responsive img-fluid" alt="">
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
                                    <img src="img/tablet.jpg" class="img-responsive img-fluid" alt="">
                                </div>                     
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/details">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="img/tablet.jpg" class="img-responsive img-fluid" alt="">
                                </div>                      
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/details">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="img/tablet.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                                   
                            </div>
                        </div>  
                        <div class="col-sm-3">
                            <a href="/details">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="img/tablet.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                                     
                            </div>
                        </div>
                         <div class="col-sm-3">
                            <a href="/details">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="img/tablet.jpg" class="img-responsive img-fluid" alt="">
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
        <center><button id="view-more">view more</button></center>
        </div>
    </div>
    <hr>
</div>
@endsection                                  