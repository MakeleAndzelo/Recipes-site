<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
	protected $fillable = [
		'name'
	];
	
	public function recipe()
	{
		return $this->belongsTo(Recipe::class);		
	}
}
