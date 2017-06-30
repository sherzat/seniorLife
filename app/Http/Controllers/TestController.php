<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getApp_test()
    {
        return view('apptest.app_test');
    }
}
