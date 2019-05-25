@extends('customers.layouts.app')
@section('content')
    <div class="container">
        <h2 class="title text-center">สินค้าทั้งหมด</h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <h2>Categories</h2>
                        <ol class="breadcrumb">
                            @foreach($categories as $category)

                                <li class="breadcrumb-item"><a
                                        href="{{ url('customers/showcat'.$category->id) }}">{{ $category->name }}</a>
                                </li>

                            @endforeach
                        </ol>

                    </nav>
                </div>
            </div>
        </div>
        <div class="py-5">
            <div class="container">
                <div class="row hidden-md-up">
                    <<<<<<< HEAD
                    =======
                    <div class="row pr-5">
                        <div class="card bg-light mb-3">
                            <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i>
                                Categories
                            </div>
                            <ul class="list-group category_block">
                                @foreach($categories as $category)
                                    <li class="list-group-item"><a href="#">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    >>>>>>> parent of 4ff9100... cart
                    @foreach($products as $product)
                        <div class="col-md-3 pt-3">
                            <div class="card">
                                <div class="card-block">
                                    <img src="{{ url('products/small'.$product->name) }}">
                                    <h4 class="card-title">{{ $product->name }}</h4>
                                    <h6 class="card-subtitle text-muted">{{ $product->category->name }}</h6>
                                    <p class="card-text p-y-1">${{ $product->price }}</p>
                                    <a href="#" class="btn btn-primary">ข้อมูล</a>
                                    <a href="#" class="btn btn-success">ซื้อ</a>
                                    <a href="#" class="btn btn-warning">ใส่ในตะกร้า</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{$products->render()}}
                </div>
            </div>
        </div>
@stop
