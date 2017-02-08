@extends('layouts.app')

@section('content')
	<section id="edit">
		@include('recipes._form', ['action' => "/recipes/$recipe->id", 'method' => "PATCH", 'btn' => 'Edit recipe'])
	</section>
@endsection

@section('footer')
	<script src="/js/addInputs.js"></script>
@endsection