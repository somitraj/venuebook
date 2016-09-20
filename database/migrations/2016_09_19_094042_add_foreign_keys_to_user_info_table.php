<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_info', function(Blueprint $table)
		{
			$table->foreign('country_id', 'fk_country2')->references('id')->on('tbl_countries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('district_id', 'fk_district2')->references('id')->on('tbl_district')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('province_id', 'fk_province2')->references('id')->on('tbl_provinces')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_users2')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('zone_id', 'fk_zone2')->references('id')->on('tbl_zones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_info', function(Blueprint $table)
		{
			$table->dropForeign('fk_country2');
			$table->dropForeign('fk_district2');
			$table->dropForeign('fk_province2');
			$table->dropForeign('fk_users2');
			$table->dropForeign('fk_zone2');
		});
	}

}
