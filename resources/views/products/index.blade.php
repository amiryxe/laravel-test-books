@extends('layouts.app')

@section('title') Products List @endsection

@section('content')
    <a href="/products/create" class="btn btn-success">Add new Product</a>
    <ul class="books-list">
        @unless($products->isEmpty())
            @foreach($products as $product)
                <li>
                    <a href={{ '/products/' . $product->id }}>
                        <h2>{{ $product->name }}</h2>
                    </a>
                    <h4>Price: {{ $product->price }}</h4>
{{--                    <h4>Category: {{ $product->categories->name }}</h4>--}}
                    <h5 class="text-secondary">Creator: <span class="text-dark">{{ $product->user->name }}</span></h5>
                </li>
            @endforeach

        @else
            <h3>No Products available!</h3>
        @endif
    </ul>
@endsection
