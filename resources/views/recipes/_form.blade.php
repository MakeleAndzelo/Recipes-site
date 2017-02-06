<form action="{{ $action }}" method="POST">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="{{ $method }}">

	<label for="title">Title:</label>
	<input type="text" name="title">

	<label for="description">Description:</label>
	<textarea name="description"></textarea>

	<input type="submit" value="{{ $btn }}">
</form>