<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
    <body>

        <div class="blog-masthead">
          <div class="container">
            <nav class="nav blog-nav">
              <a class="nav-link active" href="/">Home</a>
              <a class="nav-link" href="/posts/create">New Post</a>
              <a class="nav-link" href="#">Press</a>
              <a class="nav-link" href="#">New hires</a>
              <a class="nav-link" href="#">About</a>
            </nav>
          </div>
        </div>

        <div class="blog-header">
          <div class="container">
            <h1 class="blog-title">The Bootstrap Blog</h1>
            <p class="lead blog-description">An example blog template built with Bootstrap.</p>
          </div>
        </div>

        <div class="container">

            <div class="row"> 

                @yield('content')

                @include('layouts.sidebar')

            </div><!-- /.row -->

        </div><!-- /.container -->

        @include('layouts.footer')


    </body>
</html>
