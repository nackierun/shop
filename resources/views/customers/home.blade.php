@extends('customers.layouts.mytemp')
@section('content')
<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-y-sm pt-5">
<div class="container">
<div class="card">
	<div class="card-body">
<div class="row row-sm">
	<aside class="col-md-3">
<h5 class="text-uppercase">ช็อปเลย</h5>
	<ul class="menu-category">
    @foreach($categories as $category)
		<li> <a href="{{ url('customers/listing/'.$category->id) }}">{{ $category->name }}</a></li>
    @endforeach
			</ul>
		</li>
	</ul>

	</aside> <!-- col.// -->
	<div class="col-md-6">

<!-- ================= main slide ================= -->
<div class="owl-init slider-main owl-carousel" data-items="1" data-nav="true" data-dots="false">
  @foreach ( $slideshow as $item )
	<div class="item-slide">
		<img src="{{ url('/storage/'.$item->image) }}">
	</div>
  @endforeach
</div>
<!-- ============== main slidesow .end // ============= -->

	</div> <!-- col.// -->
	<aside class="col-md-3">

<h6 class="title-bg bg-secondary bg-warning">แนะนำ</h6>
<div style="height:280px;">
  @foreach ( $top as $item )
	<figure class="itemside has-bg border-bottom" style="height: 33%;">
		<img class="img-bg" src="{{ url('/storage/'.$item->image) }}">
		<figcaption class="p-2">
			<h6 class="title">{{ $item->name }}</h6>
			<a href="{{ url('customers/product-detail/'.$item->id) }}">รายละเอียด</a>
		</figcaption>
	</figure>
  @endforeach
</div>

	</aside>
</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</div> <!-- card.// -->

<figure class="mt-3 banner p-3 bg-secondary bg-warning">
	<div class="text-lg text-center white"></div>
</figure>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION MAIN END// ========================= -->


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y-sm bg">
<div class="container">

<header class="section-heading heading-line">
	<h4 class="title-section bg">หมวดหมู่ยอดนิยม</h4>
</header>

<div class="card">
<div class="row no-gutters">
	<div class="col-md-3">

<article href="#" class="card-banner h-100 bg2">
	<div class="card-body zoom-wrap">
		<h5 class="title">รายการ</h5>
		<p>สินค้าจากแบรนด์ชั้นนำ</p>
		<a href="{{ url('customers/brand-listing') }}" class="btn btn-warning">ดูทั้งหมด</a>
		<img src="images/items/item-sm.png" height="200" class="img-bg zoom-in">
	</div>
</article>

	</div> <!-- col.// -->
	<div class="col-md-9">
<ul class="row no-gutters border-cols">
  @foreach ( $categories as $category )
	<li class="col-6 col-md-3">
<a href="{{ url('customers/listing/'.$category->id) }}" class="itembox">
	<div class="card-body">
		<p class="word-limit">{{ $category->name }}</p>
		<img class="img-sm" src="{{ url('/storage/'.$category->image) }}">
	</div>
</a>
	</li>
  @endforeach
</ul>
	</div> <!-- col.// -->
</div> <!-- row.// -->

</div> <!-- card.// -->

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= SECTION ITEMS ========================= -->
<section class="section-request bg padding-y-sm">
<div class="container">
<header class="section-heading heading-line">
	<h4 class="title-section bg text-uppercase">สินค้า</h4>
</header>

<div class="row-sm">
  @foreach ( $products as $item )
<div class="col-md-2">
	<figure class="card card-product">
		<div class="img-wrap"> <img src="{{ url('/storage/'.$item->image) }}"></div>
		<figcaption class="info-wrap">
			<h6 class="title "><a href="{{ url('customers/product-detail/'.$item->id) }}">{{ $item->name }}</a></h6>

			<div class="price-wrap">
				<span class="price-new">{{ number_format($item->price) }}</span>
			</div> <!-- price-wrap.// -->
			<form action="{{ Route('AddToCart') }}" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="product_id" value="{{ $item->id }}">
					<input type="hidden" name="quantity" value="1">
					<button class="btn btn-warning">ใส่ตะกร้า</button>
			</form>
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->
@endforeach
</div> <!-- row.// -->
<a href="{{ url('customers/products-listing') }}" class="btn btn-warning">ดูทั้งหมด</a>

</div><!-- container // -->
</section>
<!-- ========================= SECTION ITEMS .END// ========================= -->

<!-- ========================= SECTION LINKS ========================= -->
<section class="section-links bg padding-y-sm">
<div class="container">
<div class="row">
	<div class="col-sm-6">
<header class="section-heading heading-line">
	<h4 class="title-section bg text-uppercase">พื้นที่จัดส่ง</h4>
</header>

<ul class="list-icon row">
	<li class="col-md-4"><a href="#"><img src="/storage/images/thai.png"><span>THAILAND</span></a></li>
</ul>
	</div> <!-- col // -->

	<div class="col-sm-6">
<header class="section-heading heading-line">
	<h4 class="title-section bg text-uppercase">พบปัญหา?</h4>
</header>
<ul class="list-icon row">
	<li class="col-md-4"><a href="https://github.com/nackierun"><i class="icon fa fa-phone-square"></i><span>ผ่ายสนับสนุน</span></a></li>
</ul>
	</div> <!-- col // -->
</div><!-- row // -->

<figure class="mt-3 banner p-3 bg-secondary bg-warning">
	<div class="text-lg text-center white"></div>
</figure>

</div><!-- container // -->
</section>
<!-- ========================= SECTION LINKS END.// ========================= -->
@stop
