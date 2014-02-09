<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('username', 128)->unique();
			$table->string('password', 60);
			$table->string('email', 150)->unique();
			$table->timestamps();
		});

		Schema::create('games', function($table)
		{
			$table->increments('id');
			$table->string('gamename', 128);
			$table->timestamps();
		});

		Schema::create('groups', function($table)
		{
			$table->increments('id');
			$table->string('groupname', 128);
			$table->integer('user_created_id')->unsigned();
			$table->foreign('user_created_id')->references('id')->on('users');
			$table->integer('game_id')->unsigned();
			$table->foreign('game_id')->references('id')->on('games');
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
		Schema::drop('groups');
		Schema::drop('games');
		Schema::drop('users');

	}

}
