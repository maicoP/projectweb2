<?php

class Card extends Eloquent {

	protected $fillable =['image','sender','fk_adressid','fk_userid'];


	public static $rules=[
		'image' => 'image|max:1000|mimes:jpg,jpeg,bmp,png,gif,required',
	];

    public function adress()
    {
        return $this->belongsToMany('Adres','cardsadress','fk_cardsid','fk_adressid');
    }


	public function isValid($action)
    {
         $validation =Validator::make($this->attributes,static::$rules);   
        
        if($validation->passes()) return true;
        
        $this->errors =$validation->messages();
        return false;
    }

    public function saveCardAdress($cardId,$adresId)
    {
        DB::table('cardsadress')->insert(
              array('fk_adressid' => $adresId,
                     'fk_cardsid' => $cardId)
        );
    }

}