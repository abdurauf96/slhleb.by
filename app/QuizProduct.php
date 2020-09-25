<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class QuizProduct extends Model
{
    use LogsActivity;
    
    public function category()
    {
        return $this->belongsTo(QuizCategory::class, 'quiz_category_id');
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'quiz_products';

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
    protected $fillable = ['name', 'image', 'weight', 'quiz_category_id'];

    

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
