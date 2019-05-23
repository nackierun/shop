@extends('layouts.myapp')
@section('content')
    <div class="col-sm-6">
        <h1>Categories</h1>

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
                        <a class="btn btn-primary" href="{{ url('/categories/show'.$category->id) }}">Detail</a>
                    </td>
                </tr>
            @endforeach
        </table>


        {{$categories->render()}}
    </div>
@stop
