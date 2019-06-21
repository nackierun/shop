@extends('customers.layouts.mytemp')
@section('content')


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y border-top pt-5 pb-5">
<div class="container">

<div class="row">
	<main class="col-sm-9">
<div class="card">
<table class="table table-hover shopping-cart-wrap">
<thead class="text-muted">
<tr class="text-white bg-warning">
  <th scope="col">Product</th>
  <th scope="col" width="120">Quantity</th>
  <th scope="col" width="120">Price</th>
  <th scope="col" class="text-right" width="200">Action</th>
</tr>
</thead>
@foreach($datas as $data)
@php
    $products = App\Product::find($data->product_id);
@endphp
<tbody>
<tr>
	<td>
<figure class="media">
	<div class="img-wrap"><img src="{{ url('/storage/'.$products->image) }}" class="img-thumbnail img-sm"></div>
	<figcaption class="media-body">
		<h6 class="title text-truncate">{{ $products->name }}</h6>
	</figcaption>
</figure>
	</td>
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
	<td>
		<div class="price-wrap">
			<var class="price">TH฿ {{ number_format($products->price*$data->quantity,0)}}</var>
			<small class="text-muted">(TH฿ {{ number_format($products->price) }} each)</small>
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right">
	<a href="{{ url('delete'.$data->id) }}" class="btn btn-outline-danger"> × Remove</a>
	</td>
</tr>
</tbody>
@endforeach
</table>
</div> <!-- card.// -->
	</main> <!-- col.// -->
	<aside class="col-sm-3">
<p class="alert alert-success">จำนวนสินค้ารวม: {{ $qty_sum }} ชิ้น</p>
<dl class="dlist-align h4">
  <dt>รวม:</dt>
  <dd class="text-right"><strong>{{ number_format($total_price)  }} ฿</strong></dd>
</dl>
<a href="{{ url('/checkout') }}" class="btn btn-success">ยืนยันการซื้อซื้อ</a>
	</aside> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

@stop
