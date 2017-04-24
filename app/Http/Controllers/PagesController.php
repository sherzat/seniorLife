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
    public function getIndex()
    {
    	return view('index');
    }

    public function getOverView()
    {

    }


    public function getAbout()
    {
    	$fist = 'sherzat';
    	$last = 'ablimit';

    	$full = $fist." ".$last;
    	return view('pages.about')->with("fullname", $full);
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
}

