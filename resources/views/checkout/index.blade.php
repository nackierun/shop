@extends('customers.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-md-6">
                <h1>สินค้า</h1>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ชื่อสินค้า</th>
                        <th>ราคา</th>
                        <th>p_id</th>
                    </tr>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{ $data->product_name }}</td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->products_id }}</td>
                        </tr>
                    @endforeach
                </table>
                <strong>จำนวน: {{ $qty_sum }}
                    ชิ้น </strong><strong>ราคาทั้งสิ้น: {{ number_format($total_price) }}</strong>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ยืนยันการสั่งซื้อ</div>
                    <div class="card-body">
                        <!--*********************************Form**************************************** -->
                        <form method="POST" action="{{ route('confirm') }}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="product_id" value="{{$data->products_id}}">
                            <input type="hidden" name="users_id" value="{{$user_login->id}}">
                            <input type="hidden" name="grand_total" value="{{$total_price}}">
                            <input type="hidden" name="total_qty" value="{{$qty_sum}}">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">ชื่อ-นามสกุล</label>
                                <div class="col-md-6">
                                    <input name="name" id="name" type="text" class="form-control"
                                           value="{{ $user_login->name }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <input name="users_email" id="users_email" type="hidden" class="form-control"
                                       value="{{ $user_login->email }}">
                                {{ $errors->first('users_email') }}
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">ที่อยู่ผู้รับ</label>
                                <div class="col-md-6">
                                    <input name="address" id="address" type="text" class="form-control">
                                    {{ $errors->first('address') }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">เบอร์ติดต่อ</label>
                                <div class="col-md-6">
                                    <input name="phone" id="phone" type="text" class="form-control">
                                    {{ $errors->first('phone') }}
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-warning">ยืนยัน</button>
                                </div>
                            </div>
                            @csrf
                        </form>
                        <!--*********************************Form**************************************** -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
