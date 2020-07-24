<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequisiteTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'content'];
}
