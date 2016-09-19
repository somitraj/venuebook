<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserVenueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_venue', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_userr')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('venue_id', 'fk_venuee')->references('id')->on('venues')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_venue', function(Blueprint $table)
		{
			$table->dropForeign('fk_userr');
			$table->dropForeign('fk_venuee');
		});
	}

}
