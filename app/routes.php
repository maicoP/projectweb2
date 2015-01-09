<?php

Route::resource('cards','cardsController');
Route::resource('users','usersController');
Route::resource('facebook','facebookController');
Route::get('image/create','cardsController@createTempImage');
Route::post('image/save','cardsController@saveTempImage');
Route::post('image/edit','cardsController@editTempImage');
Route::post('/facebook/images/save','cardsController@saveFacebookImage');
Route::get('/',function(){

	return View::make('index');	
});
Route::get('/login/fb/callback','facebookController@store');
ROute::get('/logout','usersController@logout');
ROute::post('/users/login','usersController@login');
Route::get('/facebook-images',function(){
	return View::make('facebook');
});

