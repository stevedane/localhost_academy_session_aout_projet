@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary card-header-icon d-flex">
                            
                                <div class="card-icon">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <h4 class="card-title">User details</h4>
                            <div class="ml-3">
                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                  @csrf
                                  @method('delete')
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-round btn-fab">
                                    <i class="material-icons" style="width: 100%;line-height:41px">edit</i>
                                </a>
                                    <button type="submit" class="btn btn-danger btn-round btn-fab">
                                        <i class="material-icons" style="width: 100%;line-height:41px">delete</i>
                                    </button>
                                <a href="{{ route('users.index') }}" class="btn btn-primary btn-round btn-fab">
                                    <i class="material-icons" style="width: 100%;line-height:41px">chevron_left</i>
                                </a>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">
                                <table class="table table-striped table-no-bordered table-hover" cellspacing="0"
                                    width="100%" style="width:100%">
                                    <tbody>
                                        <tr>
                                            <td>Id</td>
                                            <td>{{ $user->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Created at</td>
                                            <td>{{ $user->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <td>Updated at</td>
                                            <td>{{ $user->updated_at }}</td>
                                        </tr>
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
