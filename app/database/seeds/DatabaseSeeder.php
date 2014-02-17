<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('GameDataBaseSeeder');
	}

}

class GameDataBaseSeeder extends Seeder{

	public function run()
	{
		Game::create(array('gamename' => 'BioShock Infinite'));
		Game::create(array('gamename' => 'Battlefield 3'));
		Game::create(array('gamename' => 'Team Fortess 2'));
		Game::create(array('gamename' => 'Battlefield 4'));
		Game::create(array('gamename' => 'Counter Strike Global Offensive'));
		Game::create(array('gamename' => 'League of Legends'));
		Game::create(array('gamename' => 'Minecraft'));
	}
}