<?php

use Illuminate\Database\Migrations\Migration;

class AddParentDiscussionIdToDiscussionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('discussions', function($table)
		{
			$table->integer('parent_discussion_id');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('discussions', function($table)
		{
			$table->dropColumn('parent_discussion_id');
		});
	}

}