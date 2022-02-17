@extends('layouts.app')

@section('main_content')
    <div class="container"> 
        <h1>Create a new comic</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale_date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="textarea" class="form-control" id="description" name="description" value="{{ old('description') }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection