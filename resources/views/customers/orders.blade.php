@extends('customers.layouts.app')

@section('content')
    <div class="container">

        <div class="row pt-5 justify-content-center">
            <div class="col-md-6">
                <table class="table table-striped">
                    <tr>
                        <th>หมายเลขใบสั่งซื้อ</th>
                        <th>สมาชิก</th>
                        <th>ที่อยู่</th>
                        <th>เบอร์โทร</th>
                        <th>จำนวน</th>
                        <th>สถานะ</th>
                    </tr>
                    @foreach($orders as $order)
                    @php
                        $user = \App\User::find($order->customer_id);
                    @endphp
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->status }}</td>
                    </tr>
                    @endforeach

                </table>
            </div>

        </div>
    </div>
@stop
