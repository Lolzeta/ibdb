<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    $title = ucfirst($faker->words(rand(1,10),true));
    return [
        'title'  => $title,
        'slug'   =>str_slug($title, "-"),
        'author' => $faker->firstName(null) . " " . $faker->lastName(),
        'description' => $faker->text(300)
    ];
});
