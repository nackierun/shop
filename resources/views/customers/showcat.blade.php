@extends('customers.layouts.app')
@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row hidden-md-up">
                <div class="row pr-5">
                    <div class="card bg-light mb-3">
                        <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i>
                            Categories
                        </div>
                        <ul class="list-group category_block">

                            <li class="list-group-item"><a href="#">{{ $categories->name }}</a></li>

                        </ul>
                    </div>
                </div>



                <div class="col-md-3 pt-3">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">{{ $products->name }}</h4>
                            <h6 class="card-subtitle text-muted">{{ $products->category->name }}</h6>
                            <p class="card-text p-y-1">${{ $products->price }}</p>
                            <a href="{{ url('customers/products/show'.$products->id) }}"
                               class="btn btn-primary">ข้อมูล</a>
                            <a href="#" class="btn btn-success">ซื้อ</a>
                            <a href="#" class="btn btn-warning">ใส่ในตะกร้า</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
