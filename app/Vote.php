<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['competition_id', 'participant_id', 'user_ip'];
}
