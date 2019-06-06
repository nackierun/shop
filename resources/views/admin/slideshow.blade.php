@extends('voyager::master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Slideshow</h1></div>
                    <div class="card-body">
                        <form action="{{ url('/admin/slideshow') }}" method="POST" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <input name="slideshow" type="file">
                            </div>
                            <div class="pt-1">
                                <button class="btn btn-primary">add</button>
                            </div>
                            @csrf
                        </form>
                    </div>
                    <div class="card col-md-6">
                        <p>Result</p>
                        @foreach ($slideshow as $item)
                            <img src="{{ url('/storage/'.$item->image) }}" style="width: 100px" alt="">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
