<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tabcategorys',function($table) {
			$table->increments('id');
			$table->string('tab_name',100);
			$table->string('title',250);
			$table->text('text');
			$table->string('img_url',250);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tab');
	}

}
