<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('mname');
			$table->integer('categoryid')->unsigned();
			$table->integer('userid');
			$table->integer('professorid');

			$table->string('aboutcourse',1000);
			$table->string('maboutcourse',1000);

			$table->string('whatlearn',2000);
			$table->string('mwhatlearn',2000);

			$table->date('startdate');
			$table->string('duration');

			$table->string('classduration');
			$table->string('institution');

			
			$table->integer('seatsavailable');
			$table->string('level');

			$table->integer('rate');
			$table->string('photourl1');
			
		
			$table->boolean('active');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));

			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));


			$table->foreign('categoryid')->references('id')->on('category')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses');
	}

}
