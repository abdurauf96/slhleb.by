<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Product extends Model
{
    use LogsActivity;
    use Translatable;
    
    public $translatedAttributes = ['name', 'about', 'consist', 'description'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id', 'filter_id', 'protein', 'carbo', 'fat', 'callory', 'image', 'image_in', 'image_out', 'weight','slide_image', 'status', 'recommend','meta_title','meta_description', 'slug'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function filter()
    {
        return $this->belongsTo('App\Filter');
    }
    public function attributes()
    {
        return $this->hasMany('App\ProductAttribute');
    }

    public function photos()
    {
        return $this->hasMany('App\ProductImage', 'product_id');
    }

    public function recommends()
    {
        return $this->hasMany('App\RecommendProduct');
    }
    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
}
