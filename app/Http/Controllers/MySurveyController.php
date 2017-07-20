<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MySurveyController extends Controller
{
    public function getMysurvey()
    {
        $current_page="mysurvey";
        return view('pages.mysurvey' , ['current_page' => $current_page]);
    }

//set first visit flag after app tour.
    public function getMysurveyData()
    {
        $mysurveyData =array(
            'flag' =>  Auth::user()->mysurveyflag,
        );

        Auth::user()->mysurveyflag = 1;
        Auth::user()->save();

        return response()
            ->json($mysurveyData);
    }
}
