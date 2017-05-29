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
			
			$table->string('comment', 1000);
			
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));

			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
			$table->foreign('commentid')->references('id')->on('comments')->onDelete('cascade');
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
