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

        $collectedbadges = $user->achievements;

        $badges = [];
        foreach ($collectedbadges as $badge) {

            $array = array_prepend( $badges, $badge->id);
        }


        $availableBadges = DB::table('achievements')
            ->whereNotIn('id', $array)
            ->get();

        $achievementData = array(

            'flag' =>  Auth::user()->achievementflag,
            'badges' =>$collectedbadges,
            'level' =>Auth::user()->level,
            'availableBadges' =>$availableBadges,
        );

        Auth::user()->achievementflag = 1;
        Auth::user()->save();

        return response()
            ->json($achievementData);
    }
}
