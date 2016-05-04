<?php
Route::group(['prefix'=>'b','namespace'=>'Admin'],
function()
{
	Route::get('/login',['uses'=>'LoginController@index']);
});