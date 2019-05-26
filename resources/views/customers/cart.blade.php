@extends('customers.layouts.app')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <table class="table table-responsive">
                <tr>
                    <th>name</th>
                    <th>price</th>
                    <th>quantity</th>
                </tr>
                @foreach($datas as $data)
                    <tr>

                        <td>{{ $data->product_name }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->quantity }}</td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop
