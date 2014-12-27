<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCards extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('image');
			$table->string('sender');
			$table->string('receiver');
			$table->integer("fk_adressid")->unsigned();
			$table->foreign("fk_adressid")
						->references("id")
						->on("adress")
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
		Schema::drop('cards');
	}

}
