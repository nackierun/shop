@extends('layouts.myapp')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Create categories</h1>
                <form action="/categories/create" method="post">

                    <div class="form-group">
                        <input type="text" name="name" value="{{  old('name')  }}" placeholder="Category name">
                    </div>
                    <div>
                        <button class="btn btn-primary">Save</button>
                    </div>
                    @csrf
                    {{ $errors->first('name') }}

                </form>
            </div>
        </div>
    </div>
@stop
