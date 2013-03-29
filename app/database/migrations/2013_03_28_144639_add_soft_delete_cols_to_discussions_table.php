<?php

use Illuminate\Database\Migrations\Migration;

class AddSoftDeleteColsToDiscussionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('discussions', function($table) {
			$table->boolean('is_deleted');
			$table->timestamp('deleted_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('discussions', function($table) {
			$table->dropColumn('is_deleted');
			$table->dropColumn('deleted_at');
		});
	}

}