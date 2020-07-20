@extends('layouts.app')

@section('title') {{$product->name}} @endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <p>
                Price:
                <b>{{$product->price}}</b>
            </p>

            <p>
                Weight:
                <b>{{$product->weight}}</b>
            </p>

            <p>
                Description:
                <b>{{$product->description}}</b>
            </p>

            <p>
                Creator:
                <b>{{$product->user->name}}</b>
            </p>

            <p>
                Categories:

                @foreach($product->categories as $category)
                    <em>{{ $category->name . ',' }}</em>
                @endforeach
            </p>
        </div>
    </div>

    <a href="/products">Back to products list</a>
@endsection
