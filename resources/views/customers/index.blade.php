@extends('customers.layouts.app')
@section('title','Home')
@section('content')
    <!-- Page Content -->
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-3">
                <h1 class="my-4">หมวดหมู่</h1>
                <div class="list-group position-fixed">
                    @foreach($categories as $category)
                        <a href="{{ url('customers/showcat'.$category->id) }}"
                           class="list-group-item">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active">
                            <img class="d-block img-fluid"
                                 src="{{ url('https://ippcdn-ippawards.netdna-ssl.com/wp-content/uploads/2018/07/34-1st-PANORAMA-Mateusz-Piesiak-1.jpg') }}"
                                 style=" width: 100%" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Mobile Shop</h5>
                                <p>Welcome</p>
                            </div>
                        </div>
                        @foreach ($slideshow as $item)
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{ url('/storage/'.$item->image) }}"
                                     style=" width: 100%" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Welcome</h5>
                                    <p>shop</p>
                                </div>
                            </div>
                        @endforeach
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                @if(session()->has('message'))
                    <div class="alert-success">{{ session()->get('message') }}</div>
                @endif
                <div class="row pt-3">
                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="{{ url('/storage/'.$product->image) }}"
                                                 style="width: 200px" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">{{ $product->name }}</a>
                                    </h4>
                                    <h5>{{ number_format($product->price) }} บาท</h5>
                                    <p class="card-text">{{ $product->title }}</p>
                                    <p class="card-text">{{ $product->category->name }}</p>
                                </div>
                                <div class="card-footer bg-secondary">
                                    <small class="text-muted">
                                        <form action="{{ Route('AddToCart') }}" method="post">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <button class="btn btn-primary">ใส่ตะกร้า</button>
                                            <a href="{{ url('customers/products/show'.$product->id) }}"
                                               class="btn btn-success">ดูข้อมูล</a>
                                        </form>
                                    </small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{$products->render()}}
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-lg-9 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Footer <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">ร้านค้า</p>
        </div> -->

    <!-- /.container -->
    </footer>
@stop
