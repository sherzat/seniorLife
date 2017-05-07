<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getHome()
    {
        $current_page="home";
    	return view('home' , ['current_page' => $current_page]);
    }

    public function getOverView()
    {

    }


    public function getRank()
    {
        $current_page="rank";
        return view('pages.rank' , ['current_page' => $current_page]);
    }



    public function getSelf_assessments()
    {
        return view('pages.self_assessment');
    }
    public function getSurvey_cake()
    {
        return view('pages.survey_cake');
    }

    public function getMysurvey()
    {
        $current_page="mysurvey";
        return view('pages.mysurvey' , ['current_page' => $current_page]);
    }
    public function getEmpatica()
    {
        $current_page="empatica";
        return view('pages.empatica' , ['current_page' => $current_page]);

    }

    public function getChallenges()
    {
        return view('pages.challenges');
    }

    public function getAchievement()
    {
        return view('pages.achievement');
    }

    public function getProfile()
    {
        return view('pages.profile');
    }
}

