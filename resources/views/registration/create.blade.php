@extends('layouts.master')

@section('content')

	<div class="container">
		<h1>Register</h1>
		<form method="POST" action="/register">
			{{csrf_field()}}
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name"> </input>
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email"> </input>
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password"> </input>
			</div>

			<div class="form-group">
				<label for="password_confirmation">Password Cofirmation</label>
				<input type="password" class="form-control" id="password_confirmation" name="password_confirmation"> </input>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>
		</form>

		@include('layouts.errors')
	</div>

@endsection

