@extends('layouts.master')


@section('content')
	
	<h1>Create a post</h1>

	<hr>

	<form method="POST" action="/posts">

		{{csrf_field()}}

	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter title">
	  </div>
	  <div class="form-group">
	    <label for="body">Content</label>
	    <textarea 
	    	type="text" class="form-control" id="body" name="body">
	    </textarea>
	  </div>

	  <div class="form-group">
	  	<button type="submit" class="btn btn-primary">Publish</button>
	  </div>
	</form>

	@include('layouts.errors')
	
@endsection