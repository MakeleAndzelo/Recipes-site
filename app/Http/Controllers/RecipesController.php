<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use Auth;
use Image;

class RecipesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->only(['create', 'store', 'edit', 'update', 'destroy']);
	}

	public function index()
	{
		$recipes = Recipe::orderBy('created_at', "DESC")->get();
		return view("recipes.index", compact('recipes'));
	}

	public function create()
	{
		return view('recipes.create');
	}

	public function store(Request $request) 
	{
		$this->validate($request, [
			'title' => 'required|min:3|max:20',
			'description' => 'required|min:20',
			'image' => 'mimes:jpeg,png,bmp|required',
			'ingredients' => 'required|min:3',
			'steps' => 'required|min:3',
		]);

		$recipe = new Recipe;
		$recipe->title = $request->title;
		$recipe->user_id = Auth::id();
		$recipe->description = $request->description;
		$recipe->image =  $request->file('image')->store('/images');
		$recipe->save();

		$img = Image::make(storage_path('app/') . $recipe->image);
		$img->resize(400, 300);
		$img->save(storage_path('app/') . $recipe->image);

		
		static::addons($request, $recipe, 'ingredients');
		static::addons($request, $recipe, 'steps');
		
		return redirect('/');
	}

	public function show(Recipe $recipe)
	{
		return view('recipes.show', compact('recipe'));
	}

	public function edit(Request $request, Recipe $recipe)
	{
		return view("recipes.edit", compact(['request', 'recipe']));
	}

	public function update(Request $request, Recipe $recipe)
	{
		$recipe->update($request->all());
		$recipe->ingredients()->delete();
		$recipe->steps()->delete();

		static::addons($request, $recipe, 'ingredients');
		static::addons($request, $recipe, 'steps');

		return redirect(route('recipes.show', $recipe->id));
	}

	public function destroy(Recipe $recipe)
	{
		$recipe->delete();
		return redirect('/');
	}

	protected static function addons($request, $recipe, $type)
	{
		foreach ($request->$type as $ingredient) {
			$recipe->$type()->create(["name" => $ingredient, 'recipe_id' => $recipe->id]);
		}
	}
}
