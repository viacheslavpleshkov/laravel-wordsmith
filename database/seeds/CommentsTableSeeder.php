<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            for ($j = 1; $j < 31; $j++) {
                $review1 = new Comment();
                $review1->user_id = 1;
                $review1->article_id = $j;
                $review1->text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae orci pellentesque, egestas dui nec, ultricies velit. Donec rutrum quis risus eget eleifend. In sed risus lacus. Integer at posuere nunc, quis lobortis enim.';
                $review1->status = 1;
                $review1->save();
            }
        }
    }
}
