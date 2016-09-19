<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_info', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable();
			$table->string('first_name', 32)->nullable();
			$table->string('last_name', 32)->nullable();
			$table->date('date_of_birth');
			$table->string('nationality_id', 32)->nullable();
			$table->string('phone_no', 32);
			$table->string('mobile_no', 32);
			$table->integer('country_id')->nullable();
			$table->integer('province_id')->nullable();
			$table->integer('zone_id')->nullable();
			$table->integer('district_id')->nullable();
			$table->string('locality', 32);
			$table->string('profile_image');
			$table->string('identity_image');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_info');
	}

}
