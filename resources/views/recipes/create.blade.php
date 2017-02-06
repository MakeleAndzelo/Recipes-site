@extends('layouts.app')

@section('content')
	<h3>Create new recipe</h3>
	@include('recipes._form', ['action' => "/recipes",'method' => 'POST',  'btn' => 'Add recipe'])
@endsection