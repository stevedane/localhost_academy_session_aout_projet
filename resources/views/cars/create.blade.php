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
                       <div class="form-group">
                          <label for="id_pilote">Pilote</label>
                            <select class="form-control" name="id_pilote" id="id_pilote">
                                <option value="">Choisir un pilote</option>
                                            
                                @foreach(App\Models\brand::all() as $brand)
                                    <option value="{{$brand->id}}">{{$brand->nom}}</option>
                                @endforeach
                                            
                           </select>
                        </div>
                            <div class="form-group bmd-form-group">
                                <label for="year" class="bmd-label-floating"> year *</label>
                                <input type="text" class="form-control" id="year" required="true" name="year" aria-required="true">
                            </div>

                            <div class="form-group bmd-form-group">
                                <label for="gaz" class="bmd-label-floating"> gaz *</label>
                                <input type="text" class="form-control" id="gaz" required="true" name="gaz" aria-required="true">
                            </div>

                            <div class="form-group bmd-form-group">
                              <label for="sale_price" class="bmd-label-floating"> sale_price *</label>
                               <input type="text" class="form-control" id="sale_price" required="true" name="sale_price" aria-required="true">                            
                            </div>
                            <div class="form-group bmd-form-group">
                              <label for="renting_price" class="bmd-label-floating"> renting_price *</label>
                               <input type="text" class="form-control" id="renting_price" required="true" name="renting_price" aria-required="true">                            
                            </div>
                            
                        </div>
                        <div class="card-footer text-right">
                    
                         <button type="submit" class="btn btn-rose">Register</button>
                      </div>
                </div>
              </form>
            </div>
@endsection