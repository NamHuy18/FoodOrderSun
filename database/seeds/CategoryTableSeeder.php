<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Bánh Cắt Nhỏ', 'slug' => 'banh-cat-nho'],
            ['name' => 'Bánh Hình Trái Tim', 'slug' => 'banh-hinh-trai-tim'],
            ['name' => 'Bánh Mì', 'slug' => 'banh-mi'],
            ['name' => 'Bánh Noel', 'slug' => 'banh-noel'],
            ['name' => 'Bánh Sinh Nhật', 'slug' => 'banh-sinh-nhat'],      
            ['name' => 'Cupcakes', 'slug' => 'cup-cakes'],
        ]);
    }
}
