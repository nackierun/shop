@extends('customers.layouts.app')
@section('content')
<div class=" container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin</div>
                    <div class="card-body">
                        <div class=”row”>
                            <div class=”col-md-8 col-md-offset-2
                            ">
                            <div class=”panel panel-default”>
                                <div class=”panel-heading btn-primary”>WELCOME TO ADMIN ROUTE</div>
                                <form method="post" action="{{ url('customers/canceled-order') }}">
            <div class="col-md-6">
            <input>{{ $product->name }}
            </div>
            <div class="col-md-6">
            <input>
            </div>
            <div class="col-md-6">
            <input>
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
