@extends('layouts.app')

@section('content')

<form action="{{ route('store_blog_path') }}" method="POST" enctype="multipart/form-data">
<!-- Use inbuilt CSRF token from laravel -->
    @csrf
<div class="form-group"    >
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" placeholder="Blog title goes here..." required>
</div>
<div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" rows="10" class="form-control" placeholder="Blog content goes here..." required></textarea>
</div>
<div class="form-group">
    <input type="file" name="image1" class="form-control">
</div>
<div class="form-group">
<button type="submit" class="btn btn-outline-primary">Add Blog Post</button>
</div>
</form>
@endsection
