@extends('layouts.master')
@section('content')
	<div class="container">
		<h1>{{$post->title}}</h1>
		<p>{{$post->body}}</p>
	</div>

	@if(count($post->comment))
		<div>
			<hr>
			<h4>Comments: </h4>
		</div>
		<div class="card" style="width: 40rem;">
	 		 <ul class="list-group list-group-flush">
	 		 	@foreach($post->comment as $comment)
			    	<li class="list-group-item">
			    		<strong>
			    			{{$comment->created_at->diffForHumans()}}
			    		</strong>	
			    		{{$comment->body}}
			    	</li>
			    @endforeach
	  		</ul>
		</div>
	@endif

	<div class="card" style="width: 40rem;">
		<h4 class="card-header">Leave a Comment!</h4>
		<form method="POST" action="/posts/{{$post->id}}/comments">
			{{csrf_field()}}
			<div class="form-group">
				<textarea name="body" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add comment</button>
			</div>
		</form>

		@include('layouts.errors')
	</div>
@endsection