<div class="tweet-content card card-block" style="background-color: white">

	<a href="/user/{{ $tweet->user->id }}"><p class="card-title">{{ $tweet->user->name }}</p></a>
	<p class="card-text">{!! $tweet->content !!}</p>
	
	<p class="card-text"><small class="text-muted">Posted {{ date('g:i a d F', strtotime($tweet->created_at)) }}</small></p>

	@if(Auth::id()==$tweet->user->id)
		{{-- Edit Tweet --}}
		<a class="edit" href="/tweet/edit/{{ $tweet->id }}"><i class="fa fa-pencil-square-o"></i></a>

		{{-- Delete Tweet --}}
		<a class="delete" href="/tweet/{{ $tweet->id }}" data-method="delete" data-confirm="Are You Sure?" data-token="{{csrf_token()}}"><i class="fa fa-trash-o"></i></a>

	@endif

</div>
