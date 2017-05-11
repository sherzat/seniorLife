<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /*
    public function questions()
    {
        return $this->belongsToMany('App\Question', 'responses');
    }
    */
    public function responses()
    {
        return $this->hasMany('App\Response');
    }

    public function surveys()
    {
        return $this->belongsToMany('App\Survey', 'survey_users');
    }

    public function achievements()
    {
        return $this->belongsToMany('App\Achievement');
    }

    public function getSurveyResult()
    {
        $result= $this->responses()
        ->select(DB::raw("avg(weight) as score, hour(time(responses.created_at)) as hour" ))
        ->join('choices', 'responses.choice_id', '=', 'choices.id')
        ->groupBy(DB::raw("hour" ))
        ->orderBy(DB::raw("hour"))
        ->get();

      return $result;
    }
}
