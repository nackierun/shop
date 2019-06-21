@extends('customers.layouts.mytemp')
@section('content')
<div class="container">
    <div class="row justify-content-center pb-5 pt-5">
        <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white bg-warning">แจ้งชำระเงิน</div>
                    <div class="card-body">
                        <div class=”row”>
                            <div class=”col-md-8 col-md-offset-2
                            ">
                            <div class=”panel panel-default”>
                                <div class=”panel-heading btn-primary”>ขอบคุณ {{ Auth::user()->name }} ที่ใช้บริการ
                                </div>
                                <div>
                                <form method="POST" enctype="multipart/form-data" action="{{ url('confirm-pay') }}">
                                    <div class="col-md-6 pt-3">
                                        <label class=" badge badge-success">สินค้า</label></br>
                                        {{ $product->name }}
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('/storage/'.$product->image) }}" alt="" style="width:100px">
                                    </div>
                                <div class="col-md-6 pt-3 form-group">
                                <label for="report">รหัสคำสั่งซื้อ #{{ $o_id->id }}</label></br>
                                <input type="hidden" name="orderdetail_id" class="form-control" value="{{ $o_id->id }}">
                                </div>
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="col-md-6 form-group">
                                    <label for="image">ใบเส็จการโอน</label>
                                <input type="file" name="image" class="form-control-file">
                                {{ $errors->first('image') }}
                                </div>
                                <div class="col-md-6">
                                    <button class=" btn btn-success">ส่ง</button>
                                    @csrf
                                    <a href="{{ url('customers/orders/'. Auth::user()->id) }}" class=" btn btn-dark">กลับ</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>
</div>
@endsection
