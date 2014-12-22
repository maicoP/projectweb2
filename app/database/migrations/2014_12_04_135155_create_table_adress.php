<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdress extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adress', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('streatname');
			$table->string('housnumber');
			$table->string('Village');
			$table->string('postcode');
			$table->string('postbus');
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
		Schema::drop('adress');
	}

}
