@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            @include('shared.errors')

            <form method="POST" action={{route('products.categories.store')}}>
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
