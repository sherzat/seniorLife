<?php

namespace App\Http\Controllers;

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

    public function create_testpage()
    {
        $mySurveyData['categories'] = \App\Category::where('id', 11)->get();
        return json_encode($mySurveyData);
    }
}
