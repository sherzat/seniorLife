<?php

namespace App\Http\Controllers;

use App\Events\NewSurvey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Survey;
use App\Http\Requests;

class SurveyController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function survey_result()
  {
    $user=Auth::user();
    $surveyResult = $user->getSurveyResult();
    return json_encode($surveyResult);
  }




  public function create_survey()
  {
    //create new survey.
    //map survey with questions.
    /*
    $survey = new \App\Survey;
    $survey->name = 'test1';
    $survey->description = 'test descreiption';
    $survey->save();


    $survey->questions()->attach([1,2,3,4,5]);
    $user_id = Auth::id();
    $survey->users()->attach($user_id);

    //prepare queation data to pass to views.
    $view_data['survey'] = $survey;
    return view('survey.new', $view_data);
    */
    //option 1: get 10 the question
    /*
    $questions = \App\Question::take(10)->get();
    return $questions->toJson();
    */
    //option 1
    $asked_questions=[];
    $user = \App\User::where("id", Auth::id())->first();
    foreach($user->surveys as $survey)
    {
      foreach($survey->questions as $question)
      {
        array_push($asked_questions, $question->id);
      }
    }

    //$prepare_questions = \App\Question::whereNotIn('id',$asked_questions)
    $prepare_questions = \App\Question::select("id","question")->limit(10)
    ->with('choices')
    ->get();

    return  json_encode($prepare_questions);

  }

  public function store_survey(Request $request )
  {
    //get the current user
    $user = Auth::user();


      $mysurveyflag =array(
          'mysurveyflag' =>  Auth::user()->mysurveyflag,
      );

      Auth::user()->mysurveyflag = 1;
      Auth::user()->save();




      //get the current answered question_id and choice_id
    $question_id = $request->input("data.question_id");
    $choice_id = $request->input("data.choice_id");

    //fire the NewSurvey event to save response
    event(new NewSurvey($user, $question_id, $choice_id));

      return response()->json($mysurveyflag);
  }
}
