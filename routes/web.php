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
Route::get('home', 'PagesController@getHome');

Route::get('rank', 'PagesController@getRank');
Route::get('contact', 'PagesController@getContact');
Route::get('survey_cake', 'PagesController@getSurvey_cake');
Route::get('mysurvey', 'PagesController@getMysurvey');
Route::get('empatica', 'PagesController@getEmpatica');
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

