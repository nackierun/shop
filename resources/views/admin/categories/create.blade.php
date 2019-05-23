@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Create categories</h1>
                <form action="/categories/create" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="text" name="name" value="{{  old('name')  }}" placeholder="Category name">
                        {{ $errors->first('name') }}
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Category name">
                        {{ $errors->first('image') }}
                    </div>
                    <div>
                        <button class="btn btn-primary">Save</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@stop
