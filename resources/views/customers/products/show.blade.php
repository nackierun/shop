@extends('layouts.myapp')
@section('content')
    <div class="container">
        <div class="row">
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
            </div>
        </div>
    </div>
@stop
