@extends('layouts.app')

@section('content')
    <a class="btn btn-success mb-3" href={{ route('products.categories.create') }}>Create new category</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Count of products</th>
            <th scope="col">Manage</th>
        </tr>
        </thead>
        <tbody>

        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>{{ '...' }}</td>
                <td>
                    <button class="btn btn-info">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection
