<<<<<<< HEAD
<<<<<<< HEAD
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
                    <div class="card-header">ยืนยันสั่งซื้อ</div>
                    <div class="card-body">
                        <form method="POST" action="">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">ชื่อ นามสกุล</label>
                                <div class="col-md-6">
                                    <input name="name" id="name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">อีเมล</label>
                                <div class="col-md-6">
                                    <input name="email" id="email" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">ที่อยู่</label>
                                <div class="col-md-6">
                                    <input name="address" id="address" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mobile" class="col-md-4 col-form-label text-md-right">เบอร์โทร</label>
                                <div class="col-md-6">
                                    <input name="mobile" id="mobile" type="text" class="form-control">
                                </div>
                            </div>

                            <input name="orderstatus" id="orderstatus" type="hidden" value="0">
                            <input name="user_id" id="user_id" type="hidden" value="{{ $users->id }}">

                            <div class="form-group row">
                                <label for="grand_total" class="col-md-4 col-form-label text-md-right">จำนวน</label>
                                <div class="col-md-6">
                                    <input name="grand_total" id="grand_total" type="text" class="form-control">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success">ซื้อ</button>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
=======
>>>>>>> parent of 4ff9100... cart
=======
>>>>>>> parent of 4ff9100... cart
