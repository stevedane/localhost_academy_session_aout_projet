@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary card-header-icon d-flex justify-content-between">
                            <div>
                                <div class="card-icon">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <h4 class="card-title">payment details</h4>
                            </div>
                            <div>
                                <form action="{{ route('payments.destroy', $payment->id) }}" method="post">
                                  @csrf
                                  @method('delete')
                                <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-warning btn-round btn-fab">
                                    <i class="material-icons">edit</i>
                                </a>
                                    <button type="submit" class="btn btn-danger btn-round btn-fab">
                                        <i class="material-icons">delete</i>
                                    </button>
                                <a href="{{ route('payments.index') }}" class="btn btn-primary btn-round btn-fab">
                                    <i class="material-icons">chevron_left</i>
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
                                            <td>Montant</td>
                                            <td>{{ $payment->montant }}</td>
                                        </tr>
                                        <tr>
                                            <td>Reference</td>
                                            <td>{{ $payment->referenec }}</td>
                                        </tr>
                                        <tr>
                                            <td>System</td>
                                            <td>{{ $payment->system }}</td>
                                        </tr>
                                        <tr>
                                            <td>Number </td>
                                            <td>{{ $payment->number }}</td>
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
