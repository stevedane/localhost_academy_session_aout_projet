@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
              <h4 class="card-title">Roles</h4>
              <a href="{{route('roles.create')}}" class="btn btn-primary btn-round btn-fab">
                      <i class="material-icons">favorite</i>
                    <div class="ripple-container"></div></a>
            </div>
            <div class="card-body">
              <div class="toolbar">
                <!--        Here you can write extra buttons/actions for the toolbar              -->
              </div>
              <div class="material-datatables">
                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Code_unique</th>
                      <th>Description </th>
                      <th class="disabled-sorting text-center">Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nom</th>
                      <th>Code_Unique</th>
                      <th>Description </th>
                      <th class="text-center">Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($roles as $role)  
                    <tr>
                      <td>{{$role->name}}</td>
                      <td>{{$role->email}}</td>
                      <td>{{$role->created_at}}</td>
                      <td class="text-center">
                        <a href="{{route('roles.show',$role->id)}}" class="btn btn-link btn-info btn-just-icon"><i class="material-icons">visibility</i></a>
                        <a href="{{route('roles.edit',$role->id)}}" class="btn btn-link btn-warning btn-just-icon"><i class="material-icons">edit</i></a>
                        <form action="{{route('roles.destroy',$role->id)}}" method="post">
                          @csrf
                          @method('delete')
                          <button  class="btn btn-link btn-danger btn-just-icon"><i class="material-icons">delete</i></button>
                        </form>
                        
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- end content-->
          </div>
          <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
      </div>
      <!-- end row -->
    </div>
  </div>
@endsection