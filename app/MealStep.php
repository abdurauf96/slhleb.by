<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealStep extends Model
{
    protected $fillable=['title_ru', 'title_by', 'title_en', 'image', 'recipe_id'];

}
