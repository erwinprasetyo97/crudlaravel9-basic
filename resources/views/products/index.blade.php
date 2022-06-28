@extends('layouts.main')

@section('content')
<a class="btn btn-primary" href="/products/create">Add Product</a>
<table class="table table-hover">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>SKU</th>
        <th>Category</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    <tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->sku }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-warning" href="/products/{{ $product->id }}/edit">Edit</a>
                    <form action="/products/{{ $product->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete" onclick="confirm('Sure ?')">
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tr>
</table>

@endsection