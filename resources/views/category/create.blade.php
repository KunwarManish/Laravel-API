@extends('layout')

@section('content')

<h1>Create New Category </h1>

<div class="container">
    <form action="/save_category" method="post">
        @csrf
        <div class="form-group">
            <label for="category">Category Name:</label>
            <input type="text" class="form-control" id="category" name="category" placeholder="Category Name">
            
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection