@extends('admin.layouts.app')
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
                                <th>title</th>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
