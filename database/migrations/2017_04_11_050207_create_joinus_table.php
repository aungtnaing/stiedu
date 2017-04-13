<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoinusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('joinus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('userid');
			$table->string('fname');
			$table->string('lname');
			$table->string('email');
			$table->integer('age');
			$table->string('city');
			$table->string('position');
			$table->string('salary');
			$table->string('startdate');
			$table->string('experience',5000);
			$table->string('application',5000);
			
			$table->string('cv1');
			$table->string('cv2');

			$table->string('cv3');
			$table->string('cv4');
			$table->string('cv5');
			


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
		Schema::drop('joinus');
	}

}
