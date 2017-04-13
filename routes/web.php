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

Route::get('/', 'PagesController@getIndex');
Route::get('/home', 'HomeController@index');

Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');


Route::get('self_assessment', 'Self_assessmentController@index');
Route::post('self_assessment/store/{survey}', 'Self_assessmentController@store');
Route::get('self_assessment/show', 'Self_assessmentController@show');


Route::get('survey/new', 'SurveyController@create_survey')->name('new.survey');
Route::get('survey/{survey}', 'SurveyController@detailed_survey')->name('detail.survey');
Route::post('survey/store/{survey}', 'SurveyController@store_survey')->name('store.survey');

Route::get('databaseTest', function(){
	if (DB::connection()->getDatabaseName())
	{
		echo 'connection successfully to database '.DB::connection()->getDatabaseName();
	}
});

Route::get('/storedata', 'QuestionController@mapQC');
Auth::routes();

