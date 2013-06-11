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

		// $this->call('UserTableSeeder');
<<<<<<< HEAD
		$this->call('ItemsTableSeeder');
		$this->call('CategoriesTableSeeder');
=======
		$this->call('TweetsTableSeeder');
		$this->call('ItemsTableSeeder');
		$this->call('ItemsTableSeeder');
		$this->call('ItemsTableSeeder');
>>>>>>> 4a317c81d5cc2dd794650ce7cac4ad5e231bd6fe
	}

}