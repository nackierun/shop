@extends('layouts.myapp')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Create categories</h1>
            <form action="{{ url('categories/edit'.$categories->id) }}" method="post">

                <div class="form-group">
                    <input type="text" name="name" value="{{ $categories->name }}" placeholder="">
                </div>
                <div>
                    <button class="btn btn-primary">Save</button>
                </div>
                @csrf
                {{ $errors->first('name') }}

            </form>
        </div>
@stop
