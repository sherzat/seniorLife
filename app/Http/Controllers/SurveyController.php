<?php

namespace App\Http\Controllers;

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

  public function detailed_survey(Survey $survey)
  {

    // $view_data['survey'] = $survey;
    return view('survey.detail', $view_data);
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
    //get the current answered question_id and choice_id
    $question_id = $request->input("data.question_id");
    $choice_id = $request->input("data.choice_id");



    //$user->surveys()->attach()

    return $choice_id;
    // var_dump($responsed_choices = json_decode($request->input('data')));
    // //$user = $survey->users->where('id', $user_id)->first();
    // $survey = new \App\Survey;
    // $survey->name = 'test1';
    // $survey->description = 'test descreiption';
    // $survey->save();
    //
    // $survey->users()->attach($user_id);
    // $choice_id = null;
    // foreach ($responsed_choices as $value)
    // {
    //   //var_dump($value);
    //   //print $value->id;
    //   $survey->questions()->attach($value->id);
    //   if($value->answer == 'svg_11') //5
    //   $choice_id = 5;
    //   if($value->answer == 'svg_13') //4
    //   $choice_id = 4;
    //   if($value->answer == 'svg_15') //3
    //   $choice_id = 3;
    //   if($value->answer == 'svg_17') //2
    //   $choice_id = 2;
    //   if($value->answer == 'svg_19') //1
    //   $choice_id = 1;
    //
    //   print ($choice_id);
    //   $choice = \App\Choice::where('id', '1')->first();
    //   $question = $survey->questions->where('id', $value->id)->first();
    //   $response = new \App\Response;
    //   $response->users()->associate($user_id);
    //   $response->questions()->associate($question);
    //   $response->choices()->associate($choice);
    //   $response->surveys()->associate($survey);
    //   $response->save();
    // }

    //return  redirect()->route('detail.survey', [$survey->id]);

  }
}
