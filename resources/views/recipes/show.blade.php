@extends('layouts.app')

@section('content')
	<article id="recipe-show">
		<div class="row standard-section">
			<div class="five columns">
				<img src="/images/{{ $recipe['image']}}" alt="{{ $recipe['title'] }}" class="u-full-width">
			</div>
			<div class="seven columns">
				<h1 class="recipe-title">{{ $recipe->title}}</h1>
				<p>{{ $recipe->description }}</p>
				<small>Submitted by {{ $recipe->user->name }}</small>
			</div>
		</div>
		<div class="row">
			<div id="ingredients" class="six columns standard-section">
				<h3 class="recipe-title">Ingredients: </h3>
				<ul>
					@foreach($recipe->ingredients as $ingredient)
						<li>{{ $ingredient->name }}</li>
					@endforeach
				</ul>
			</div>
			<div id="steps" class="six columns standard-section">
				<h3 class="recipe-title">Directions: </h3>
				<ul>
					@foreach($recipe->steps as $step)
						<li>{{ $step->name }}</li>
					@endforeach
				</ul>
			</div>
		</div>
	</article>
	@if(Auth::user() && Auth::id() === $recipe->user_id)
		<div class="btn-group">
			<a href="/recipes/{{ $recipe->id }}/edit" class="button">Edit</a>
			<form action="/recipes/{{$recipe->id}}" method="POST">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="DELETE">
				<button type="submit" class="button">Delete</button>
			</form>
		</div>
	@endif
@endsection