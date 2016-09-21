<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVenueMenuItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('venue_menu_items', function(Blueprint $table)
		{
			$table->foreign('menu_item_id', 'fk_menu')->references('id')->on('tbl_menu_items')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('venue_id', 'fk_venue')->references('id')->on('venues')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('venue_menu_items', function(Blueprint $table)
		{
			$table->dropForeign('fk_menu');
			$table->dropForeign('fk_venue');
		});
	}

}
