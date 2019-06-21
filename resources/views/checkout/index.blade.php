@extends('customers.layouts.mytemp')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>สินค้า</h1>
                <strong>จำนวน: {{ $qty_sum }}
                    ชิ้น </strong><strong>ราคาทั้งสิ้น: {{ number_format($total_price) }}</strong>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white bg-warning">ยืนยันการสั่งซื้อ</div>
                    <div class="card-body">
                        <!--*********************************Form**************************************** -->
                        <form method="POST" action="{{ route('confirm') }}">
<p>เลือกวิธีการชำระ</p>
@foreach ($payments as $item)
<input type="radio" name="payments" value="{{ $item->id }}">{{ $item->name }} :{{ $item->bank_number }} </br>
@endforeach
<input type="radio" name="payments" value="{{ $item->id }}" checked="checked">default {{ $item->name }}:{{ $item->bank_number }}</br>
{{ $errors->first('payments') }}
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="total" value="{{ $total_price }}">
                            <div class="form-group row">
                                <label for="customer_name"
                                       class="col-md-4 col-form-label text-md-right">ชื่อ-นามสกุล</label>
                                <div class="col-md-6">
                                    <input name="customer_name" id="customer_name" type="text" class="form-control"
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
                                    <input name="address" id="address" type="text" class="form-control" value="{{ old('address') }}">
                                    {{ $errors->first('address') }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">เบอร์ติดต่อ</label>
                                <div class="col-md-6">
                                    <input name="phone" id="phone" type="text" class="form-control" value="{{ old('phone') }}">
                                    {{ $errors->first('phone') }}
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-warning">ยืนยัน</button>
                                    <a href="{{ url('/customers') }}" class="btn btn-dark">ยกเลิก</a>
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
