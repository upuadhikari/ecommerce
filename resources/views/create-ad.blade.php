@extends('layouts.app')

@section('content')

@if (session()->has('status'))
<div class="alert alert-success alert-dismissible container" style="text-align:center">
    
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

    {{ session()->get('status')}}
</div>
@endif

<div class="create-ad">
  <div class="content">
     <div class="row">
        <div class="col-md-4">
        </div>
     <div class="col-md-4">
         <form method="POST" action="/" enctype="multipart/form-data">
           @csrf
            <div class="form-group" @error('name') has-error @enderror>
                <label for="exampleFormControlInput1">Product name*</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                @error('name')
                <p class="alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group" @error('price') has-error @enderror>
                <label for="exampleFormControlInput1">Price (Rs)*</label>
                <input style="font-family:sans-serif;" type="number" class="form-control" id="exampleFormControlInput1" name="price">
                 @error('price')
                <p class="alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group" @error('stock') has-error @enderror>
                 <label for="exampleFormControlInput1">In stock*</label>
                 <input type="number" class="form-control" value="1" id="exampleFormControlInput1" name="stock" min="0" max="100">
                  @error('stock')
                <p class="alert-danger">{{ $message }}</p>
                @enderror
            </div>
             <div class="form-group" @error('category') has-error @enderror>
                <label for="exampleFormControlSelect1">Product category*</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category">
                <option selected="true" disabled="disabled">Select category*</option>
                <option value="1">Laptop</option>
                <option value="2">Desktop</option>
                <option value="3">Tablet</option>
                <option value="4">Smartphone</option>
                <option value="5">Watch</option>
                <option value="6">Speaker</option>
                <option value="7">Headset</option>
                <option value="8">Camera</option>
                <option value="9">Console</option>
                </select>
                 @error('category')
                <p class="alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group" @error('description') has-error @enderror>
                <label for="exampleFormControlTextarea1">Product description*</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                 @error('description')
                <p class="alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="custom-file" @error('profile') has-error @enderror>
                <label class="profile" for="profile">
                    <input type="file" name="profile" width="120">
                </label>
                 @error('profile')
                <p class="alert-danger">{{ $message }}</p>
                @enderror
            </div><br><br>
            <button id="create-btn">Create</button>
        </form>
     </div>
        <div class="col-md-4">
        </div>
    </div>
  </div>    
</div>



@endsection