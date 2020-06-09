@extends('layouts.app')

@section('content')

 <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            <li><a href="#">Mobile</a></li>
                            <li><a href="#">Desktop</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">Speaker</a></li>
                            <li><a href="#">Tablet</a></li>
                            <li><a href="#">Camera</a></li>
                            <li><a href="#">Watch</a></li>
                        </ul>
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
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                               
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Show 01- 09 Of 36 Product</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                        @foreach($items as $item)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item" id="findclosest" style="width: 75%; margin:20px auto;">
                                    <div class="pi-pic">
                                        <img src="/uploads/profile/{{ $item->image}}" alt="" >
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            
                                            <li class="quick-view"><a href="/products/details/{{$item->product_id}}">+ Quick View</a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Tablet</div>
                                        <a href="#">
                                            <h5>{{$item->name}}</h5>
                                        </a>
                                        <div class="product-price">
                                            Rs {{$item->price}}
                                            <span>Rs {{$item->price+$item->price*0.2}}</span>
                                        </div>
                                    </div>
                                    <input type="text" value="{{$item->product_id}}" id="idpass" class="idofdata"  hidden>
                                   
                                </div>
                                 <center><button id="addtocart">Add to cart</button></center>
                            </div>
                            @endforeach
                           
                </div> 
            </div>
        </div>
    </section>
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
        
    <!-- Product Shop Section End -->
  

@endsection