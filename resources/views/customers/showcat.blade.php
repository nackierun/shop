@extends('customers.layouts.app')
@section('title','List')
@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row hidden-md-up">
                @foreach ($products as $product)
                    <div class="col-md-4 pt-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ $product->name }}</h4>
                            </div>
                            <div class="card-body">
                                <img src="{{ url('/storage/'.$product->image) }}" style="width: 100px">
                                <h6 class="card-subtitle text-muted">{{ $product->category->name }}</h6>
                                <p class="card-text p-y-1">${{ $product->price }}</p>
                                <form action="{{ Route('AddToCart') }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <button class="btn btn-primary">ใส่ตะกร้า</button>
                                    <a href="{{ url('customers/products/show'.$product->id) }}"
                                       class="btn btn-success">ดูข้อมูล</a>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
