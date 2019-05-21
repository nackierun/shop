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
            <div class="col-sm-6">
                <h2>result</h2>

                <table class="table table-striped">
                    <tr>
                        <th>
                            <div class="badge badge-success">Id</div>
                        </th>
                        <th>
                            <div class="badge badge-info">Name</div>
                        </th>
                        <th>
                            <div class="badge badge-warning">Action</div>
                        </th>
                    </tr>
                    @foreach($categories as $category)
                        <tr>
                            <td>
                                {{  $category->id }}
                            </td>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('/categories/edit'.$category->id) }}">Edit</a>
                                <a class="btn btn-primary" href="{{ url('/categories/show'.$category->id) }}">Detail</a>
                                <a class="btn btn-danger" href="{{ url('/categories/delete'.$category->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>


                {{$categories->render()}}
            </div>

        </div>
    </div>
@stop
