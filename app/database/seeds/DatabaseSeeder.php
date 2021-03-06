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

		$this->call('GeneralSeeder');
		$this->call('QuestionSeeder');
		$this->call('AnswerSeeder');
	}

}
