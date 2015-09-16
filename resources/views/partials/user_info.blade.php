@if(Auth::check())

	<div class="user-col col-sm-4">
		
		<div class="image-holder img-thumbnail" style="background-image: url('/dist/avatar.png'); background-size: cover"></div>
		<h3>{{ $user->name }}</h3>
		<h4><small class="text-muted">{{ $user->email }}</small></h4>
		<br>
		
		<div class="card card-block user-info" style="background-color: white">
			
			{{-- If the user being viewed in the logged in user --}}
			@if( $user->id == Auth::user()->id)

				{!! Form::open(['url'=>'/tweet', 'method'=>'post']) !!}

					<div class="form-group">
						{!! Form::label('content', 'Make a tweet') !!}
						{!! Form::textarea('content', '' ,['placeholder' => 'tweet tweet...' ,'class' => 'form-control', 'style' => 'height: 100px']) !!}
					</div>

					<div class="form-group">
						{!! Form::submit('Post' ,['class' => 'btn btn-primary']) !!}
					</div>

				{!! Form::close() !!}

			@else

				@if($following)

					<p>Click to unfollow {{ $user->name }}'s tweets</p>
					<a href="/unfollow/{{ $user->id }}" class="btn btn-primary">Unfollow</a>

					
				@else

					<p>Click to follow {{ $user->name }}'s tweets</p>
					<a href="/follow/{{ $user->id }}" class="btn btn-primary">Follow</a>

					
		
				@endif

			@endif

		</div>
	</div>

@else

	<div class="col-sm-4">
		<h3>Want to add tweets?</h3>
		<div class="card card-block" style="background: white">
			<p>Already have an account?</p>
			<a href="/login">Login</a>
			<br>
			<br>
			<p>New to Twit?</p>
			<a href="/register">Register</a>
		</div>
	</div>

@endif
