<form action="{{ $action }}" method="POST">
	<p class="recipe-form">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="{{ $method }}">

		<label for="title">Title:</label>
		<input type="text" name="title">

		<label for="description">Description:</label>
		<textarea name="description"></textarea>

	</p>
	<p class="ingredients-form">
		<input type="text" placeholder="ingredient..." name="ingredients[]">
		<input type="text" placeholder="ingredient..." name="ingredients[]">
		<button>Add ingredient</button>
	</p>
	<p class="steps-form">
		<input type="text" placeholder="step..." name="steps[]">
		<input type="text" placeholder="step..." name="steps[]">
		<button>Add step</button>
	</p>
	<input type="submit" value="{{ $btn }}">
</form>