@extends('layouts.app')

@section('content')

 <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row" style="width:90%;margin:0 auto;">
                <div class="col-lg-12">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="myproducts">
                               <h5 style="color:grey; padding-left:15px; padding-bottom:40px;">My Products <i class="fas fa-arrow-circle-right"></i></h5> 
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                        @foreach($myproducts as $item)
                            <div class="col-lg-4 col-sm-6" >
                                <div class="product-item" id="findclosest" style="width:100%;auto; box-shadow: 0px 5px 10px 2px #e0e0e0">
                                    <div class="pi-pic">
                                        <img src="/uploads/profile/{{$item->image}}" alt="" >
                                        <a type="button" class="icon" id="my_modal" data-toggle="modal" data-target="#exampleModal" data-id="{{ $item->product_id }}">
                                        <i class="fas fa-times"></i>
                                        </a>                                                                       
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{{$item->category->name}}</div>
                                        <a href="#">
                                            <h5>{{$item->name}}</h5>
                                        </a>
                                        <div class="product-price">
                                            Rs {{$item->price}}
                                            <span>Rs {{$item->price+$item->price*0.2}}</span>
                                        </div>
                                    </div>
                                    <br>
                                    <input type="text" value="{{$item->product_id}}" id="idpass" class="idofdata"  hidden>
                                 <center><a href="/myproducts/{{$item->product_id}}/edit"><button id="addtocart">Edit</button></a></center>
                                    
         
                               <!-- Modal -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <form id="delete_form" method="get">
                                        @csrf
                                       
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header danger">
                                                <h5 class="modal-title" id="exampleModalLabel">Deleting a product</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure to delete ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                            <button type="submit" class="btn btn-2">Yes</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                             </div>
                        </div> 
                    </div>

             <script type="text/javascript">
               $(document).on("click", "#my_modal", function () {
                var id = $(this).data('id');
                $('#delete_form').attr('action', '/myproducts/delete/' + id);
            });
            </script>       

            @endforeach
                           
                </div> 
            </div>
        </div>
    </section>


@endsection