<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory;

class ArticlesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Factory::create();
		for ($i = 1; $i < 100; $i++) {
			$article1 = new Article();
			$article1->title = $faker->text(9);
			$article1->url = "article$i";
			$article1->images = 'none';
			$article1->text = '<p>' . $faker->text(10000) . '</p>';
			$article1->category_id = 1;
			$article1->seo_id = 7;
			$article1->views = 1;
			if ($i === 1) {
				$article1->slide = 1;
			} else {
				$article1->slide = 0;
			}
			$article1->status = 1;
			$article1->user_id = 1;
			$article1->save();
		}
		for ($i = 100; $i < 200; $i++) {
			$article2 = new Article();
			$article2->title = $faker->text(9);
			$article2->url = "article$i";
			$article2->images = 'none';
			$article2->text = '<p>' . $faker->text(10000) . '</p>';
			$article2->category_id = 2;
			$article2->seo_id = 7;
			$article2->views = 1;
			if ($i === 101) {
				$article2->slide = 1;
			} else {
				$article2->slide = 0;
			}
			$article2->status = 1;
			$article2->user_id = 1;
			$article2->save();
		}
		for ($i = 200; $i < 300; $i++) {
			$article3 = new Article();
			$article3->title = $faker->text(9);
			$article3->url = "article$i";
			$article3->images = 'none';
			$article3->text = '<p>' . $faker->text(10000) . '</p>';
			$article3->category_id = 3;
			$article3->seo_id = 7;
			$article3->views = 1;
			if ($i === 201) {
				$article3->slide = 1;
			} else {
				$article3->slide = 0;
			}
			$article3->status = 1;
			$article3->user_id = 1;
			$article3->save();
		}
		for ($i = 300; $i < 400; $i++) {
			$article4 = new Article();
			$article4->title = $faker->text(9);
			$article4->url = "article$i";
			$article4->images = 'none';
			$article4->text = '<p>' . $faker->text(10000) . '</p>';
			$article4->category_id = 4;
			$article4->seo_id = 7;
			$article4->views = 1;
			if ($i === 301) {
				$article4->slide = 1;
			} else {
				$article4->slide = 0;
			}
			$article4->status = 1;
			$article4->user_id = 1;
			$article4->save();
		}
		for ($i = 400; $i < 500; $i++) {
			$article5 = new Article();
			$article5->title = $faker->text(9);
			$article5->url = "article$i";
			$article5->images = 'none';
			$article5->text = '<p>' . $faker->text(10000) . '</p>';
			$article5->category_id = 5;
			$article5->seo_id = 7;
			$article5->views = 1;
			if ($i === 401) {
				$article5->slide = 1;
			} else {
				$article5->slide = 0;
			}
			$article5->status = 1;
			$article5->user_id = 1;
			$article5->save();
		}
		for ($i = 500; $i < 601; $i++) {
			$article6 = new Article();
			$article6->title = $faker->text(9);
			$article6->url = "article$i";
			$article6->images = 'none';
			$article6->text = '<p>' . $faker->text(10000) . '</p>';
			$article6->category_id = 6;
			$article6->seo_id = 7;
			$article6->views = 1;
			if ($i === 501) {
				$article6->slide = 1;
			} else {
				$article6->slide = 0;
			}
			$article6->status = 1;
			$article6->user_id = 1;
			$article6->save();
		}
	}
}
