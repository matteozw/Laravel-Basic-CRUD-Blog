@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-md-12">

            <br><br>
            <div class="jumbotron" style="height:500px; background: url({{ $blog->image1 }}) no-repeat center center fixed;  background-size: contain; background-position: center center;">
            <!--div class="jumbotron jumbotron-fluid"-->
                <div class="container">
                  <h1 class="display-4">{{ $blog->title }}</h1>

                </div>
              </div>

            <p class="lead"> {{ $blog->content }}</p>
            <br>

            <div class="bg-clear clearfix">
                <a class="float-left" href="{{ route('edit_blog_path', $blog->id) }}">Edit</a>

                <form action="{{ route('delete_blog_path', $blog->id) }}" method="POST">
@csrf
@method('DELETE')


                    <button class="btn btn-outline-danger float-right"  type="submit">Delete</button>
                </form>

              </div>
            <br><hr>

            <a href="{{ route('blogs_path') }}">Back</a>
            <br>
            <br>
            <br>
        </div>


    </div>
@endsection
