@extends('layouts.app')

@section('content')
	<h3>Edit a recipe</h3>
	@include('recipes._form', ['action' => "/recipes/$recipe->id", 'method' => "PATCH", 'btn' => 'Edit recipe'])
@endsection