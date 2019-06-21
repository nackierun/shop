@extends('customers.layouts.mytemp')
@section('content')
<div class=" container">
    <div class="row justify-content-center pt-5 pb-5">
        <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white bg-warning">
                        <div class=" badge badge-danger">
                            ยกเลิก
                            </div>
                            หมายเลขคำสั่งซื้อ #{{ $o_id->id }} ของคุณ {{ Auth::user()->name }}
                        </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">จำนวน {{ $o_id->qty }} รายการ</div>
                                <form method="post" action="{{ url('customers/canceled-order') }}">
                                <div class="col-md-6 badge pt-5">
                                <input type="hidden" name="" value="{{ $product->name }}">{{ $product->name }}
                                </div>
                                <div class="col-md-6">
                                <img src="{{ asset('/storage/'.$product->image) }}"
                                class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                                alt="">
                                </div>
                                <div class="col-md-6">
                                <input type="hidden" name="orderdetail_id" value="{{ $o_id->id }}">
                                </div>
                                <div class="col-md-6">
                                    ราคารวม {{ number_format($o_id->total) }} บาท
                                </div>
                                <div>
                                    <button class="btn btn-success" onclick="return confirm('ต้องการที่จะยกเลิก?');">ส่ง</button>
                                    @csrf
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
@endsection
