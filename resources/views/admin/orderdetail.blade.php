@extends('admin.layouts.app')
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
                            @foreach ($orderdetail as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->order_id }}</td>
                                    <td>{{ $data->product_id }}</td>
                                    <td>{{ $data->price }}</td>
                                    <td>{{ $data->qty }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
