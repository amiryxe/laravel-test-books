<?php

namespace App\Http\Controllers;

use App\Category;
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

    public function index()
    {
        $products = Product::with(['user'])->get();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function show($id)
    {
        $product = Product::with('categories')->findOrFail($id);
        dd($product->toArray());
        return view('products.show', compact('product'));
    }

    public function store(StoreProduct $request)
    {
        /*        $request->validate([
                    'name'          => 'required',
                    'price'         => 'required|numeric',
                    'weight'        => 'required|numeric',
                    'description'   => 'required',
                ]);*/
        $validated = $request->validated();

        $product = Auth::user()->products()->create($request->except('_token'));
        $product->categories()->attach($request->get('category_id'));

        return redirect('/products');
    }
}
