<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'WelcomeController@welcome');

//survey
Route::get('mysurvey','MySurveyController@getMysurvey')->name("Survey");
Route::get('getMysurveyData','MySurveyController@getMysurveyData');


//challenges
Route::get('challenges','ChallengesController@getChallenges')->name("Challenges");
Route::get('getChallengesData','ChallengesController@getChallengesData');

//rank
Route::get('rank','RankController@getRank')->name("Rank");
Route::get('getRankData','RankController@getRankData');
Route::get('getRankFlag','RankController@getRankFlag');

//achievement
Route::get('achievement','AchievementController@getAchievement')->name("Achievement");
Route::get('getAchievementData','AchievementController@getAchievementData');
Route::get('getAchievementFlag','AchievementController@getAchievementFlag');


Route::get('survey/create/{new}', 'SurveyController@create_survey')->name('new.survey');
Route::post('survey/store', 'SurveyController@store_survey')->name('store.survey');
Route::get('survey/result', 'SurveyController@survey_result');



Route::get('databaseTest', function(){
	if (DB::connection()->getDatabaseName())
	{
		echo 'connection successfully to database '.DB::connection()->getDatabaseName();
	}
});

//profile
Auth::routes();
Route::resource('profile', 'ProfileController');
Route::get('profile', 'ProfileController@index')->name("Profile");

Route::post('uploadFile','ProfileController@upload_avatar');

Route::resource('home', 'HomeController');
Route::get('home', 'HomeController@index')->name("Home");
Route::get('getResultByCatagory','HomeController@getResultByCatagory');
Route::get('getRadarChartData','HomeController@getRadarChartData');

//apptest
Route::get('apptest','TestController@getApp_test')->name("Apptest");
Route::get('getTestSurvey','TestController@create_survey');
Route::post('storeTestSurvey','TestController@store_survey');
Route::get('showResult','TestController@showResult');
