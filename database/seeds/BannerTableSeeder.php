<?php

use Illuminate\Database\Seeder;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            ['name' => 'Slide1', 'image' => '1.jpg', 'status' => '1'],
            ['name' => 'Slide2', 'image' => '2.jpg', 'status' => '1'],
            ['name' => 'Slide3', 'image' => '3.jpg', 'status' => '1'],
            ['name' => 'Slide4', 'image' => '4.jpg', 'status' => '1'],
            ['name' => 'Banner1', 'image' => '5.jpg', 'status' => '2'],
            ['name' => 'Banner2', 'image' => '6.jpg', 'status' => '2'],
            ['name' => 'Banner3', 'image' => '7.jpg', 'status' => '2'],
            ['name' => 'Banner4', 'image' => '8.jpg', 'status' => '3'],
            ['name' => 'Banner5', 'image' => '9.jpg', 'status' => '3'],
            ['name' => 'Banner6', 'image' => '10.jpg', 'status' => '4'],
            ['name' => 'Banner7', 'image' => '11.jpg', 'status' => '4'],
            ['name' => 'Banner8', 'image' => '12.jpg', 'status' => '4'],
        ]);
    }
}
