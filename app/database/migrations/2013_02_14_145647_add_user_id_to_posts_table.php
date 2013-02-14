<?php

use Illuminate\Database\Migrations\Migration;

class AddUserIdToPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('posts', function($table)
        {
            $table->string('user_id');
        });

    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('posts', function($table)
        {
            $table->dropColumn('user_id');
        });
    }

}