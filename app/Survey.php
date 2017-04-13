<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = ['name','description'];
    //model should not be timestamped.
    //public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany('App\User', 'survey_users');
    }

    public function questions()
    {
        return $this->belongsToMany('App\Question', 'survey_questions');
    }

    public function responses()
    {
        return $this->hasMany('App\Response');
    }
}
