@extends('Control Panel.panel-template')


@section('panel-content')

@if (session()->has('status'))
<div class="alert alert-success alert-dismissible container" style="text-align:center">
    
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

    {{ session()->get('status')}}
</div>
@endif

<a href="/cpanel/categories"><div style="color:#c4c4c4;margin-top:10px;"><i class="fas fa-arrow-circle-left"></i> back</div></a>

<div class="create-ad" style="margin-top:50px;">
  <div class="content">
     <div class="row">
        <div class="col-md-3">
        </div>
     <div class="col-md-6">
         <form method="POST" action="/cpanel/categories/add" enctype="multipart/form-data">
           @csrf
            <div class="form-group" @error('cname') has-error @enderror>
                <label for="exampleFormControlInput1">Category name*</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="cname">
                @error('cname')
                <p class="alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group" @error('description') has-error @enderror>
                <label for="exampleFormControlTextarea1">Category description*</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                 @error('description')
                <p class="alert-danger">{{ $message }}</p>
                @enderror
            </div><br><br>
            <button id="create-btn">Create</button>
        </form>
     </div>
        <div class="col-md-3">
        </div>
    </div>
  </div>    
</div>



@endsection