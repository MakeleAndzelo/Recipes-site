<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="{{ $method }}">

	<div class="standard-section">
		<div class="form-control">
			<label for="title">Title:</label>
			<input type="text" name="title" value="{{ isset($recipe->title) ? $recipe->title : null }}" class="u-full-width">
		</div>

		<div class="form-control">
			<label for="description">Description:</label>
			<textarea name="description" class="u-full-width">{{ isset($recipe->description) ? $recipe->description : null }}</textarea>
		</div>

		<div class="form-control">
			<label for="image">Image:</label>
			<input type="file" name="image" value="">
		</div>
	</div>

	<div class="row">
		<div class="standard-section six columns">
			<div  id="ingredients-form" >
				@if(isset($recipe) && $recipe->ingredients->count() > 0)
					@foreach($recipe->ingredients as $ingredient)
						<div class="form-control">
							<input type="text" placeholder="Ingredient..." name="ingredients[]" value="{{ $ingredient->name }}">
						<button class="button rmvBtn">Remove</button>
					</div>
					@endforeach
				@else
					<div class="form-control">
						<input type="text" placeholder="ingredient..." name="ingredients[]">
						<button class="button rmvBtn">Remove</button>
					</div>
				@endif
			</div>
			<button id="ingredientBtn" class="button-primary">Add ingredient</button>
		</div>
		<div class="standard-section six columns">
			<div id="steps-form">
				@if(isset($recipe) && $recipe->steps->count() > 0)
					@foreach($recipe->steps as $step)
						<div class="form-control">
							<input type="text" placeholder="Step..." name="steps[]" value="{{ $step->name }}">
						<button class="button rmvBtn">Remove</button>
					</div>
					@endforeach
				@else
					<div class="form-control">
						<input type="text" placeholder="Step..." name="steps[]">
						<button class="button rmvBtn">Remove</button>
					</div>
				@endif
			</div>
			<button id="stepBtn" class="button-primary">Add step</button>
		</div>
	</div>
	<div class="row">
		<input class="button-primary" type="submit" value="{{ $btn }}">
	</div>
</form>