@extends('layouts.app')

@section('content')

<div class="col-sm-8 blog-main">

    <div class="blog-post">
        <h2 class="blog-post-title"><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h2>
        <p class="blog-post-meta">January 1, 2014 by Mark</p>
        <p>{{ $post->body }}</p>
    </div><!-- /.blog-post -->       


</div><!-- /.blog-main -->


@endsection