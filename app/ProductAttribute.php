<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $fillable=['product_id', 'weight_ru', 'weight_by', 'weight_en', 'time', 'qty'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
