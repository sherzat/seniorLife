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

Route::get('rank', 'PagesController@getRank')->name("Rank");
Route::get('contact', 'PagesController@getContact');
Route::get('survey_cake', 'PagesController@getSurvey_cake');

//mysurvey
Route::get('mysurvey','MySurveyController@getMysurvey')->name("My Survey");
Route::get('getMysurveyData','MySurveyController@getMysurveyData');


//challenges
Route::get('challenges','ChallengesController@getChallenges')->name("Challenges");
Route::get('getChallengesData','ChallengesController@getChallengesData');

//rank
Route::get('rank','RankController@getRank')->name("Rank");
Route::get('getRankData','RankController@getRankData');

//achievement
Route::get('achievement','AchievementController@getAchievement')->name("Achievement");
Route::get('getAchievementData','AchievementController@getAchievementData');

Route::get('empatica', 'PagesController@getEmpatica')->name("Empatica");

Route::get('self_assessment', 'Self_assessmentController@index');
Route::post('self_assessment/store/{survey}', 'Self_assessmentController@store');
Route::get('self_assessment/show', 'Self_assessmentController@show');

Route::get('survey/new', 'SurveyController@create_survey')->name('new.survey');
Route::post('survey/store', 'SurveyController@store_survey')->name('store.survey');
Route::get('survey/result', 'SurveyController@survey_result');

Route::get('databaseTest', function(){
	if (DB::connection()->getDatabaseName())
	{
		echo 'connection successfully to database '.DB::connection()->getDatabaseName();
	}
});

Route::get('/storedata', 'QuestionController@mapQC');
Auth::routes();
Route::resource('profile', 'ProfileController');
Route::get('profile', 'ProfileController@index')->name("Profile");

Route::resource('home', 'HomeController');
Route::get('home', 'HomeController@index')->name("Home");
