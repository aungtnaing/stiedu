<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visitors', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name');
			$table->string('email');
			$table->string('phone');
			$table->string('like');
			$table->string('type');
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
		Schema::drop('visitors');
	}

}
