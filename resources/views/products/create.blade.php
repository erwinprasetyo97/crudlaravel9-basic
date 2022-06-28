@extends('layouts.main')
@section('content')
    <form action="/products/store" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Product</label>
      <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Product">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">SKU</label>
        <input type="text" name="sku" class="form-control" placeholder="Masukkan SKU">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Category</label>
        <input type="text" name="category" class="form-control" placeholder="Masukkan Category">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input type="text" name="price" class="form-control" placeholder="Masukkan Price">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection