@extends('customers.layouts.mytemp')
@section('content')
<header class="section-header">
<div class="row pt-5">
<div class="col-xl-10 col-md-9 col-sm-12">

<main class="card">
	<div class="row no-gutters">
		<aside class="col-sm-6 border-right">
<article class="gallery-wrap">
<div class="img-big-wrap">
  <div> <a href="{{ url('/storage/'.$products->image) }}" data-fancybox=""><img src="{{ url('/storage/'.$products->image) }}"></a></div>
</div> <!-- slider-product.// -->
<div class="img-small-wrap">
  <div class="item-gallery"> <img src="{{ url('/storage/'.$products->image) }}"></div>
  <div class="item-gallery"> <img src="{{ url('/storage/'.$products->image) }}"></div>
  <div class="item-gallery"> <img src="{{ url('/storage/'.$products->image) }}"></div>
  <div class="item-gallery"> <img src="{{ url('/storage/'.$products->image) }}"></div>
</div> <!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
		</aside>
		<aside class="col-sm-6">
<article class="card-body">
<!-- short-info-wrap -->
	<h3 class="title mb-3">{{ $products->name }}</h3>

<div class="mb-3">
	<var class="price h3 text-warning">
		<span class="currency">TH ฿</span><span class="num">{{ number_format($products->price) }}</span>
	</var>
	<span>#</span>
</div> <!-- price-detail-wrap .// -->
<dl>
  <dt>Description</dt>
  <dd><p>{{ $products->description }}</p></dd>
</dl>
<dl class="row">
  <dt class="col-sm-3">Model#</dt>
  <dd class="col-sm-9">{{ $products->id }}</dd>
</dl>
<hr>
	<hr>
	<form action="{{ Route('AddToCart') }}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="product_id" value="{{ $products->id }}">
			<input type="hidden" name="quantity" value="1">
			<button class="btn btn-warning">ใส่ตะกร้า</button>
			</form>
<!-- short-info-wrap .// -->
</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</main> <!-- card.// -->

<!-- PRODUCT DETAIL -->
<article class="card mt-3">
	<div class="card-body">
		<h4>Detail overview</h4>
	<p>{{ $products->title }}</p>
  <p>{{ $products->description }}</p>
	</div> <!-- card-body.// -->
</article> <!-- card.// -->

<!-- PRODUCT DETAIL .// -->
</div> <!-- col // -->
<aside class="col-xl-2 col-md-3 col-sm-12">
<div class="card">
	<div class="card-header text-white bg-warning">
	    คุณอาจสนใจ
	</div>
	@foreach ( $top as $item )
	<div class="card-body row">
<div class="col-md-12 col-sm-3">
	<figure class="item border-bottom mb-3">
			<a href="{{ url('customers/product-detail/'.$item->id) }}" class="img-wrap"> <img src="{{ url('/storage/'.$item->image) }}" class="img-md"></a>
			<figcaption class="info-wrap">
				<a href="{{ url('customers/product-detail/'.$item->id) }}" class="title">{{ $item->name }}</a>
				<div class="price-wrap mb-3">
					<span class="price-new">{{ number_format($item->price) }}</span>
				</div> <!-- price-wrap.// -->
			</figcaption>
	</figure> <!-- card-product // -->
</div> <!-- col.// -->
	</div> <!-- card-body.// -->
	@endforeach
</div> <!-- card.// -->
</aside> <!-- col // -->
</div> <!-- row.// -->
</div><!-- container // -->
</section>
<!-- ========================= SECTION CONTENT .END// ========================= -->
@stop
