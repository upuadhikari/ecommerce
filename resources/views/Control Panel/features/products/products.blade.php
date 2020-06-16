@extends('Control Panel.panel-template')


@section('panel-content')

<a href="/cpanel"><div style="color:#c4c4c4;margin-top:10px;"><i class="fas fa-arrow-circle-left"></i> back</div></a>


<a href="/cpanel/products/add">
<div id="add-btn">
    
   <div class="content">
       <div class="col1">
          <i class="fas fa-plus"></i>
       </div>
       <div class="col2">
           <span>Add</span>
       </div>
   </div>    

</div>
</a>
 
<table class="table table-striped">
  <thead >
    <tr>
      <th scope="col">P_Id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">In stock</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">User id</th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach($products as $data)
    <tr>
       <td>{{$data->product_id}}</td>
       <td>{{$data->name}}</td>
       <td>{{$data->description}}</td>
       <td>{{$data->available_stocks}}</td>
       <td>{{$data->price}}</td>
       <td>{{$data->category->name}}</td>
       <td>{{$data->image}}</td>
       <td>{{$data->user_id}}</td>
       <td ><a href="products/delete/{{$data->product_id}}" style="color:#d47f7f;"><i class="fas fa-times-circle"></i></a></td>
       <td><a href="products/{{$data->product_id}}/edit"><i class="far fa-edit"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
     