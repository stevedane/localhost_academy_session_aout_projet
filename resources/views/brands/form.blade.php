@extends('layouts.app')
@section('content')
<div class="card-body ">
    <div class="form-group">
        <label for="exampleEmail" class="bmd-label-floating @error('name') has-danger @enderror"> User Name *</label>
        <input type="text" class="form-control" id="exampleEmail" required="true" value="{{old('name',$user->name}}">
        @error('name')
            <label for="name" class="error">{{ $message}}</label>
        @enderror
      </div>
    <div class="form-group">
      <label for="exampleEmail" class="bmd-label-floating @error('email') has-danger @enderror"> Email Address *</label>
      <input type="email" class="form-control" id="exampleEmail" required="true" value="{{old('email'),$user->email}}">
      @error('email')
            <label for="email" class="error">{{ $message}}</label>
        @enderror
    </div>
    <div class="form-group">
      <label for="examplePassword" class="bmd-label-floating @error('password') has-danger @enderror"> Password *</label>
      <input type="password" class="form-control" id="examplePassword" required="true" name="password">
      @error('password')
       <label for="password" class="error">{{ $message}}</label>
      @enderror
    </div>
    <div class="form-group">
        <label for="examplePassword" class="bmd-label-floating @error('password') has-danger @enderror"> Confirm Password *</label>
        <input type="password" class="form-control" id="examplePassword" required="true" name="password_confirmation">
        @error('password')
         <label for="password" class="error">{{ $message}}</label>
        @enderror
      </div>
    <div class="category form-category">* Required fields</div>
  </div>
@endsection