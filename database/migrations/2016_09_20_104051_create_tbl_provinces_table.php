<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblProvincesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_provinces', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 32);
			$table->string('code', 32);
			$table->integer('country_id')->nullable()->index('fk_country');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_provinces');
	}

}
