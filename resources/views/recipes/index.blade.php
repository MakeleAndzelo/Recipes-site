@extends('layouts.app')

@section('content')
	@foreach($recipes as $recipe) 
		<img src="/images/{{ $recipe->image}}" alt="">
		<a href="{{ route('recipes.show', $recipe->id )}}">{{ $recipe->title }}</a>
	@endforeach
@endsection