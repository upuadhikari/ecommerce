@extends('Control Panel.panel-template')


@section('panel-content')


<header class="dashboard">
    <h6> Dashboard</h6>
</header>



<div class="row" id="panel-menu1">
    <div class="col-md-4" id="col">
       <a href="/cpanel/products"> 
       <div class="box1">
           <h5>Products</h5>
           <img src="./img/tablet.png" width="200"  style="opacity:0.1"/>
           <h6>Click for details <i class="fas fa-arrow-circle-right"></i></h6>
       </div>
       </a>
    </div>
     <div class="col-md-4" id="col">
         <a href="/cpanel/customers"> 
         <div class="box1">
           <h5>Customers</h5>
           <img src="./img/value.png" width="200"  style="opacity:0.1"/> 
           <h6>Click for details <i class="fas fa-arrow-circle-right"></i></h6>          
       </div>
       </a>
    </div>
     <div class="col-md-4" id="col">
       <a href="/cpanel/categories"> 

         <div class="box1">
           <h5>Categories</h5>
           <img src="./img/backend.png" width="200"  style="opacity:0.1"/> 
           <h6>Click for details <i class="fas fa-arrow-circle-right"></i></h6>
           
       </div> 
       </a>
    </div>
</div>

<div class="row" id="panel-menu2">
    <div class="col-md-4" id="col">
        <a href="/cpanel/users"> 
        <div class="box1">
           <h5>Users</h5>
           <img src="./img/user.png" width="200"  style="opacity:0.1"/>  
           <h6>Click for details <i class="fas fa-arrow-circle-right"></i></h6>          
       </div>
         </a>
    </div>
     <div class="col-md-4" id="col">
         <div class="box1">
           <h5>Orders</h5>
           <img src="./img/shopping-cart.png" width="200"  style="opacity:0.1"/>  
           <h6>Click for details <i class="fas fa-arrow-circle-right"></i></h6>
           

       </div>
    </div>
     <div class="col-md-4" id="col">
         <div class="box1">
           <h5>Check out</h5>
           <img src="./img/bill.png" width="200"  style="opacity:0.1"/>  
           <h6>Click for details <i class="fas fa-arrow-circle-right"></i></h6>
           
       </div>
    </div>
</div>

@endsection