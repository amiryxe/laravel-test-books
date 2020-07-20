<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }

    public function index() {
        $products = Product::with(['user'])->get();

        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function show($id) {
        $product = Product::findOrFail($id);

        foreach ($product->categories as $category){
            dump($category->toArray());
        }
        dd();

        return view('products.show', compact('product'));
    }

    public function store(StoreProduct $request) {
/*        $request->validate([
            'name'          => 'required',
            'price'         => 'required|numeric',
            'weight'        => 'required|numeric',
            'description'   => 'required',
        ]);*/
        $validated = $request->validated();

        Auth::user()->products()->create($request->except('_token'));

        return redirect('/products');
    }
}
