@extends('layouts.app')

@section('title') Create new book @endsection

@section('content')
    <div class="card">
        <div class="card-body">
            @include('shared.errors')

            <form method="POST" action={{route('products.store')}}>
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" class="form-control" id="price" value="{{ old('price') }}">
                </div>

                <div class="form-group">
                    <label for="pages">Pages</label>
                    <input type="number" name="pages" class="form-control" id="pages" value="{{ old('pages') }}">
                </div>

                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" name="ISBN" class="form-control" id="isbn" value="{{ old('ISBN') }}">
                </div>

                <div class="form-group">
                    <label for="published_at">Published Date:</label>
                    <input type="date" name="published_at" class="form-control" id="published_at" value="{{ old('published_at') }}">
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
