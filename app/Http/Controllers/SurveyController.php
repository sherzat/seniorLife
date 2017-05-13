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
  public function survey_result()
  {
    $user=Auth::user();
    $surveyResult = $user->getSurveyResult();
    return json_encode($surveyResult);
  }




  public function create_survey()
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
    $prepare_questions = \App\Question::select("id","question")->where("category","=",1)
    ->with('choices')
    ->get();

    return  json_encode($prepare_questions);

  }

  public function store_survey(Request $request )
  {
    //get the current user
    $user = Auth::user();
    //get the current answered question_id and choice_id
    $question_id = $request->input("data.question_id");
    $choice_id = $request->input("data.choice_id");

    //fire the NewSurvey event to save response
    event(new NewSurvey($user, $question_id, $choice_id));

    return "success";
  }
}
