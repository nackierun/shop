@extends('layouts.myapp')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Products</h1>
                <p><a href="{{  url('/create')  }}">Add</a></p>
                @foreach($products as $product)
                    <div class="table-bordered">
                        <p>Categories: {{  $product->category->name  }}</p>
                        <p>Products :{{  $product->name  }}</p>
                        <p>Qty: {{  $product->qty  }}</p>
                        <p>Price: {{  $product->price  }}</p>
                    </div>
                    @endforeach
            </div>
            <div class="col-md-6">
                <h1><p>Categories:</p></h1>
                <p><a href="{{  url('/create')  }}">Add</a></p>
                @foreach($categories as $category)
            <div class="table-bordered">
                <p>{{  $category->name  }}</p>
            </div>
                    @endforeach
            </div>
        </div>
    </div>
@stop
