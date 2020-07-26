<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Personal extends Model
{
    use LogsActivity;
    public function getName()
    {
        $name='name_'.\App::getLocale();
        return $this->$name;
    }
    public function getPosition()
    {
        $position='position_'.\App::getLocale();
        return $this->$position;
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personals';

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
    protected $fillable = ['name_ru', 'name_by', 'name_en', 'position_ru', 'position_by', 'position_en', 'phone', 'email', 'work_time_ru', 'work_time_by', 'work_time_en'];

    

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
