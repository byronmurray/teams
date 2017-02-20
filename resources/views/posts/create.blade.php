@extends('layouts.app')

@section('content')

<div class="col-sm-8 blog-main">

    <form action="/posts" method="POST">
    {{ csrf_field() }}

	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" name="title" id="title" placeholder="Post Title">
	  </div>

	  <div class="form-group">
	    <label for="body">Body</label>
	    <textarea type="text" id="body" name="body" class="form-control" placeholder="Post Body"></textarea>
	  </div>

	  <div class="form-group">
	  	<button type="submit" class="btn btn-primary">Add New</button>
	  </div>
	</form>
	
	@include('errors.form')
	    


</div><!-- /.blog-main -->


@endsection