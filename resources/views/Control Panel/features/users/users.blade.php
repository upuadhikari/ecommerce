@extends('Control Panel.panel-template')


@section('panel-content')

<a href="/cpanel"><div style="color:#c4c4c4;margin-top:10px;"><i class="fas fa-arrow-circle-left"></i> back</div></a>

<a href="/cpanel/users/add">
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
  <thead>
    <tr>
      <th scope="col">User_Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>

      <th scope="col" colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users->skip(1) as $data)
    <tr>
       <td>{{$data->id}}</td>
       <td>{{$data->name}}</td>
       <td>{{$data->address}}</td>
       <td>{{$data->contact}}</td>
       <td>{{$data->gender}}</td>
       <td>{{$data->email}}</td>
      
       <td ><a href="/cpanel/users/delete/{{$data->id}}" style="color:#d47f7f;"><i class="fas fa-times-circle"></i></a></td>
       <td><a href="users/{{$data->id}}/edit"><i class="far fa-edit"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
     