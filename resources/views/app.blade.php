<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'N3 Konsult - Din ledstjärna i en djungel av it och infrastruktur!')</title>
	<link rel="stylesheet" href="/css/app.css"/>
	<!-- <link rel="icon shortcut" href="/img/icons/favicon.png"> -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">		
</head>
<body>
	<div id="main-wrapper" class="col-md-10 col-md-push-1">
		@include('partials.header')
		<nav class="row top-buffer">
			<ul class="list-inline main-menu">
				@include('partials.navigation')
			</ul>
		</nav>
		<div id="content" class="row">
			@yield('content')
		</div>
		<footer class="row">
			@include('partials.footer')
		</footer>
	</div>
	<script src="/js/jquery-1.11.3.min.js"></script>
	<script src="/js/jquery.slides.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="/js/main.js"></script>
</body>
</html>