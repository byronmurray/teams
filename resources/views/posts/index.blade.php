@extends('layouts.app')

@section('content')

<div class="col-sm-8 blog-main">

    @foreach ($posts as $post)
        <div class="blog-post">
            <h2 class="blog-post-title"><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p class="blog-post-meta"> {{ $post->created_at->toFormattedDateString() }} by {{ $post->user->name }}</p>
            <p>{{ $post->body }}</p>
        </div><!-- /.blog-post -->       
    @endforeach

</div><!-- /.blog-main -->


@endsection