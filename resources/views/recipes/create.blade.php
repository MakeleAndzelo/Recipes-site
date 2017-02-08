@extends('layouts.app')

@section('content')
	<section class="recipe-form">
		@include('recipes._form', ['action' => "/recipes",'method' => 'POST',  'btn' => 'Add recipe'])
	</section>
@endsection

@section('footer')
	<script src="/js/addInputs.js"></script>
@endsection