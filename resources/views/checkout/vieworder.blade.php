@extends('customers.layouts.app')
@section('content')
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <h1>My orders</h1>
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>รหัสคำสั่งซื้อ</th>
                    <th>สินค้า</th>
                    <th>ราคา</th>
                    <th>จำนวน</th>
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
                    <th>รหัสคำสั่งซื้อ</th>
                    <th>ชื่อ</th>
                    <th>ที่อยู่</th>
                    <th>เบอร์โทร</th>
                    <th>สั่งเมื่อ</th>
                    <th>สถานะ</th>
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
