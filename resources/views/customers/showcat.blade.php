@extends('customers.layouts.app')
@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row hidden-md-up">
                @foreach ($products as $product)
                    <div class="col-md-3 pt-3">
                        <div class="card">
                            <div class="card-block">
                                <img src="{{ url('/storage/'.$product->image) }}" style="width: 100px">
                                <h4 class="card-title">{{ $product->name }}</h4>
                                <h6 class="card-subtitle text-muted">{{ $product->category->name }}</h6>
                                <p class="card-text p-y-1">${{ $product->price }}</p>
                                <a href="{{ url('customers/products/show'.$product->id) }}" class="btn btn-primary">ข้อมูล</a>
                                <a href="#" class="btn btn-success">ซื้อ</a>
                                <a href="#" class="btn btn-warning">ใส่ในตะกร้า</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
