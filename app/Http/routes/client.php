<?php

/*
 |--------------------------------------------------------------------------
 | Client Routes
 |--------------------------------------------------------------------------
*/

Route::get('/','Client\ShowController@index');
Route::get('/rice','Client\RiceController@index');
Route::get('/noodle','Client\NoodleController@index');
Route::get('/snacks','Client\SnacksController@index');
Route::get('/seasoning','Client\SeasoningController@index');
Route::get('/tw','Client\TwController@index');
Route::group(['prefix'=>'about'],function(){
	Route::get('/','Client\AboutController@index');
	Route::get('contactus','Client\AboutController@contactus');
	Route::get('follow','Client\AboutController@follow');
	Route::resource('activity','Client\ActivityController');
});

