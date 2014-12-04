<?php

Route::get('/',function(){
	// $user = new User;
	// $user->username = 'NewUser';
	// $user->password = Hash::make('password');
	// $user->save();

	// User::create([
	// 	'username' => 'AnotherUser',
	// 	'password' => Hash::make('password')
	// 	]);

	// $user = User::find(2);
	// $user->username='updatedName';
	// $user->save();

	// $user= User::find(2);
	// $user->delete();



	//return User::orderBy('username','asc')->take(2)->get();
	return 'test';

	
});



//controllers

// Route::get('users','UsersController@index');
// Route::get('users/{username}','UsersController@show');

//other way
Route::get('login','SessionsController@create');
Route::get('login','SessionsController@destroy');
Route::resource('sessions','SessionsController');
Route::resource('users','UsersController');
