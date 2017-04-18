<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('volnumber');
			$table->string('issuenumber');
			$table->string('bookname');
			$table->integer('discount');
			$table->integer('oprice');
			$table->integer('price');
				$table->integer('rate');

			$table->string('description',1000);
			$table->string('mdescription', 1000);
				$table->string('photourl1');
				
			$table->boolean('active');
		
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
		Schema::drop('books');
	}

}
