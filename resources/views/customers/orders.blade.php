@extends('customers.layouts.app')
@section('title,Order')
@section('content')
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white bg-info">คำสั่งซื้อ</div>
                    <div class="card-body">
                        <div class=”row”>
                            <div class=”col-md-8 col-md-offset-2
                            ">
                            <div class=”panel panel-default”>
                                <div class=”panel-heading btn-primary”>
                                    <div class="col-md-12">
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <th>หมายเลขใบสั่งซื้อ</th>
                                                <th>สมาชิก</th>
                                                <th>ที่อยู่</th>
                                                <th>เบอร์โทร</th>
                                                <th>ราคา</th>
                                                <th>สถานะ</th>
                                            </tr>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td>{{ $order->id }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $order->address }}</td>
                                                    <td>{{ $order->phone }}</td>
                                                    <td>{{ number_format($order->total) }}</td>
                                                    <td>{{ $order->status }}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        {{-- $orders->render() --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
