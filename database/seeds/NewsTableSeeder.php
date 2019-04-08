<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 21; $i++){
            News::create([
                'title' => 'blog' .str_random(5),
                'image' => rand(1,6) . '.jpg',
                'description' => str_random(15),
                'content' => str_random(40),
                'user_id' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]);
        }
    }
}
