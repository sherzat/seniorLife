<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AchievementController extends Controller
{
    public function getAchievement()
    {

        return view('pages.achievement');
    }

    public function getAchievementData()
    {
        $user = Auth::user();
        $array=[];


        $collectedbadges= $user->achievements()->where('is_achieved',1)->orderBy('achievement_user.updated_at', 'desc')->get();
        $inProgressBadges= $user->achievements()->where('is_achieved',0)->get();


        $arrays = $user->achievements()->pluck('achievements.id')->toArray();

        $availableBadges = \App\Achievement::where('is_hidden', '0')
            ->whereNotIn('id', $arrays)
            ->get();

        $achievementData = array(

            'flag' =>  Auth::user()->achievementflag,
            'badges' =>$collectedbadges,
            'level' =>Auth::user()->level,
            'inProgressBadges'=>$inProgressBadges,
            'availableBadges' =>$availableBadges,
        );

        Auth::user()->achievementflag = 1;
        Auth::user()->save();

        return response()
            ->json($achievementData);
    }
}
