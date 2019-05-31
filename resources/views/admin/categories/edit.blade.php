@extends('admin.layouts.app')
@section('content')
    <div class="row pt-5 justify-content-center">
        <div class="col-md-6">
            <h1>Create categories</h1>
            <form action="{{ url('admin/categories/edit'.$categories->id) }}" method="post">

                <div class="form-group">
                    <input type="text" name="name" value="{{ $categories->name }}">
                </div>
                <div>
                    <button class="btn btn-primary">Save</button>
                </div>
                @csrf
                {{ $errors->first('name') }}

            </form>
        </div>
@stop
