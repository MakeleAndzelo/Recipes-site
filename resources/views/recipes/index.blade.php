@extends('layouts.app')

@section('content')
	@foreach($recipes as $recipe) 
		<a href="{{ route('recipes.show', $recipe->id )}}">{{ $recipe->title }}</a>
	@endforeach
@endsection