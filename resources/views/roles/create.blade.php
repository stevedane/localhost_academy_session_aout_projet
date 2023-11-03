@extends('layouts.app')

@section('content')
<div class="col-md-6">
                
              <form  action="{{route('roles.store')}}" method="post" >
                @csrf
                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">mail_outline</i>
                    </div>
                    <h4 class="card-title">Roles Form</h4>
                    <a href="{{route('roles.index')}}" class="btn">
                      <span class="btn-label">
                        <i class="material-icons">keyboard_arrow_left</i>
                      </span>
                      back
                    <div class="ripple-container"></div>
                </a>
                  </div>
                  <div class="card-body ">
                    <div class="form-group bmd-form-group">
                      <label for="nom" class="bmd-label-floating"> Nom *</label>
                      <input type="text" class="form-control" id="nom" name="nom" required="true" aria-required="true">
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="code_unique" class="bmd-label-floating"> Code_Unique *</label>
                      <input type="number" class="form-control" id="code_unique" required="true" name="code_unique" aria-required="true">
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="description" class="bmd-label-floating"> Description *</label>
                      <textarea  class="form-control" id="description" required="true" equalto="#description" name="description" aria-required="true"></textarea>
                    </div>
                    <div class="category form-category">* Required fields</div>
                  </div>
                  <div class="card-footer text-right">
                    
                    <button type="submit" class="btn btn-rose">Register</button>
                  </div>
                </div>
              </form>
            </div>
@endsection