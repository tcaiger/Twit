
<nav class="navbar navbar-fixed-top navbar-dark bg-primary">
	<div class="container">
		<a class="navbar-brand" href="/">Twit</a>

		<ul class="nav navbar-nav pull-right">

			@if(Auth::check())

				<li class="nav-item active">
		 			<a class="nav-link" href="/user/{{ Auth::user()->id }}"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
				</li>
				<li class="nav-item">
		 			<a class="nav-link" href="/logout"><i class="fa fa-sign-out"></i> Logout</a>
				</li>
				
			@else

				<li class="nav-item active">
		 			<a class="nav-link" href="/register"><i class="fa fa-user"></i> Register</a>
				</li>
				<li class="nav-item">
		 			<a class="nav-link" href="/login"><i class="fa fa-sign-in"></i> Login</a>
				</li>

			@endif
		</ul>
	</div>
</nav>
<div class="banner"></div>