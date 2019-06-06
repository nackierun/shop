@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>This is categories detail</h1></div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>

                            <tr>
                                <td>{{ $categories->id }}</td>
                                <td>{{ $categories->name }}</td>
                                <td><a class="btn btn-primary"
                                       href="{{ url('admin/categories/edit/'.$categories->id) }}">Edit</a>
                                    <a class="btn btn-danger" onclick="return confirm('ยืนยันที่จะลบ?')"
                                       href="{{ url('admin/categories/delete/'.$categories->id) }}">Delete</a>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
