@extends('admin.layouts.app')
@section('content')
<div class=" container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ url('/admin/slideshow') }}" method="POST" enctype="multipart/form-data">
            <div class="col-md-6">
                <input name="slideshow" type="file">
            </div>
            <button class="btn btn-primary">add</button>
            @csrf
        </form>
        </div>
        <div class="card card-body col-md-6">
            @foreach ($slideshow as $item)
                <img src="{{ asset($item->image) }}" alt="">
            @endforeach
            
        </div>
    </div>
</div>
@endsection
