@extends('layouts.myapp')
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <h1>Create categories</h1>
              <form action="/categories/create"  method="post">

                  <div class="form-group">
                      <input type="text" name="name" value="{{  old('name')  }}">
                  </div>
                  <div>
                      <button class="btn btn-primary">Save</button>
                  </div>
                  @csrf
                  {{ $errors->first('name') }}

              </form>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <h2>result</h2>
              @foreach($categories as $category)
                  <p>ID: {{  $category->id }}</p>
                  <p>NAME: {{ $category->name }}</p>
                  @endforeach
              {{$categories->render()}}
          </div>
      </div>

  </div>
@stop
