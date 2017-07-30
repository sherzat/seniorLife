<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getApp_test()
    {
        $current_page="app test";
        return view('apptest.app_test' , ['current_page' => $current_page]);
    }

    public function create_survey()
    {
        $user = Auth::user();

        $survey = \App\Survey::where('name', '=', "test")->first();
        $prepare_questions= $survey->questions()
        ->with('choices')
        ->get();
        $new_survey['prepare_questions'] = $prepare_questions->shuffle($user->id);

        return  json_encode($new_survey);

    }

    public function store_survey(Request $request )
    {
        //get the current user
        $user = Auth::user();
        //get the current answered question_id and choice_id
        $answers = $request->input("data");
        $withNext = $request->input("withNext");
        $likertScale = $request->input("likertScale");
        $answers=collect($answers);
        $answers->each(function ($answer) use ($user, $withNext,$likertScale){
            DB::table('testResponses')->insert([
            ['user_id' => $user->id, 'question_id' => $answer['q_id'], 'withNext'=>$withNext, 'likertScale'=>$likertScale, 'responses' => serialize($answer['answers'])],
            ]);
        });


        return response()->json("sucess");

    }
}
