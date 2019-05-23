@extends('customers.layouts.app')
@section('content')
    <div class="container">
        <h2 class="title text-center">สินค้า</h2>
        <div class="row">

            @foreach($products as $product)
                <div class="col-sm-2">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="card text-center">
                                <a href="{{ url('#') }}"><img src="{{ url('#') }}" alt=""/>Pic</a>
                                {{ $product->name }}
                                <p>{{ $product->category->name }}</p>

                                <h2>${{ $product->price }}</h2>

                                <a href="{{ url('#') }}" class="btn btn-info">View Product</a>
                            </div>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="#" class="btn btn-success">Buy</a>
                                <li><a href="#" class="btn btn-warning">Add to cart</a>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>


@stop
