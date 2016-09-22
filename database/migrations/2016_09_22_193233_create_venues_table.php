<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVenuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('venues', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->string('image');
			$table->date('established_date');
			$table->string('phone_no');
			$table->string('phone_no_2');
			$table->integer('country_id')->nullable()->index('fk_country3');
			$table->integer('province_id')->nullable()->index('fk_province3');
			$table->integer('zone_id')->nullable()->index('fk_zone3');
			$table->integer('district_id')->nullable()->index('fk_district3');
			$table->string('locality', 32);
			$table->string('space_area', 225);
			$table->string('person_capacity', 225);
			$table->integer('venue_type_id')->nullable()->index('fk_venue_type');
			$table->float('Hall_charge', 10, 0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('venues');
	}

}
