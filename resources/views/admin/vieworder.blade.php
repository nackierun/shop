@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>My orders</h1></div>
                    <div class="card-body">
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
                                    <td>{{ $view2->customer_id }}</td>
                                    <td>{{ $view2->address }}</td>
                                    <td>{{ $view2->phone }}</td>
                                    <td>{{ $view2->created_at }}</td>
                                    <td>{{ $view2->updated_at }}</td>
                                    <td><a href="{{ url('admin/orderdetail/'.$view2->id) }}">Detail</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
