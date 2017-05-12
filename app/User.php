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
        ->select(DB::raw("cast(avg(weight)/0.5 as decimal(2,1)) as score, time_format((time(responses.created_at)), '%H:00:00') as hour" ))
        ->join('choices', 'responses.choice_id', '=', 'choices.id')
        ->groupBy(DB::raw("hour" ))
        ->orderBy(DB::raw("hour"))
        ->get();

        $result->transform(function ($item) {
          return ['score'=>(float)$item->score, 'hour'=>$item->hour]  ;
        });



      return $result;
    }
}
