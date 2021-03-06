@extends('layouts.app')

@section('title') Create new product @endsection

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
                    <label for="weight">Weight</label>
                    <input type="number" name="weight" class="form-control" id="weight" value="{{ old('weight') }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" id="description"
                           value="{{ old('description') }}">
                </div>

                <div class="form-group">
                    <label for="categories">Category</label>
                    <select name="category_id[]" id="categories" class="form-control" multiple>
                        @foreach($categories as $category)
                            <option value={{ $category->id }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
