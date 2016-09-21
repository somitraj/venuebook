<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVenuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('venues', function(Blueprint $table)
		{
			$table->foreign('country_id', 'fk_country3')->references('id')->on('tbl_countries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('district_id', 'fk_district3')->references('id')->on('tbl_district')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('province_id', 'fk_province3')->references('id')->on('tbl_provinces')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('venue_type_id', 'fk_venue_type')->references('id')->on('venue_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('zone_id', 'fk_zone3')->references('id')->on('tbl_zones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('venues', function(Blueprint $table)
		{
			$table->dropForeign('fk_country3');
			$table->dropForeign('fk_district3');
			$table->dropForeign('fk_province3');
			$table->dropForeign('fk_venue_type');
			$table->dropForeign('fk_zone3');
		});
	}

}
