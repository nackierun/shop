@extends('customers.layouts.app')
@section('content')
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <h1>My orders</h1>
            <table class="table table-striped">
                <tr>
                    <th>detail_id</th>
                    <th>o_id</th>
                    <th>p_id</th>
                    <th>price</th>
                    <th>qty</th>
                </tr>
                @foreach($datas as $view)
                    <tr>
                        <td>{{ $view->id }}</td>
                        <td>{{ $view->order_id }}</td>
                        <td>{{ $view->product_id }}</td>
                        <td>{{ $view->price }}</td>
                        <td>{{ $view->qty }}</td>
                    </tr>
                @endforeach
            </table>
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
                </tr>
                @foreach($datas2 as $view2)
                    <tr>
                        <td>{{ $view2->id }}</td>
                        <td>{{ $view2->customer_name }}</td>
                        <td>{{ $view2->address }}</td>
                        <td>{{ $view2->phone }}</td>
                        <td>{{ $view2->created_at }}</td>
                        <td>{{ $view2->updated_at }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop
