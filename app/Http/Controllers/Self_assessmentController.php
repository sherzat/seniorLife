<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use DB;
class Self_assessmentController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

		$user = \App\User::where('id', Auth::id())->first();
		$surveys = $user->surveys;

		$view_data['surveys'] = $surveys;
		return view('pages.self_assessment', $view_data);

    }

 }
