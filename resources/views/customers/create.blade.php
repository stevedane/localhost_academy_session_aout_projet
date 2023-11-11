@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('customers.store') }}" method="post" novalidate="novalidate">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">mail_outline</i>
                                </div>
                                <h4 class="card-title">Customer create</h4>
                            </div>
                            <div class="card-body ">
                                @include('')
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-rose">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
