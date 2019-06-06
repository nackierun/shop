@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><h1>Products<a class="badge badge-success"
                                                            href="{{  url('admin/products/create')  }}">Add</a>
                            <a href="{{ url('admin/slideshow') }}" class="badge badge-info">Slideshow</a>
                        </h1>
                    </div>
                    <div class="card-body">
                        @if(Session()->has('status'))
                            <div class="alert alert-success">
                                {{ Session()->get('status') }}
                            </div>
                        @endif
                        <div class="col-sm-auto">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Products</th>
                                    <th>Categories</th>
                                    <th>Title</th>
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
                                            {{ $product->title }}
                                        </td>
                                        <td>
                                            {{ $product->description }}
                                        </td>
                                        <td>
                                            {{  $product->qty  }}
                                        </td>
                                        <td>
                                            {{  number_format($product->price ) }}
                                        </td>
                                        <td>
                                            <a href="{{ url('/storage/'.$product->image) }}"><img
                                                    src="{{ url('/storage/'.$product->image) }}" alt=""
                                                    style="width: 100px"></a>
                                        </td>
                                        <td>
                                            <div class="col">
                                                <a href="{{ url('admin/products/show/'.$product->id) }}"
                                                   class="btn btn-primary">Detail</a>
                                            </div>
                                            <div class="col pt-1">
                                                <a href="{{ url('admin/products/edit/'.$product->id) }}"
                                                   class="btn btn-primary">Edit</a>
                                            </div>
                                            <div class="col pt-1"><a href="{{ url('admin/products/delete/'.$product->id) }}"
                                                    class="btn btn-danger"
                                                    onclick="return confirm('ยืนยันที่จะลบ?')">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            {{$products->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
