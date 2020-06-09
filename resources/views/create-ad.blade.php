@extends('layouts.app')

@section('content')

<div class="create-ad">
  <div class="content">
     <div class="row">
        <div class="col-md-4">
        </div>
     <div class="col-md-4">
         <form method="POST" action="/" enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Product name*</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Price (Rs)*</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="price">
            </div>
            <div class="form-group">
                 <label for="exampleFormControlInput1">In stock*</label>
                 <input type="number" class="form-control" value="1" id="exampleFormControlInput1" name="stock" min="0" max="100">
            </div>
             <div class="form-group">
                <label for="exampleFormControlSelect1">Product category*</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option selected="true" disabled="disabled">Select category*</option>
                <option value="1">Laptop</option>
                <option value="2">Desktop</option>
                <option value="3">Tablet</option>
                <option value="4">Smartphone</option>
                <option value="5">Watch</option>
                <option value="6">Speaker</option>
                <option value="7">Headset</option>
                <option value="8">Camera</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Product description*</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
             <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01"
                aria-describedby="inputGroupFileAddon01" name="profile">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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