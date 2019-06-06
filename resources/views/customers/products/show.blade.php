@extends('customers.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Products detail</h1></div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Name</th>
                                <th>Brand</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                            <tr>
                                <td>{{ $products->name }}</td>
                                <td>{{ $products->category->name }}</td>
                                <td>{{ $products->title }}</td>
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
                            <input type="hidden" name="product_id" value="{{ $products->id }}">
                            <input type="hidden" name="quantity" value="1">
                            <button class="btn btn-primary">ใส่ตะกร้า</button>
                        </form>
                        <div class="row pt-3 pl-3">
                            <a href="{{ url('customers/') }}" class="btn btn-dark">back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
