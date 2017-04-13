<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplycommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('replycomments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('commentid')->unsigned();
			$table->integer('userid');
			// $table->integer('commentid');
			$table->string('comment', 1000);
			

			$table->foreign('commentid')->references('id')->on('comments')->onDelete('cascade');
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
		Schema::drop('replycomments');
	}

}
