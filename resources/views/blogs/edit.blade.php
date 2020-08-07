@extends('layouts.app')

@section('content')

<form action="{{ route('update_blog_path', $blog->id) }}" method="POST">
<!-- Use inbuilt CSRF token from laravel -->
    @csrf
    @method('PUT')

<div class="form-group"    >
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" placeholder="Blog title goes here..." value="{{ $blog->title }}" required>
</div>
<div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" rows="10" class="form-control" placeholder="Blog content goes here..." required>{{ $blog->content }}</textarea>
</div>
<div class="form-group">
<button type="submit" class="btn btn-outline-primary">Update Blog Post</button>
</div>
</form>
@endsection
