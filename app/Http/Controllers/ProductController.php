<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view('products.index',compact(['products']));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create($request->except('_token', 'submit'));
        return redirect('/products');
        // dd($request->all());
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',compact(['product']));
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->update($request->except('_token','submit'));
        return redirect('/products');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
}
