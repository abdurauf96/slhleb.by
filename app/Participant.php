<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable=['competition_id', 'name_ru', 'name_by', 'name_en', 'desc_ru', 'desc_by', 'desc_en', 'image', 'point'];
    public function competition()
    {
        return $this->belongsTo(Stock::class, 'competition_id');
    }
}
