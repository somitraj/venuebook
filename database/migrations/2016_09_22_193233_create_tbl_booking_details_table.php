<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblBookingDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_booking_details', function(Blueprint $table)
		{
			$table->integer('item_id', true);
			$table->float('rate', 10, 0);
			$table->integer('quantity');
			$table->integer('amount');
			$table->integer('booking_id')->nullable()->index('fk_booking');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_booking_details');
	}

}
