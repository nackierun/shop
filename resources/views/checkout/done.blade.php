@extends('customers.layouts.mytemp')
@section('title','Done')
@section('content')
<div class=" container">
    <div class="row justify-content-center pt-5 pb-5">
        <div class="col-md-8">
                <div class="card" style="height: 300px; width:auto;">
                    <div class="card-header text-white bg-warning">
                        <h1>ทำรายการเรียบร้อยแล้ว</h1>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center pt-5">
                            <div class="col-md-4 col-md-offset-2">
                                <div class="panel panel-default">
                                    
                                <a href="{{ url('/') }}"><h2>กลับไปยังหน้าแรก</h2></a>
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection