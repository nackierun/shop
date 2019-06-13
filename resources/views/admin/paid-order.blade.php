@extends('voyager::master')
@section('content')
<div class=" container">
    <div class=" row">
        <table class="table table-striped">
            <tr>
                <th>id</th>
                <th>user</th>
                <th>order</th>
                <th>pics</th>
            </tr>
            @foreach ($paid as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->customer_id }}</td>
                <td>{{ $item->orderdetail_id }}</td>
                <td>{{ $item->image }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
