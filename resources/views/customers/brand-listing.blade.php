@extends('customers.layouts.mytemp')
@section('content')
<header class="section-header pt-5">
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y-sm">
<div class="container">
<div class="padding-y-sm">
<span>ทั้งหมด({{ $categories->count() }})แบรนด์</span>
</div>

<div class="row-sm">
  @foreach ($categories as $category)
<div class="col-md-3 col-sm-6">
	<figure class="card card-product">
		<div class="img-wrap"> <img src="{{ url('/storage/'.$category->image) }}"></div>
		<figcaption class="info-wrap">
			<a href="{{ url('customers/listing/'.$category->id) }}" class="title">{{ $category->name }}</a>
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->
@endforeach
</div> <!-- row.// -->


</div><!-- container // -->
</section>
<!-- ========================= SECTION CONTENT .END// ========================= -->
@stop
