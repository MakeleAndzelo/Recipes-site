<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recipe Box</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('layouts.header')
	<div class="container">
		@yield('content')
	</div>
	<script
	  src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
	  integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
	  crossorigin="anonymous"></script>
	@yield('footer')
</body>
</html>