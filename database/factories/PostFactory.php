<?php

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $image = "blog-" . rand(1, 6) . ".jpg";
    $date = new DateTime;
        
        return [
            'user_id' => rand(1, 3),
            'title' => $faker->sentence(rand(8, 12)),
            'excerpt' => $faker->text(250, 300),
            'body' => $faker->paragraphs(rand(10, 15), true),
            'slug' => $faker->slug(),
            'image' => rand(0, 1) == 1 ? $image : NULL,
            'created_at' => $date,
            'updated_at' => $date,
        ];
});
