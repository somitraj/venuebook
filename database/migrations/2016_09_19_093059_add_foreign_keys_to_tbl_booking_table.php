<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblBookingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tbl_booking', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_userss2')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('venue_id', 'fk_venuee2')->references('id')->on('venues')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tbl_booking', function(Blueprint $table)
		{
			$table->dropForeign('fk_userss2');
			$table->dropForeign('fk_venuee2');
		});
	}

}
