<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblBookingDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tbl_booking_details', function(Blueprint $table)
		{
			$table->foreign('booking_id', 'fk_booking')->references('id')->on('tbl_booking')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tbl_booking_details', function(Blueprint $table)
		{
			$table->dropForeign('fk_booking');
		});
	}

}
