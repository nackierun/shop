<div class="dropdown">
    <div class="col-lg-3">
        <h1 class="my-4">Shop Name</h1>
        <div class="list-group position-fixed">
            @foreach($categories as $category)
                <a href="{{ url('customers/showcat'.$category->id) }}"
                   class="list-group-item">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
</div>

