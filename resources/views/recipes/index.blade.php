@extends('layouts.app')

@section('content')
	<section id="recipes">
		@if ($recipes->count() > 0)
			@foreach(array_chunk($recipes->toArray(), 3) as $recipes)
				<div class="row">
					@foreach($recipes as $recipe) 
						<div class="four columns">
							<figure class="recipe">
								<a href="{{ route('recipes.show', $recipe['id'] )}}">
									<img src="/images/{{ $recipe['image']}}" alt="{{ $recipe['title'] }}" class="u-full-width">
								</a>
								<figcaption>
									<a href="{{ route('recipes.show', $recipe['id'] )}}">{{ $recipe['title'] }}</a>
								</figcaption>
							</figure>
						</div>
					@endforeach
				</div>
			@endforeach
		@else 
			<div class="standard-section u-center">
				<h2>Upssss...</h2>
				<p>There are no recipes yet. {{ Auth::user() ? "You are ready to" : "Sign in and" }} add a new recipe!</p>
				@if (!Auth::user())
					<a href="/login" class="button">Login</a>
					<a href="/register" class="button">Register</a>
				@endif
			</div>
		@endif
	</section>
@endsection

@section('footer')
	<script>
		var highest = 0;

		$('#recipes .row .four figure').each(function(e) {
			if ($(this).height() > highest) {
				highest = $(this).height();
			}
		});
		$('#recipes .row .four figure').css('min-height', highest + "px");
	</script>
@endsection