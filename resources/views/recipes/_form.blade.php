<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
	<p class="recipe-form">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="{{ $method }}">

		<label for="title">Title:</label>
		<input type="text" name="title" value="{{ old('title') }}">

		<label for="description">Description:</label>
		<textarea name="description">{{ old('description') }}</textarea>

		<label for="image">Image:</label>
		<input type="file" name="image">
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