<?php

class Adres extends Eloquent {

	protected $fillable =['streatname','owner','housnumber','postcode','postbus','village'];

	 protected $table = 'adress';
	 
    public function cards()
    {
        return $this->belongsToMany('Card','cardsadress','fk_adressid','fk_cardsid');
    }

}