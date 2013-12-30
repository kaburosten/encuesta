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
		Schema::create('form', function($table)
		{
			$table->increments('id');
			$table->integer('q1');
			$table->boolean('q2');
			$table->boolean('q3');
			$table->boolean('q4');
			$table->boolean('q5');
			$table->boolean('q6');
			$table->boolean('q7');
			$table->boolean('q8');
			$table->integer('q9');
			$table->boolean('q10');
			$table->boolean('q11');
			$table->boolean('q12');
			$table->boolean('q13');
			$table->boolean('q14');
			$table->boolean('q15');
			$table->boolean('q16');
			$table->string('q17');
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
		Schema::drop('form');
	}

}