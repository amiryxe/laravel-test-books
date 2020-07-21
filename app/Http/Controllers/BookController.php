<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }

    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('books.show', compact('book'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:256',
            'price' => 'required|numeric',
            'ISBN' => 'required|max:10|min:10',
            'pages' => 'required|numeric',
            'published_at' => 'required|date',
        ]);

        $book = Book::create($request->except('_token'));

        dd($book->toArray());
    }
}
