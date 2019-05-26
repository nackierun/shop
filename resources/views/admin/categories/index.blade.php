@extends('admin.layouts.app')
@section('content')
    <div class="col-sm-6 pt-5">
        <h1>Categories<a class="badge badge-success" href="{{ url('admin/categories/create') }}">Add</a></h1>

        <table class="table table-bordered table-striped">
            <tr>
                <th>
                    <div class="badge badge-success">Id</div>
                </th>
                <th>
                    <div class="badge badge-info">Name</div>
                </th>
                <th>
                    <div class="badge badge-secondary">Pics</div>
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

                            <img src="{{ $category->image }}" alt="{{ $category->image }}">

                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('admin/categories/show'.$category->id) }}">Detail</a>
                        <a class="btn btn-primary" href="{{ url('admin/categories/edit'.$category->id) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ url('admin/categories/delete'.$category->id) }}" onclick="return confirm('ยืนยันที่จะลบ?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>


        {{$categories->render()}}
    </div>
@stop
