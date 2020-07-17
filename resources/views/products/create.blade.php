@extends('layouts.app')

@section('title') Create new product @endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="email" class="form-control" id="name" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price">
                </div>

                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="number" class="form-control" id="weight">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="number" class="form-control" id="description">
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
