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
    	return view('home');
    }

    public function getOverView()
    {

    }


    public function getRank()
    {
    	return view('pages.rank');
    }

    public function getContact()
    {
    	return view('pages.contact');
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
        return view('pages.mysurvey');
    }
    public function getEmpatica()
    {
        return view('pages.empatica');
    }
}

