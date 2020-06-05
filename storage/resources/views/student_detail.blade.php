@extends('templetes')
@section('body')
<table style="width:100%">
   <tr>
      <td>Name</td>
      <td>Email</td>
    </tr>

@foreach ($users as $row)
    <tr class="p-3 mb-2 bg-primary text-white">
  
      <td>{{$row->username}}</td>
      <td>{{$row->email}}</td>
   </tr> 
@endforeach      
</table>
@endsection