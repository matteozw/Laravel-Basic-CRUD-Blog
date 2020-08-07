@extends('layouts.app')


@section('content')


<!-- INSERT ROW DATA FROM DB-->
@foreach($blogs as $blog)
<!-- LOAD BOOTSTRAP TO DISPLAY -->
       <br> <div class="col mb-8">
            <div class="card mh-30" style="height: 300px;">
              <img src="{{ asset($blog->image1) }}" class="card-img-top" alt="..." style="height: 100px;">
              <div class="card-body">
                <a href="{{ route('blog_path', $blog->id) }}" style="text-decoration: none; color:black;">
                <h5 class="card-title">{{ $blog->title }}</h5></a>

                <p class="card-text"style="height: 75px; overflow:hidden;"> {{ $blog->content }}.</p>

                <a href="{{ route('blog_path', $blog->id) }}" class="float-left">View Post</a>
                <p class="lead float-right"><small class="text-muted">Posted: <em>{{ $blog->created_at->diffForHumans() }}</em></small></p>
              </div>
            </div>
          </div><br>



@endforeach


@endsection
