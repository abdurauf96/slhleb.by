<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Recipe extends Model
{
    use LogsActivity;
    
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function steps()
    {
        return $this->hasMany(MealStep::class);
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recipes';

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
    protected $fillable = ['time','tag_id', 'name_ru', 'name_by', 'name_en', 'consist_ru', 'consist_by', 'consist_en', 'image', 'image_fon', 'status','meta_title','meta_description', 'slug'];

    

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
