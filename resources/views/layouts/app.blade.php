 <!Doctype html>
 <html lang="" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Laravel Blog</title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
     </head>
     <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('blogs_path') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create_blog_path') }}">Create New Blog </a>
                  </li>
            </div>
          </nav>

<!-- ADD A DIV CONTAINER  FOR THE RENDERED CONTENT -->
            <div class="container">
<!--LARAVEL TEMPLATES/ CONTENT IS INSERTED HERE -->
                @yield('content')
            </div>
     </body>
 </html>
