<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tours',function($table) {
			$table->increments('id');
			$table->text('title');
			$table->text('description');
			$table->string('country',250);
			$table->string('city',250);
			$table->string('price',50);
			$table->timestamp('start_date');
			$table->timestamp('end_date');
			$table->text('img_url');
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
		Schema::drop('tours');
	}

}
