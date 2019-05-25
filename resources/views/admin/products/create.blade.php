@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <h1>Add Products</h1>
            <form action="/admin/products/create" method="post">
                <div class="form-group col-md-12">
                    <p>Name</p>
                    <input type="text" name="name">
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
                    <input type="text" name="description">
                    {{ $errors->first('description') }}
                </div>
                <div class="form-group col-md-12">
                    <p>Quantity</p>
                    <input type="text" name="qty">
                    {{ $errors->first('qty') }}
                </div>
                <div class="form-group col-md-12">
                    <p>Price</p>
                    <input type="text" name="price">
                    {{ $errors->first('price') }}
                </div>
                <div class="form-group col-md-12">
                    <p>Picture</p>
                    <!--<input type="file" name="images">-->
                    {{-- $errors->first('images') --}}
                </div>
                <div>
                    <button class="btn btn-primary">Add</button>
                </div>
                @csrf
            </form>
        </div>
    </div>





@stop
