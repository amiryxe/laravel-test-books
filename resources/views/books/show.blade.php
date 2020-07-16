@extends('layouts.app')

@section('title') {{$book->name}} @endsection

@section('content')
    <div class="single-book">
        <h2>Price: {{$book->price}}</h2>
        <h3>pages: {{$book->pages}}</h3>
        <h4>ISBN: {{$book->ISBN}}</h4>
        <h4>Publish: {{$book->published_at}}</h4>
    </div>
    <a href="/books">Back to Books list</a>
@endsection
