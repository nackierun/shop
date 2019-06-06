@extends('customers.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cart</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Picture</th>
                                <th>ชื้อสินค้า</th>
                                <th>ราคา</th>
                                <th>จำนวน</th>
                                <th>up</th>
                                <th>price</th>
                                <th>del</th>
                            </tr>
                            @foreach($datas as $data)

                                @php
                                    $product = \App\Product::find($data->product_id);
                                @endphp
                                <tr>
                                    <td><img src="{{ url('/storage/'.$product->image) }}" style="width: 100px"> </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ number_format($product->price) }}</td>
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
                                        <p class="cart_total_price">
                                            $ {{ number_format($product->price*$data->quantity,0)}}</p>
                                    </td>
                                    <td><a href="{{ url('delete'.$data->id) }}" class="btn btn-warning">del</a></td>
                                </tr>
                            @endforeach
                        </table>
                        <p>จำนวนสินค้ารวม: {{ $qty_sum }} ชิ้น</p>
                        <p>ราคารวมทั้งสิ้น: {{ number_format($total_price)  }} ฿</p>
                        <a href="{{ url('/checkout') }}" class="btn btn-success">ยืนยันการซื้อซื้อ</a>
                        <a href="{{ url('customers/') }}" class="btn btn-dark">กลับซื้อของต่อ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
