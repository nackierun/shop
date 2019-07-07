@extends('customers.layouts.mytemp')
@section('title,Order')
@section('content')
    <div class="container">
        <div class="row pt-5 pb-5 justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-warning">คำสั่งซื้อของคุณ {{ Auth::user()->name }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="col-md-12">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>หมายเลขคำสั่งซื้อ</th>
                                                <th>รูป</th>
                                                <th>สินค้า</th>
                                                <th>จำนวน</th>
                                                <th>ราคา</th>
                                                <th>สถานะ</th>
                                                <th>วันที่</th>
                                                <th>แจ้งชำระ</th>
                                            </tr>
                                            @foreach($orders as $order)
                                            @php
                                                $products = App\Product::find($order->product_id);
                                            @endphp
                                                <tr>
                                                    <td>{{ $order->id }}</td>
                                                    <td><img style="width: 100px" src="{{ asset('/storage/'.$products->image) }}" alt=""></td>
                                                    <td>{{ $products->name }}</td>
                                                    <td>{{ $order->qty }}</td>
                                                    <td>{{ number_format($order->total) }}</td>
                                                    <td>{{ $order->status }}</td>
                                                    <td>{{ $order->created_at }}</td>
                                                    <td><a href="{{ url('customers/report/'.$order->id) }}" class="badge badge-warning">ชำระเงิน</a>
                                                    <a href="{{ url('customers/canceled-order/'.$order->id) }}" class="badge badge-danger">ยกเลิก</a></td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        {{ $orders->render() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop