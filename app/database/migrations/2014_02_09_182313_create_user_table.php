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
			$table->string('profile_image', 60)->default('noimage.png');
			$table->string('email', 150)->unique();
			$table->text('about');
			$table->timestamps();
		});

		Schema::create('games', function($table)
		{
			$table->increments('id');
			$table->string('gamename', 128);
			$table->timestamps();
		});

		Schema::create('parties', function($table)
		{
			$table->increments('id');
			$table->string('party_name', 128);
			$table->integer('user_created_id')->unsigned();
			$table->foreign('user_created_id')->references('id')->on('users');
			$table->integer('game_id')->unsigned();
			$table->foreign('game_id')->references('id')->on('games');
			$table->integer('max_players');
			$table->string('description', 128);
			$table->timestamps();
		});

		Schema::create('users_parties', function($table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->integer('party_id')->unsigned();
			$table->foreign('party_id')->references('id')->on('parties');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_parties');
		Schema::drop('parties');
		Schema::drop('users');	
		Schema::drop('games');

	}

}
