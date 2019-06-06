@extends('voyager::master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Create categories</h1></div>
                    <div class="card-body">
                        <form action="{{ url('admin/categories/edit/'.$categories->id) }}" method="post">
                            <div class="form-group">
                                <input type="text" name="name" value="{{ $categories->name }}">
                            </div>
                            <div>
                                <button class="btn btn-primary">Save</button>
                                <a class="btn btn-warning" href="{{ url('admin/categories') }}">cancel</a>
                            </div>
                            @csrf
                            {{ $errors->first('name') }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
