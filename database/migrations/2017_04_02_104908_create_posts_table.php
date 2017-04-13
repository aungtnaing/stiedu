<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name');
			$table->string('mname');
			$table->string('description',2500);
			$table->string('mdescription',2500);

			$table->string('subtitle');
			$table->string('msubtitle');
			
			$table->integer('categoryid')->unsigned();
			$table->integer('userid');
			
			$table->string('photourl1');
			$table->string('caption1');
			$table->string('photourl2');
			$table->string('caption2');
			$table->string('photourl3');
			$table->string('caption3');
			$table->string('photourl4');
			$table->string('caption4');

			$table->string('youtubelink',500);

			$table->boolean('popular');
			$table->boolean('mainslide');
			$table->boolean('active');
			$table->timestamps();


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
		Schema::drop('posts');
	}

}
