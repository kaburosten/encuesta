<?php

use Illuminate\Database\Migrations\Migration;

class CreateEncuestaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encuesta', function($table)
		{
			$table->increments('id');
			$table->integer('1');
			$table->boolean('2');
			$table->boolean('3');
			$table->boolean('4');
			$table->boolean('5');
			$table->boolean('6');
			$table->boolean('7');
			$table->boolean('8');
			$table->string('9');
			$table->boolean('10');
			$table->boolean('11');
			$table->boolean('12');
			$table->boolean('13');
			$table->boolean('14');
			$table->boolean('15');
			$table->boolean('16');
			$table->string('17');
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
		Schema::drop('encuesta');
	}

}