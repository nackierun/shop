@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row pt-5 justify-content-center">

            <div class="col-md-12">
                <div class="card card-body">
                    <div class="card-header">
                        <h1>My orders</h1>
                    </div>
                    <div class="row pt-3 justify-content-center">
                        <table class="table table-striped">
                            <tr>
                                <th>id</th>
                                <th>customer_name</th>
                                <th>address</th>
                                <th>phone</th>
                                <th>create_at</th>
                                <th>update_at</th>
                                <th>detail</th>
                            </tr>
                            @foreach($datas2 as $view2)
                                <tr>
                                    <td>{{ $view2->id }}</td>
                                    <td>{{ $view2->customer_name }}</td>
                                    <td>{{ $view2->address }}</td>
                                    <td>{{ $view2->phone }}</td>
                                    <td>{{ $view2->created_at }}</td>
                                    <td>{{ $view2->updated_at }}</td>
                                    <td>#</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

@stop
