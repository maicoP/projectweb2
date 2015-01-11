<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createcardsadresstable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cardsadress', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("fk_adressid")->unsigned();
			$table->foreign("fk_adressid")
						->references("id")
						->on("adress")
						->onUpdate("cascade")
						->onDelete("restrict");
			$table->integer("fk_cardsid")->unsigned();
			$table->foreign("fk_cardsid")
						->references("id")
						->on("cards")
						->onUpdate("cascade")
						->onDelete("restrict");
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cardsadress');
	}

}
