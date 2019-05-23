@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <table class="table table-striped">
                <h1>This is categories detail</h1>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>{{ $categories->id }}</td>
                    <td>{{ $categories->name }}</td>
                    <td><a class="btn btn-primary" href="{{ url('/categories/edit'.$categories->id) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ url('/categories/delete'.$categories->id) }}">Delete</a>
                    </td>
                </tr>

            </table>
        </div>
    </div>
@stop
