<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblBookingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_booking', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('date');
			$table->integer('user_id')->nullable()->index('fk_userss2');
			$table->integer('venue_id')->nullable()->index('fk_venuee2');
			$table->integer('no_of_person');
			$table->float('total_amount', 10, 0);
			$table->date('Booking_date');
			$table->string('Booking_time', 30);
			$table->string('Event', 30);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_booking');
	}

}
