<?php

namespace App\Listeners;

use App\Events\NewSurvey;
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
      $user=$event->user;
      $question_id=$event->question_id;
      $choice_id=$event->choice_id;

      //create a new survey
      $survey = new \App\Survey;
      $survey->save();
      //attach user to the survey
      $user->surveys()->attach($survey->id);

      //get answered question;
      $question = \App\Question::find($question_id);

      //attach question to suervey
      //to do for loop for multiple questions
      $survey->questions()->attach($question->id);


      //create the responses of the user to the question in this survey
      $response = new \App\Response;
      $response->users()->associate($user->id);
      $response->questions()->associate($question->id);
      $response->choices()->associate($choice_id);
      $response->surveys()->associate($survey->id);
      $response->save();

      
    }
}
