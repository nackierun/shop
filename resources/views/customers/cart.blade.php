@extends('customers.layouts.app')
@section('content')
    <div class="container">

        <div class="row pt-5 justify-content-center">
            <div class="col-md-6">
                <table class="table table-striped">
                    <tr>
                        <th>ชื้อสินค้า</th>
                        <th>ราคา</th>
                        <th>จำนวน</th>
                        <th>up</th>
                        <th>price</th>
                        <th>del</th>
                    </tr>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{ $data->product_name }}</td>
                            <td>{{ number_format($data->price) }}</td>
                            <td>{{ $data->quantity }}</td>
                            <td>
                                <a class="badge badge-success"
                                   href="{{url('customers/cart/update-quantity/'.$data->id.'/1')}}"> + </a>
                                <input type="text" name="quantity"
                                       value="{{$data->quantity}}" autocomplete="off" size="2">
                                @if($data->quantity>1)
                                    <a class="badge badge-danger"
                                       href="{{url('customers/cart/update-quantity/'.$data->id.'/-1')}}">
                                        - </a>
                                @endif
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">$ {{$data->price*$data->quantity}}</p>
                            </td>
                            <td><a href="{{ url('delete'.$data->id) }}" class="btn btn-warning">del</a></td>
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
