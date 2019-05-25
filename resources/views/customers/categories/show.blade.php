@extends('customers.layouts.app')
@section('content')
    <div class="row pt-5">
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
                </tr>

            </table>
        </div>
    </div>
@stop
