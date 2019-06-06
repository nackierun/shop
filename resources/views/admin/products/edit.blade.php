@extends('voyager::master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Edit Products</h1></div>
                    <div class="card-body">
                        <form action="{{ url('admin/products/update/'.$products->id) }}" method="post"
                              enctype="multipart/form-data">
                            <div class="form-group col-md-12">
                                <p>Name</p>
                                <input type="text" name="name" value="{{ $products->name }}">
                                {{ $errors->first('name') }}
                            </div>
                            <div class="form-group col-md-12">
                                <p>Category</p>
                                <select name="category_id" id="category_id">
                                    <option value="" aria-disabled="true">Please select</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                                @if ($products->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                {{ $errors->first('category_id') }}
                            </div>
                            <div class="form-group col-md-12">
                                <p>title</p>
                                <input type="text" name="title" value="{{ $products->title }}">
                                {{ $errors->first('title') }}
                            </div>
                            <div class="form-group col-md-12">
                                <p>Description</p>
                                <textarea type="text" name="description" value="{{ $products->description }}"></textarea>
                                {{ $errors->first('description') }}
                            </div>
                            <div class="form-group col-md-12">
                                <p>Quantity</p>
                                <input type="text" name="qty" value="{{ $products->qty }}">
                                {{ $errors->first('qty') }}
                            </div>
                            <div class="form-group col-md-12">
                                <p>Price</p>
                                <input type="text" name="price" value="{{ $products->price }}">
                                {{ $errors->first('price') }}
                            </div>
                            <div class="form-group col-md-12">
                                <p>Image</p>
                                <div>
                                    <img src="{{ asset($products->image) }}">
                                </div>
                                <p><input type="file" name="image"></p>

                                {{ $errors->first('price') }}
                            </div>
                            <div>
                                <button class="btn btn-primary">Add</button>
                                <a class="btn btn-warning" href="{{ url('admin/products') }}">cancel</a>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





@stop
