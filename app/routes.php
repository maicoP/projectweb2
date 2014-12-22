<?php

Route::resource('cards','cardsController');
Route::resource('facebook','facebookController');
Route::get('image/create','cardsController@createTempImage');
Route::post('image/save','cardsController@saveTempImage');
Route::post('image/edit','cardsController@editTempImage');
Route::get('/',function(){

	return View::make('index');	
});

Route::get('login/fb/callback','facebookController@store');

