<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTblMessageBoxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tbl_message_box', function(Blueprint $table)
		{
			$table->foreign('box_type_id', 'fk_box')->references('id')->on('message_box_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('message_id', 'fk_message')->references('id')->on('tbl_messages')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_user_types2')->references('id')->on('user_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tbl_message_box', function(Blueprint $table)
		{
			$table->dropForeign('fk_box');
			$table->dropForeign('fk_message');
			$table->dropForeign('fk_user_types2');
		});
	}

}
