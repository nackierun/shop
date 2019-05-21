@extends('layouts.myapp')
@section('content')
    <div class="col-sm-6">
        <h1>Categories<a class="badge badge-success" href="{{ url('categories/create') }}">Add</a></h1>

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
@stop
