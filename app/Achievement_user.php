<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement_user extends Model
{
    protected $fillable = ['user_id','achievement_id', 'is_achieved', 'complete_rate'];
}
