@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-12">
                <h1>Products<a class="badge badge-success" href="{{  url('admin/products/create')  }}">Add</a></h1>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Products</th>
                        <th>Categories</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Picture</th>
                        <th>Action</th>
                    </tr>
                    @foreach($products as $product)
                        <tr>
                            <td>
                                {{  $product->name  }}
                            </td>
                            <td>
                                {{ $product->category->name  }}
                            </td>
                            <td>
                                {{ $product->description }}
                            </td>
                            <td>
                                {{  $product->qty  }}
                            </td>
                            <td>
                                {{  $product->price  }}
                            </td>
                            <td>
                                {{ $product->image }}
                            </td>
                            <td>
                                <a href="{{ url('admin/products/show'.$product->id) }}"
                                   class="btn btn-primary">Detail</a>
                                <a href="{{ url('admin/products/edit'.$product->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('admin/products/delete'.$product->id) }}"
                                   class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {{$products->render()}}
            </div>
        </div>
    </div>
@stop
