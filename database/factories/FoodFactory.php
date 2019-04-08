<?php

$factory->define(App\Food::class, function () {
    $name = 'food' . rand(1,100);
    return [
        'name' => $name,
        'image' => rand(1,13) . '.jpg',
        'slug' => str_slug($name),
        'description' => str_random(50),
        'content' => str_random(100),
        'price' => rand(1, 100) * 1000,
        'top' => '1',
        'new'=> '1',
        'promotion_id' => rand(1,8),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,        
    ];
});
