<?php

Route::resource('cards','cardsController');
Route::get('image/create','cardsController@createTempImage');
Route::post('image/save','cardsController@saveTempImage');
Route::post('image/edit','cardsController@editTempImage');
Route::post('/facebook/images/save','cardsController@saveFacebookImage');
Route::get('/',function(){

	return View::make('index');	
});
Route::get('/facebook/images',function(){
	return View::make('facebook');
});

