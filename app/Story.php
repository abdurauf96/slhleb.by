<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Story extends Model
{
    use LogsActivity;
    
    public function category()
    {
        return $this->belongsTo(StoryCategory::class, 'category_id');
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'stories';

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
    protected $fillable = ['title_ru', 'title_by', 'title_en', 'body_ru', 'body_by', 'body_en', 'image', 'category_id'];

    

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
