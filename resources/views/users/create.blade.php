@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('users.store') }}" method="post" novalidate="novalidate">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon d-flex">
                                <div class="card-icon">
                                    <i class="material-icons">mail_outline</i>
                                </div>
                                <h4 class="card-title">Create user</h4>
                                <div class="ml-3">
                                    <a rel="tooltip" data-original-title="Back" href="{{ route('users.index') }}"
                                        class="btn btn-primary btn-round btn-fab">
                                        <i class="material-icons" style="width: 100%;line-height:41px">chevron_left</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body ">
                                @include('users._form')
                            </div>
                            <div class="card-footer justify-content-center">
                                <button type="submit" class="btn btn-rose">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
