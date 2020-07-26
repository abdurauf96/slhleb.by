<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Page extends Model
{
    use LogsActivity;
    
    public function getTitle()
    {
        $title='title_'.\App::getLocale();
        return $this->$title;
    }
    public function getDesc()
    {
        $desc='desc_'.\App::getLocale();
        return $this->$desc;
    }
    public function getContent()
    {
        $content='content_'.\App::getLocale();
        return $this->$content;
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pages';

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
    protected $fillable = ['title_ru', 'title_by', 'title_en', 'desc_ru', 'desc_by', 'desc_en', 'content_ru', 'content_by', 'content_en', 'image', 'key'];

    

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
