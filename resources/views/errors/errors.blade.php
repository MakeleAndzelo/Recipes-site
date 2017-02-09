@if ($errors->count() > 0) 
	<div class="container">
		@foreach($errors->all() as $error) 
			<p class="error">{{ $error }}</p>
		@endforeach
	</div>
@endif