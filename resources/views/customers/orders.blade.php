@extends('customers.layouts.app')
@section('title,Order')
@section('content')
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-info">คำสั่งซื้อของคุณ {{ Auth::user()->name }}</div>
                    <div class="card-body">
                        <div class=”row”>
                            <div class=”col-md-8 col-md-offset-2
                            ">
                            <div class=”panel panel-default”>
                                <div class=”panel-heading btn-primary”>
                                    <div class="col-md-12">
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <th>หมายเลขใบสั่งซื้อของคุณ</th>
                                                <th>รูป</th>
                                                <th>สินค้า</th>
                                                <th>จำนวน</th>
                                                <th>ราคา</th>
                                                <th>สถานะ</th>
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
@stop
