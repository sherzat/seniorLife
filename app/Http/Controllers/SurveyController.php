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
			
        $view_data['survey'] = $survey;
		return view('survey.detail', $view_data);
	}


    public function create_survey()
    {
        //create new survey.
		//map survey with questions.
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
    }

	public function store_survey(Request $request, \App\Survey $survey)
    {
        $user_id = Auth::id();
        $responsed_choices =$request->all();
		$user = $survey->users->where('id', $user_id)->first();

       
        foreach ($responsed_choices as $question_id => $value)
        {

            if($question_id!= '_token')
			{

				$choice = \App\Choice::where('choice', $value)->first();
				$question = $survey->questions->where('id', $question_id)->first();
				$response = new \App\Response;
				$response->users()->associate($user);
				$response->questions()->associate($question);
				$response->choices()->associate($choice);
				$response->surveys()->associate($survey);

                $response->save();
            }

		}

        return  redirect()->route('detail.survey', [$survey]);

 
    }
}
