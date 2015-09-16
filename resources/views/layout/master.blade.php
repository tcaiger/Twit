<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Twit</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/dist/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/dist/style.min.css">
</head>
<body>

	@include('partials/header')

	<div class="container">
		@yield('content')
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script src="/js/laravel-delete.js"></script>
	<script src="/dist/bootstrap.min.js"></script>
</body>
</html>