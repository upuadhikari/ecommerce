@extends('templetes')
@section('body')
<table style="width:100%">
   <tr>
      <td>Student id</td>
      <td>Content</td>
      <td>Date</td>

    </tr>

@foreach ($posts as $row) 

    <tr class="p-3 mb-2 bg-primary text-white">
  
      <td>{{$row->pid}}</td>
      <td>{{$row->pcontent}}</td>
      <td>{{$row->pdate}}</td>

   </tr> 
@endforeach
        
</table>
@endsection