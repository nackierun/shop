@extends('voyager::master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Detail</h1><a href="{{ url('admin/vieworder') }}">back</a></div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>หมายเลขคำสั่งซื้อ</th>
                                <th>สินค้า</th>
                                <th>ราคา</th>
                                <th>จำนวน</th>
                            </tr>
                            <tr>
                                <td>{{ $orderdetail->id }}</td>
                                <td>{{ $orderdetail->order_id }}</td>
                                <td>{{ $orderdetail->product_id }}</td>
                                <td>{{ number_format($orderdetail->price) }}</td>
                                <td>{{ $orderdetail->qty }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
