<!-- resources/views/posts/create.blade.php -->

{{--@extends('layouts.app') <!-- Assuming you have a layout file -->--}}

{{--@section('content')--}}
    <div class="container">
        <h2>Create a New Post</h2>
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
{{--@endsection--}}
