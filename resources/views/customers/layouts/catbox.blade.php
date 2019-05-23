<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        หมวดหมู่
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach($categories as $category)
        <a class="dropdown-item" href="{{ url('#'.$category->id) }}">{{ $category->name }}</a>
        @endforeach
    </div>
</div>
