<?php

use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('groups', function($table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('category');
            $table->timestamps();
        });
        // Now that we've create the table, we will now alter it.
        DB::statement('ALTER TABLE groups AUTO_INCREMENT = 10000;');

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('groups');
	}

}