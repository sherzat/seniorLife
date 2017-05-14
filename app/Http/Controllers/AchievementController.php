<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function getAchievement()
    {

        return view('pages.achievement');
    }

    public function getAchievementData()
    {
        $achievementData =array(
            'flag' =>  Auth::user()->achievementflag,
        );

        Auth::user()->achievementflag = 1;
        Auth::user()->save();

        return response()
            ->json($achievementData);
    }
}
