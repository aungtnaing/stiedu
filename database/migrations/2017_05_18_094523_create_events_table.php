<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('mname');
			
			$table->integer('userid');
			
			$table->integer('firstspeakerid')->unsigned();
			$table->integer('secondspeakerid')->unsigned();
			$table->integer('thirdspeakerid')->unsigned();
			$table->integer('fourthspeakerid')->unsigned();
			$table->integer('fifthspeakerid')->unsigned();

			$table->foreign('firstspeakerid')->references('id')->on('professors')->onDelete('cascade');
        
        	$table->foreign('secondspeakerid')->references('id')->on('professors')->onDelete('cascade');

        	$table->foreign('thirdspeakerid')->references('id')->on('professors')->onDelete('cascade');
        
        	$table->foreign('fourthspeakerid')->references('id')->on('professors')->onDelete('cascade');

        	$table->foreign('fifthspeakerid')->references('id')->on('professors')->onDelete('cascade');

			$table->string('aboutevent',2000);
			$table->string('maboutevent',2000);

			
			$table->date('startdate');
			$table->date('enddate');

			$table->string('address');
			
			$table->string('photourl1');
			
		
			$table->boolean('active');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));

			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
