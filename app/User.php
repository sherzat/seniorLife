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
        'name', 'email', 'password', 'avatar','point',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //one to many
    public function responses()
    {
        return $this->hasMany('App\Response');
    }


    //many to many
    public function achievements()
    {
        return $this->belongsToMany('App\Achievement')->withPivot('complete_rate','is_achieved')->withTimestamps();
    }

    public function getSurveyResult()
    {
    //  ->select(DB::raw("cast(avg(weight)/0.5 as decimal(2,1)) as score, time_format((time(responses.created_at)), '%H:00:00') as hour" ))

        $result= $this->responses()
        ->select(DB::raw("cast(avg(weight)/0.5 as decimal(2,1)) as score, date(responses.created_at) as hour" ))
        ->join('choices', 'responses.choice_id', '=', 'choices.id')
        ->groupBy(DB::raw("hour" ))
        // ->orderBy(DB::raw("hour"))
        ->get();

        $result->transform(function ($item) {
          return ['score'=>(float)$item->score, 'hour'=>$item->hour]  ;
        });

      return $result;
    }

    public function getResultByCatagory(){

        $responses = \App\Response::select('name', DB::raw('avg(weight) as score'))
            ->join('questions', 'questions.id', '=', 'responses.question_id')
            ->join('categorys', 'categorys.id', '=', 'questions.category_id')
            ->join('choices', 'choices.id', '=', 'responses.choice_id')
            ->where('user_id', $this->id)
            ->groupBy('name')
            ->get();

        return $responses;
    }

    public function getPlayerStatus()
    {
      $points = $this->point;
      $level_score = array( );
      for($i=1;$i<51;$i++){
        $nextscore = $i*($i + 2)*10;
        array_push($level_score, array("level"=>$i, "score"=>$nextscore));
      }
      $prev_level = array_last($level_score, function ($value, $key) use($points) {
        return $value["score"] <= $points;
      });
      $current_level = array_first($level_score, function ($value, $key) use($points){
        return $value["score"] > $points ;
      });


      $level['current_level'] = $current_level;
      $level['prev_level'] = $prev_level;


      $max_score = ($level['current_level']['score'] - $level['prev_level']['score']);
      $processed_score =  ($this->point - $level['prev_level']['score']);
      $level_progress['max_score'] = $max_score;
      $level_progress['processed_score'] = $processed_score;
      $PlayerStatus =array(
          'level_progress' => $level_progress,
          'level' => $level['current_level']['level'],
      );
      return $PlayerStatus;
    }
}
