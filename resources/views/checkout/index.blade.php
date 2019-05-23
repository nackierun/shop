@extends('customers.layouts.app')
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pay</div>
                    <div class="card-body">
                        <form method="POST" action="">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Fullname</label>
                                <div class="col-md-6">
                                    <input name="name" id="name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input name="email" id="email" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">address</label>
                                <div class="col-md-6">
                                    <input name="address" id="address" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input name="email" id="email" type="email" class="form-control">
                                </div>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
