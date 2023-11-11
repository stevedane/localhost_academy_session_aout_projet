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
                                <h4 class="card-title">categories</h4>
                            </div>
                            <a href="{{ route('categories.create') }}" class="btn btn-success btn-round btn-fab">
                                <i class="material-icons">add</i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                    cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th class="disabled-sorting text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $category->montant }}</td>
                                                <td>{{ $category->reference }}</td>
                                                <td>{{ $category->sytem }}</td>
                                                <td>{{ $category->number }}</td>
                                                <td class="text-center">
                                                    <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a href="{{ route('categories.show', $category->id) }}"
                                                            class="btn btn-link btn-info btn-just-icon"><i
                                                                class="material-icons">visibility</i></a>
                                                        <a href="{{ route('categories.edit', $category->id) }}"
                                                            class="btn btn-link btn-warning btn-just-icon"><i
                                                                class="material-icons">edit</i></a>
                                                        <button type="submit"
                                                            href="{{ route('categories.destroy', $category->id) }}"
                                                            class="btn btn-link btn-danger btn-just-icon"><i
                                                                class="material-icons">delete</i></button>
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
