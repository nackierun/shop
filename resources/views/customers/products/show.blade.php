@extends('customers.layouts.app')
@section('title','show')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-white bg-info">
                        <h1>รายละเอียด</h1>
                    </div>
                    <div class="card-body">
                        <div class="jumbotron">
                            <h1 class="display-4">
                                <img src="{{ url('/storage/'.$products->image) }}"
                                     style="width: 200px">
                            </h1>
                            <h2>{{ $products->name }}</h2>
                            <hr class="my-4">
                            <h2>{{ $products->category->name }}</h2>
                            <h3>{{ $products->title }}</h3>
                            <p>{{ $products->description }}</p>
                            <p>{{-- $products->qty --}}</p>
                            <p>ราคา :{{ number_format($products->price) }} บาท </p>
                            @if(session()->has('message'))
                                <div class="alert-success">{{ session()->get('message') }}</div>
                            @endif
                            <form action="{{ Route('AddToCart') }}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="product_id" value="{{ $products->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <button class="btn btn-primary">ใส่ตะกร้า</button>
                                    </div>
                                    <div class="col-sm-3"><a href="{{ url('customers/') }}"
                                                             class="btn btn-dark">กลับ</a></div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
