@extends('voyager::master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Create categories</h1></div>
                    <div class="card-body">

                        <form action="/admin/categories/create" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="name" value="{{  old('name')  }}" placeholder="Category name">
                                {{ $errors->first('name') }}
                            </div>
                        <!--<div class="form-group">
                        <input type="file" name="image" placeholder="Category name">
                        {{-- $errors->first('image') --}}
                            </div>-->
                            <div>
                                <button class="btn btn-primary">Save</button>
                                <a class="btn btn-dark" href="{{ url('admin/categories') }}">cancel</a>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
