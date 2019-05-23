@extends('customers.layouts.app')
@section('content')
    <div class="container">
        <h2 class="title text-center">สินค้าทั้งหมด</h2>
        <div class="row">
            <div class="col-md-6">
                @include('customers.layouts.catbox')
            </div>
        </div>
        <div class="row">

            @foreach($products as $product)
                <div class="col-sm-3 pt-3">
                    <div class="">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ url('#') }}"><img src="{{ url('#') }}" alt=""/>Pic</a>
                                {{ $product->name }}
                                <p>{{ $product->category->name }}</p>

                                <h2>${{ $product->price }}</h2>

                                <a href="{{ url('#') }}" class="btn btn-info">ดูข้อมูล</a>
                                <div class="row pl-3 pt-2">

                                        <a href="#" class="btn btn-success">ซื้อ</a>
                                        <a href="#" class="btn btn-warning">ใส่ในตะกร้า</a>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            @endforeach
        </div>
        {{$products->render()}}

    </div>


@stop
