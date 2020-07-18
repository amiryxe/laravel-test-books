@extends('layouts.app')

@section('title') Books list @endsection

@section('content')
    <a href="/books/create" class="btn btn-success">Create new book</a>
    <ul class="books-list">
        @unless($books->isEmpty())
            @foreach($books as $book)
                <li>
                    <a href={{ '/books/' . $book->id }}>
                        <h2>{{ $book->name }}</h2>
                    </a>
                    <h4>{{ $book->price }}</h4>
                </li>
            @endforeach

        @else
            <h2>No Books available!</h2>
        @endif
    </ul>
@endsection
