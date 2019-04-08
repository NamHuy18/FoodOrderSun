<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Do Nam Huy',
            'avatar' => 'donamhuy.jpg',
            'email' => 'namhuydo18@gmail.com',
            'password' => bcrypt('namhuy98'),
            'level' => 0,
        ]);
    }
}
