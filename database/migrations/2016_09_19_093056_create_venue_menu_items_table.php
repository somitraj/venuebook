<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVenueMenuItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('venue_menu_items', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('venue_id')->nullable()->index('fk_venue');
			$table->integer('menu_item_id')->nullable()->index('fk_menu');
			$table->float('price', 10, 0);
			$table->string('price_per', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('venue_menu_items');
	}

}
