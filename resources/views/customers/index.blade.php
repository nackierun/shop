@extends('customers.layouts.app')
@section('content')
    <div class="container">
        <h2 class="title text-center">สินค้าทั้งหมด</h2>
        <div class="row">
            <div class="col-md-6">
                @include('customers.layouts.catbox')
            </div>
        </div>
        <!--                   -->
        @foreach($products as $product)
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->category->name }}</p>
                        <p class="card-text">${{ $product->price }}</p>
                        <a href="#" class="btn btn-primary">ข้อมูล</a>
                        <a href="#" class="btn btn-success">ซื้อ</a>
                        <a href="#" class="btn btn-warning">ใส่ในตะกร้า</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{$products->render()}}
    <!--                   -->






@stop
