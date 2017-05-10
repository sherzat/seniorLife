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

Route::get('/mysurvey/{path?}',[
	'uses'=> 'Self_assessmentController@show',
	'where'=> ['path' => '.*'],
])->name("My Survey");
Route::get('empatica', 'PagesController@getEmpatica')->name("Empatica");
Route::get('challenges', 'PagesController@getChallenges')->name("Challenges");
Route::get('achievement', 'PagesController@getAchievement')->name("Achievement");



Route::get('self_assessment', 'Self_assessmentController@index');
Route::post('self_assessment/store/{survey}', 'Self_assessmentController@store');
Route::get('self_assessment/show', 'Self_assessmentController@show');


Route::get('survey/new', 'SurveyController@create_survey')->name('new.survey');
Route::get('survey/{survey}', 'SurveyController@detailed_survey')->name('detail.survey');
Route::post('survey/store', 'SurveyController@store_survey')->name('store.survey');

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
