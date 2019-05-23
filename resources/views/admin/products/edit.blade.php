@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Add Products</h1>
            <form action="{{ url('admin/products/edit'.$products->id) }}" method="post">
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
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    {{ $errors->first('category_id') }}
                </div>
                <div class="form-group col-md-12">
                    <p>Description</p>
                    <input type="text" name="description" value="{{ $products->description }}">
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
                <div>
                    <button class="btn btn-primary">Add</button>
                </div>
                @csrf
            </form>
        </div>
    </div>





@stop
