<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipesController extends Controller
{
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
		$recipe = new Recipe;
		$recipe->title = $request->title;
		$recipe->description = $request->description;
		$recipe->save();

		foreach ($request->ingredients as $ingredient) {
			$recipe->ingredients()->create(["name" => $ingredient, 'recipe_id' => $recipe->id]);
		}
		foreach ($request->steps as $step) {
			$recipe->steps()->create(["name" => $step, 'recipe_id' => $recipe->id]);
		}
		
		return redirect('/');
	}

	public function show(Recipe $recipe)
	{
		return view('recipes.show', compact('recipe'));
	}

	public function edit(Recipe $recipe)
	{
		return view("recipes.edit", compact('recipe'));
	}

	public function update(Request $request, Recipe $recipe)
	{
		$recipe->update($request->all());
		return redirect(route('recipes.show', $recipe->id));
	}

	public function destroy()
	{
		$recipe->delete();
		return redirect('/');
	}
}
