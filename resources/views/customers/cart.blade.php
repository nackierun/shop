@extends('customers.layouts.app')
@section('content')
    <div class="container">

        <div class="row pt-5">
            <div class="col-md-6">
                <table class="table table-striped">
                    <tr>
                        <th>ชื้อสินค้า</th>
                        <th>ราคา</th>
                        <th>จำนวน</th>
                    </tr>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{ $data->product_name }}</td>
                            <td>{{ number_format($data->price) }}</td>
                            <td>{{ $data->quantity }}</td>
                        </tr>
                    @endforeach
                </table>
                <p>จำนวนสินค้ารวม: {{ $qty_sum }} ชิ้น</p>
                <p>ราคารวมทั้งสิ้น: {{ number_format($total_price)  }} ฿</p>
                <a href="{{ url('/checkout') }}" class="btn btn-success">ยืนยันการซื้อซื้อ</a>
            </div>

        </div>
    </div>
@stop
