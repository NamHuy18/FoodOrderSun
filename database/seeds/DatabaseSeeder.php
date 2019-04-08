<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(PromotionTableSeeder::class);
        $this->call(BannerTableSeeder::class);
        $this->call(FoodTableSeeder::class);
        $this->call(PivotTableSeeder::class);
        $this->call(NewsTableSeeder::class);
    }
}

