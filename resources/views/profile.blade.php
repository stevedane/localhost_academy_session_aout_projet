@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-rose">
                            <div class="card-icon">
                                <i class="material-icons">perm_identity</i>
                            </div>
                            <h4 class="card-title">Edit Profile 
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('store-profile', Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-4">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                              <img src="{{asset('material-dashboard')}}/assets/img/image_placeholder.jpg" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                              <span class="btn btn-rose btn-round btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="picture" />
                                              </span>
                                              @error('picture')
                                              {{$message}}
                                              @enderror
                                              <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="!#">
                                @if(Auth::user()->picture)
                                <img class="img" src="{{asset('storage/profiles/'.Auth::user()->picture)}}" />
                                @else
                                <img class="img" src="{{asset('material-dashboard')}}/assets/img/faces/marc.jpg" />
                                @endif
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{ Auth::user()->name }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
