<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	public $timestamps = false;

	protected $fillable =['firstname','lastname','password','email'];

	public static $rules=[
		'firstname' => 'required',
		'lastname' => 'required',
		'email' => 'unique:users,email',
		'password' => 'required|min:8'
	];

	public $errors;

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function profiles()
    {
        return $this->hasMany('Profile');
    }
	
	public function isValid()
	{	
		$validation =Validator::make($this->attributes,static::$rules);
		if($validation->passes()) return true;
		
		$this->errors =$validation->messages();
		return false;
	}



}
