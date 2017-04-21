<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('userid');
			$table->string('name');
			$table->string('lastname');
			$table->string('phoneno');
			$table->string('address', 500);
			$table->string('city');
			$table->string('note', 1000);
			$table->string('bookinfo', 1000);
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
		Schema::drop('orders');
	}

}
