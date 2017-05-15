<?php

namespace App\Listeners;

use App\Events\NewSurvey;
use App\Events\Points;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SaveSurvey
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewSurvey  $event
     * @return void
     */
    public function handle(NewSurvey $event)
    {
      //get event data

      $answers=collect($event->answers);
      $user=$event->user;
      $answers->each(function ($answer) use($user){
        if($answer['q_id']!=null && $answer['c_id']!=0){
          $response = new \App\Response;
          $response->users()->associate($user);
          $response->questions()->associate($answer['q_id']);
          $response->choices()->associate($answer['c_id']);
          $response->save();
        }
      });
        event(new Points($answers->count()));

      // //create a new survey
      // $survey = new \App\Survey;
      // $survey->save();
      // //attach user to the survey
      // $user->surveys()->attach($survey->id);

      //get answered question;
      // $question = \App\Question::find($question_id);

      //attach question to suervey
      //to do for loop for multiple questions
      // $survey->questions()->attach($question->id);


      //create the responses of the user to the question in this survey
      // $response = new \App\Response;
      // $response->users()->associate($user->id);
      // $response->questions()->associate($question->id);
      // $response->choices()->associate($choice_id);
      // // $response->surveys()->associate($survey->id);
      // $response->save();


    }
}
