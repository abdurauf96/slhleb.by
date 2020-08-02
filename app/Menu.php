<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Menu extends Model
{
    use LogsActivity;
    
    public function getParent($id)
    {
        return $this->find($id);
    }
    public function children()
    {
        return $this->where('parent_id', $this->id)->get();
    }

    public function getNameByUrl($data)
    {
        $url='/'.$data;
        return $this->where('url', $url)->first();
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menuses';

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
    protected $fillable = ['parent_id', 'title_ru', 'title_by', 'title_en', 'url', 'image'];

    

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
