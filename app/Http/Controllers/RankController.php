<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class RankController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function getRank()
    {

        return view('pages.rank');
    }

    public function getRankData()
    {
        $rankUsers= \App\User::orderBy('point','desc')->get();


        $rankData =array(
            'flag' =>  Auth::user()->rankflag,//thisis fr fist time visit
            'rankUsers' => $rankUsers,
            'currentUser' =>Auth::user(),
//            'playerStatus'=> $playerStatus,
        );

        Auth::user()->rankflag = 1;
        Auth::user()->save();



        return response()
            ->json($rankData);
    }
}
