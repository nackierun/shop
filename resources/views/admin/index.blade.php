@extends('admin.layouts.app')
@section('title','Admin')
@section('content')
    <div class="container-fluid">
        <div class="row pt-5 justify-content-center">
            <h1>HELLO</h1>
            <div class="col-md-6">
                Roles
                <form action="" method="POST">
                    <div class="col-md-6 form-group">
                        name
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-6 form-group">
                        slug
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-6 form-group">
                        description
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-6 form-group">
                        level
                        <input class="form-control" type="text" name="">
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
