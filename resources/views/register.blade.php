@extends('layout/master')

@section('content')

	<h2>Register</h2>
	
	<div class="form-container">
		{!! Form::open(['url'=>'/user', 'method'=>'post'])  !!}

		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name','', ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', '', ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Password') !!}
			{!! Form::text('password', '', ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}
	</div>
@stop