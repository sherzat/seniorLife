<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class RankController extends Controller
{
    public function getRank()
    {

        return view('pages.rank');
    }

    public function getRankData()
    {
        $rankUsers= DB::table('users')->select('id','name', 'email','point','avatar')->orderBy('point', 'desc')->get();

//        $playerStatus=[];
//        $rankUsers->each(function ($item) use($playerStatus){
//            array_add($playerStatus,
//               'playerStatus', array(\App\User::find($item->id)->getPlayerStatus())
//            );
//            dd($playerStatus);
//        });
        $rankData =array(
            'flag' =>  Auth::user()->rankflag,//thisis fr fist time visit
            'rankUsers' => $rankUsers,
//            'playerStatus'=> $playerStatus,
        );

        Auth::user()->rankflag = 1;
        Auth::user()->save();



        return response()
            ->json($rankData);
    }
}
