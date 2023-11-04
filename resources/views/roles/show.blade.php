@extends ('layouts.app')
@section('content')
<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <a href="{{route('roles.index')}}" class="btn">
                      <span class="btn-label">
                        <i class="material-icons">keyboard_arrow_left</i>
                      </span>
                      back
                <div class="ripple-container"></div>
                  <h4 class="card-title">Simple Table</h4><br>
                  <form method="post" action="{{route('roles.destroy',$role->id)}}">
                    @csrf
                    @method('delete')

                            
                    <a href="{{route('roles.edit',$role->id)}}" rel="tooltip" class="btn btn-link btn-warning btn-just-icon"><i class="material-icons">edit</i></a>
                            <button type="submit" href="{{route('roles.destroy',$role->id)}}" rel="tooltip" class="btn btn-danger btn-link" data-original-title="" title="">
                              <i class="material-icons">close</i>
                            </button>
                    </form>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center">ID</th>
                          <th>{{$role->id}}</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">Nom</td>
                          <td>{{$role->nom}}</td>
                          
                        </tr>
                        <tr>
                          <td class="text-center">Description</td>
                          <td>{{$role->description}}</td>
                          
                          
                        </tr>
                        <tr>
                          <td class="text-center">Code_unique</td>
                          <td>{{$role->code_unique}}</td>
                          
                          
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
@endsection