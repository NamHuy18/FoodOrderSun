<?php

use Illuminate\Database\Seeder;

class PivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_food')->insert([
            ['food_id' => '1', 'category_id' => '1'],
            ['food_id' => '2', 'category_id' => '1'],
            ['food_id' => '3', 'category_id' => '1'],
            ['food_id' => '4', 'category_id' => '1'],
            ['food_id' => '5', 'category_id' => '2'],
            ['food_id' => '6', 'category_id' => '2'],
            ['food_id' => '7', 'category_id' => '2'],
            ['food_id' => '8', 'category_id' => '2'],
            ['food_id' => '9', 'category_id' => '3'],
            ['food_id' => '10', 'category_id' => '3'],
            ['food_id' => '11', 'category_id' => '3'],
            ['food_id' => '12', 'category_id' => '4'],
            ['food_id' => '13', 'category_id' => '4'],
            ['food_id' => '14', 'category_id' => '5'],
            ['food_id' => '15', 'category_id' => '5'],
            ['food_id' => '16', 'category_id' => '5'],
            ['food_id' => '17', 'category_id' => '5'],
            ['food_id' => '18', 'category_id' => '6'],
            ['food_id' => '19', 'category_id' => '6'],
            ['food_id' => '20', 'category_id' => '6'],
        ]);
    }
}
