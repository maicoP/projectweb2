<?php

class Card extends Eloquent {

	protected $fillable =['image','sender','fk_adressid'];


	public static $rules=[
		'image' => 'image|max:1000|mimes:jpg,jpeg,bmp,png,gif,required',
	];

	public function isValid($action)
    {
         $validation =Validator::make($this->attributes,static::$rules);   
        
        if($validation->passes()) return true;
        
        $this->errors =$validation->messages();
        return false;
    }

}