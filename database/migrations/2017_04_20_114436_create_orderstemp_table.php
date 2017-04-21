<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderstempTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orderstemp', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('userid');
			$table->integer('bookid');
			$table->string('photourl1');
			$table->string('bookinfo');
			$table->integer('qty');
			$table->integer('price');
			$table->integer('total');
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
		Schema::drop('orderstemp');
	}

}
