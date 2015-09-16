@extends('layout/master')

@section('content')

	<div class="row">

		{{--  =============== --}}
		{{-- User Information --}}
		{{-- ================ --}}
		<div class="col-sm-4">
			<h3>User</h3>
		</div>

		{{--  =============== --}}
		{{-- Tweets --}}
		{{--  =============== --}}
		<div class="col-sm-5">
			<h2>Edit Tweet</h2>

			{!! Form::model($tweet,['url'=>'/tweet/'.$tweet->id, 'method'=>'put']) !!}

				<div class="form-group">
					{!! Form::label('content', 'Content') !!}
					{!! Form::textarea('content', $tweet->content, ['class' => 'form-control', 'style' => 'height: 100px']) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}		
				</div>

			{!! Form::close() !!}

			<a href="/">Return to home</a>
		</div>

@stop