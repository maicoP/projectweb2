<?php

class usersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function index()
	{
		return View::make('users.login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		if( $this->user->fill($input)->isValid())
		{
			$this->user->password = Hash::make($input['password']);
			$this->user->save();
			return Redirect::to('/')->with('message','you have successfully registered');
		}
		else
		{
			return Redirect::back()->withInput()->withErrors($this->user->errors);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function logout(){
		Auth::logout();
		return Redirect::back();
	}

	public function login(){
		$input = Input::all();

		$credentials = array("email" => $input["email"],"password" => $input["password"]);
		if(Auth::attempt($credentials))
		{
			return Redirect::to('/');
		}
		return Redirect::to('users')->withInput()->with('error','wrong email or password');
	}



}
