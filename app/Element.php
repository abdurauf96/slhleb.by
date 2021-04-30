<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $fillable = ['page_id', 'title_ru', 'title_by', 'title_en', 'tag_ru', 'tag_by', 'tag_en', 'content_ru', 'content_by', 'content_en',  'image', 'slug'];
}
