<?php

use Illuminate\Database\Seeder;

class PromotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->insert([
            ['discount' => '10', 'start_date' => '2019-04-09 00:00:00', 'end_date' => '2019-04-30 00:00:00'],
            ['discount' => '20', 'start_date' => '2019-04-09 00:00:00', 'end_date' => '2019-04-30 00:00:00'],
            ['discount' => '30', 'start_date' => '2019-04-09 00:00:00', 'end_date' => '2019-04-09 00:00:00'],
            ['discount' => '40', 'start_date' => '2019-04-09 00:00:00', 'end_date' => '2019-04-30 00:00:00'],
            ['discount' => '50', 'start_date' => '2019-04-09 00:00:00', 'end_date' => '2019-04-30 00:00:00'],
            ['discount' => '60', 'start_date' => '2019-04-09 00:00:00', 'end_date' => '2019-04-30 00:00:00'],
            ['discount' => '70', 'start_date' => '2019-04-09 00:00:00', 'end_date' => '2019-04-30 00:00:00'],
            ['discount' => '80', 'start_date' => '2019-04-09 00:00:00', 'end_date' => '2019-04-30 00:00:00'],
        ]);
    }
}
