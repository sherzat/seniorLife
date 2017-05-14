<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RankController extends Controller
{
    public function getRank()
    {

        return view('pages.rank');
    }

    public function getRankData()
    {
        $rankData =array(
            'flag' =>  Auth::user()->rankflag,
        );

        Auth::user()->rankflag = 1;
        Auth::user()->save();

        return response()
            ->json($rankData);
    }
}
