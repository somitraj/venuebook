<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblDistrictTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tbl_district', function(Blueprint $table)
		{
			$table->foreign('zone_id', 'fk_zone')->references('id')->on('tbl_zones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tbl_district', function(Blueprint $table)
		{
			$table->dropForeign('fk_zone');
		});
	}

}
