@extends('customers.layouts.app')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-6">
                <h1>Products detail</h1>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>{{ $products->name }}</td>
                        <td>{{ $products->category->name }}</td>
                        <td>{{ $products->description }}</td>
                        <td>{{ $products->qty }}</td>
                        <td>{{ $products->price }}</td>
                    </tr>

                </table>

                @if(session()->has('message'))
                    <div class="alert-success">{{ session()->get('message') }}</div>
                @endif
                <form action="{{ Route('AddToCart') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="products_id" value="{{ $products->id }}">
                    <input type="hidden" name="product_name" value="{{ $products->name }}">
                    <input type="hidden" name="price" value="{{ $products->price}}">
                    <label>จำนวน</label>
                    <input type="text" name="quantity" value="">
                    <button class="btn btn-success">ใส่ตะกร้า</button>
                </form>
            </div>
        </div>
    </div>
@stop
