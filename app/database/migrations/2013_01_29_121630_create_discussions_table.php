<?php

use Illuminate\Database\Migrations\Migration;

class CreateDiscussionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('discussions', function($table)
        {
            $table->increments('id');
            $table->integer('group_id');
            $table->string('title');
            $table->softDeletes();
            $table->timestamps();
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('discussions');
	}
}