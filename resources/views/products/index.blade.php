@extends('layouts.myapp')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Products</h1>
                <p><a href="{{  url('#')  }}">Add</a></p>
                @foreach($products as $product)
                    <table class="table table-striped">
                        <tr>
                        <th>Categories</th>
                        <th>Products</th>
                        <th>Qty</th>
                        <th>Price</th>
                        </tr>
                        <tr>
                            <td>
                                {{  $product->category->name  }}
                            </td>
                            <td>
                                {{  $product->name  }}
                            </td>
                            <td>
                                {{  $product->qty  }}
                            </td>
                            <td>
                                {{  $product->price  }}
                            </td>
                        </tr>
                    </table>
                @endforeach
                {{$products->render()}}
            </div>
        </div>
    </div>
@stop
