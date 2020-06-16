@extends('Control Panel.panel-template')


@section('panel-content')

@if (session()->has('status'))
<div class="alert alert-success alert-dismissible container" style="text-align:center">
    
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

    {{ session()->get('status')}}
</div>
@endif
<a href="/cpanel/user"><div style="color:#c4c4c4;margin-top:10px;"><i class="fas fa-arrow-circle-left"></i> back</div></a>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Add User</div>

                <div class="card-body">
                    <div class="wrapper2">
                        <form method="POST" action="/cpanel/users/add">
                            @csrf
    
                            <div class="form-group row">
                               
    
                                <div class="col-md-12">
                                    <input placeholder="Fullname*" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                             <div class="form-group row">
                               
    
                                <div class="col-md-12">
                                    <input placeholder="Current address*" id="address" type="text" class="form-control @error('name') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
    
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                             <div class="form-group row">
                               
    
                                <div class="col-md-12">
                                    <input placeholder="Phone no*" id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>
    
                                    @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                             <div class="form-group">
                                    <select class="form-control" id="gender" name="gender">
                                    <option selected="true" disabled="disabled">Select gender*</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other*</option>
                                    </select>
                                </div>
    
                            <div class="form-group row">
                                
                                <div class="col-md-12">
                                    <input placeholder="Email*" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                               
    
                                <div class="col-md-12">
                                    <input placeholder="Password*" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-12 offset-md-12">
                                    <button id="signup" type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>

@endsection