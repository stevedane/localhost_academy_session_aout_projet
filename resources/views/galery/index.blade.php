use App\Models\Galery;

@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-rose">
                            
                        </div>
                        <div class="card-body">
                            <form action="{{route('galery.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="row mt-5">
                                    <div class="col-md-3">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            
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
                                @foreach($galeries as $galerie)
                                    <div class="row row-cols-2">
                                        <img class="img" src="{{asset('storage/galeries/'.$galerie->picture)}}"/>
                                        <div class="col-md-3">
                                                <a href="{{route('galery.edit',$galerie->id)}}" class="btn btn-warning btn-sm mx-2">Edit</a>
                                                
                                                <form action="{{route('galery.destroy',$galerie->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>                                   
                                        
                                        </div>
                                    </div>
                                @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
