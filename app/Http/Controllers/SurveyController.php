<?php

namespace App\Http\Controllers;

use App\Events\NewSurvey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Survey;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  //returns the survey result for the chart.
  public function survey_result()
  {
    // $user=Auth::user();
    // $mySurveyData['surveyResult'] = $user->getSurveyResult();

    $mySurveyData['categories'] = \App\Category::all();
    return json_encode($mySurveyData);
  }

 //return qustoins by category
  public function create_survey($category)
  {

    // $asked_questions=[];
    // $user = Auth::user();
    // foreach($user->surveys()->whereDate('created_at', DB::raw("CURDATE()") ) as $survey)
    // {
    //   foreach($survey->questions as $question)
    //   {
    //     array_push($asked_questions, $question->id);
    //   }
    // }
    // dd($asked_questions);

    //$prepare_questions = \App\Question::whereNotIn('id',$asked_questions)
    // $prepare_questions = \App\Category::where('name', '=', $category)->first()
    // ->questions()
    // ->with('choices')
    // ->get();
    $survey = \App\Survey::where('name', '=', $category)->first();
    $prepare_questions= $survey->questions()
    ->with('choices')
    ->get();
    $new_survey['prepare_questions'] = $prepare_questions;
    $new_survey['survey_id'] = $survey->id;


    return  json_encode($new_survey);

  }

  public function store_survey(Request $request )
  {
    //get the current user
    $user = Auth::user();
    //get the current answered question_id and choice_id
    $answers = $request->input("data");
    $survey_id = $request->input("survey_id");


    //fire the NewSurvey event to save response
    event(new NewSurvey($user, $answers, $survey_id));


    // level and points pair
    $playerStatus= array('playerStatus'=>$user->getPlayerStatus());


    return response()->json($playerStatus);

  }
}
