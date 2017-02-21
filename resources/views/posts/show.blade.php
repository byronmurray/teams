@extends('layouts.app')

@section('content')

<div class="col-sm-8 blog-main">

    <div class="blog-post">
        <h2 class="blog-post-title"><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h2>
        <p class="blog-post-meta">January 1, 2014 by Mark</p>
        <p>{{ $post->body }}</p>

        <hr>

        <div class="comments">

	        <div class="list-group">
	        	
				@foreach ($post->comments as $comment)
					
					<li class="list-group-item">

					<strong>
						{{ $comment->created_at->diffForHumans() }} : &nbsp;
					</strong>
						
						{{ $comment->body }}

					</li>
						
				@endforeach

			</div>

        </div>

        <form action="/posts/{{ $post->id }}/comments" method="POST">
	    {{ csrf_field() }}

		  <div class="form-group">
		    <textarea type="text" id="body" name="body" class="form-control" placeholder="Post a comment here....."></textarea>
		  </div>

		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Add Comment</button>
		  </div>
		</form>


    </div><!-- /.blog-post -->       


</div><!-- /.blog-main -->


@endsection