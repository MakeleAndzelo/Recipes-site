<header id="main-header" class="u-cf">
	<div class="container">
		<a href="/" id="logo" class="u-pull-left"><h1>Recipe Box</h1></a>
		<nav class="u-pull-right">
			@if(Auth::user())
				<a href="/recipes/create" class="button">New recipe</a>
				<form action="/logout" method="POST">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="POST">
					<button type="submit" class="button">Logout</button>
				</form>
			@else
				<a href="/login" class="button">Login</a>
				<a href="/register" class="button">Register</a>
			@endif
		</nav>
	</div>
</header>