<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey_user extends Model
{
    //
    public $timestamps = false;

    protected $fillable =['survey_id', 'user_id'];

    public function responses()
    {
        return $this->hasMany('App\Response');
    }
/*
    public function users()
    {
        return $this->belongsToMany('App\User', 'responses');
    }

    public function surveys()
    {
        return $this->belongsTo('App\Survey');
    }
}
