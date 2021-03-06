<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $current_page="home";
        return view('home' , ['current_page' => $current_page]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();

        $surveyResult=$user->getSurveyResult();


        $rankUsers= \App\User::where('name', 'not like','testuser%')->orderBy('point','desc')->get();


        $inProgressBadges= $user->achievements()->where('is_achieved',0)->get();





        $badges =array(
            'flag' =>  $user->flag,
            'surveyResult' => $surveyResult,
            'inProgressBadges'=>$inProgressBadges,
            'rankUsers' => $rankUsers,
            'currentUser' =>$user,
        );
        Auth::user()->flag = 1;
        Auth::user()->save();

       return response()
            ->json($badges);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getResultByCatagory(){

        $user=Auth::user();
        $getResultByCatagory = $user->getResultByCatagory();
        return json_encode($getResultByCatagory);
    }
    public function getRadarChartData(){
      $user=Auth::user();
      $getRadarChartData = $user->getRadarChartData();
      return json_encode($getRadarChartData);
    }
}
