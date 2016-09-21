<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblZonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tbl_zones', function(Blueprint $table)
		{
			$table->foreign('province_id', 'fk_provinces')->references('id')->on('tbl_zones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tbl_zones', function(Blueprint $table)
		{
			$table->dropForeign('fk_provinces');
		});
	}

}
