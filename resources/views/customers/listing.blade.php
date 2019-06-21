@extends('customers.layouts.mytemp')
@section('content')
<header class="section-header pt-5">
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y-sm">
<div class="container">
<div class="padding-y-sm">
<span>{{ $categories->name }} ทั้งหมด ({{ $products->count() }}) รายการ/หน้า</span>
</div>

<div class="row-sm">
  @foreach ($products as $product)
<div class="col-md-3 col-sm-6">
	<figure class="card card-product">
		<div class="img-wrap"> <img src="{{ url('/storage/'.$product->image) }}"></div>
		<figcaption class="info-wrap">
			<a href="{{ url('customers/product-detail/'.$product->id) }}" class="title">{{ $product->name }}</a>
			<div class="price-wrap">
				<span class="price-new">{{ number_format($product->price) }}฿</span>
			</div> <!-- price-wrap.// -->
      <form action="{{ Route('AddToCart') }}" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="product_id" value="{{ $product->id }}">
          <input type="hidden" name="quantity" value="1">
          <button class="btn btn-warning">ใส่ตะกร้า</button>
          </form>
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->
@endforeach
</div> <!-- row.// -->


</div><!-- container // -->
</section>
<!-- ========================= SECTION CONTENT .END// ========================= -->
@stop
