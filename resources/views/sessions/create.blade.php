@extends('layouts.master')
@section('content')
	<div class="content">
		<h1>Sign in</h1>

		<form method="POST" action="/login">
			{{csrf_field()}}

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email"> </input>
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password"> </input>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Login</button>
			</div

		</form>

		@include('layouts.errors')
	</div>
@endsection