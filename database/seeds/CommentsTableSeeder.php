<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;
use Faker\Factory;

class CommentsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Factory::create();
		for ($i = 0; $i < 2; $i++) {
			for ($j = 1; $j < 601; $j++) {
				$review = new Comment();
				$review->user_id = 1;
				$review->article_id = $j;
				$review->text = $faker->text(150);
				$review->status = 1;
				$review->save();
			}
		}
	}
}
