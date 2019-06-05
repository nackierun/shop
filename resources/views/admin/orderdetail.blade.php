@extends('admin.layouts.app')
@section('content')
    <div class="card card-body">
        <div class="card-header">

        </div>
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
    @stop
