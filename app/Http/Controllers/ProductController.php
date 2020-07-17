<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function show($id) {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    public function store(Request $request) {
        $request->validate([
            'name'          => 'required',
            'price'         => 'required|numeric',
            'weight'        => 'required|numeric',
            'description'   => 'required',
        ]);

        $product = Product::create($request->except('_token'));
        dd($product->toArray());
    }
}
