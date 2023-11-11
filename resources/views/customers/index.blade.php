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
              <h4 class="card-title">Customers</h4>
              <a href="{{route('customers.create')}}" class="btn btn-primary btn-round btn-fab" title="+add">
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
                      <th>Name</th>
                      <th>Address</th>
                      <th>Created at</th>
                      <th>History_Reservation</th>
                      <th class="disabled-sorting text-center">Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Created at</th>
                      <th>History_Reservation</th>
                      <th class="text-center">Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($customers as $customer)  
                    <tr>
                      <td>{{$customer->name}}</td>
                      <td>{{$customer->address}}</td>
                      <td>{{$customer->Created_at}}</td>
                      <td>{{$customer->history_reservation}}</td>
                      <td class="text-center">
                        <a href="{{route('customers.show',$customer->id)}}" class="btn btn-link btn-info btn-just-icon"><i class="material-icons">visibility</i></a>
                        <a href="{{route('customers.edit',$customer->id)}}" class="btn btn-link btn-warning btn-just-icon"><i class="material-icons">edit</i></a>
                        <a href="{{route('customers.destroy',$customer->id)}}" class="btn btn-link btn-danger btn-just-icon"><i class="material-icons">delete</i></a>
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