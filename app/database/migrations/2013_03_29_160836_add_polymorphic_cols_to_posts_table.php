<?php

use Illuminate\Database\Migrations\Migration;

class AddPolymorphicColsToPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posts', function($table) {
			$table->integer('postable_id');
			$table->string('postable_type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function($table) {
			$table->dropColumn('postable_id');
			$table->dropColumn('postable_type');
		});
	}

}