@extends('layouts.main')
@section('content')
    <form action="/products/{{ $product->id }}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
      <label class="form-label">Nama Product</label>
      <input type="text" name="name" class="form-control" value="{{ $product->name }}">
    </div>

    <div class="mb-3">
        <label class="form-label">SKU</label>
        <input type="text" name="sku" class="form-control" value="{{ $product->sku }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Category</label>
        <input type="text" name="category" class="form-control" value="{{ $product->category }}">
    </div>
    
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" name="price" class="form-control" value="{{ $product->price }}">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection