<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name(10),
    ];
});


$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(3),
        'short_descr' => $faker->paragraph(3),
        'price' => $faker->numberBetween($min = 10, $max = 100),
        'quantity' => $faker->numberBetween($min = 1, $max = 10),
    ];
});