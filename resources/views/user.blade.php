@extends('layout/master')

@section('content')

<div class="row">

	@include('partials/user_info')
	
	<div class="col-sm-8">
		<h2>Tweets</h2>

		@forelse($user->tweets as $tweet)

			@include('partials/tweet_content')

		@empty

		<p>no tweets to show</p>
		
		@endforelse

	</div>
</div>

@stop



    

    
    

    
  
