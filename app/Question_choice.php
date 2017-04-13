<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question_choice extends Model
{
    //
    protected $fillable = ['choice_id','question_id'];
    public $timestamps = false;

}
