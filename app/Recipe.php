<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        "title",
        "description"
    ];

    public function ingredients()
    {
    	return $this->hasMany(Ingredient::class);
    }

    public function steps()
    {
    	return $this->hasMany(Step::class);
    }
}
