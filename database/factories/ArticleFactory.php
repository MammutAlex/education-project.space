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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Article::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'image' => 'images/img-' . $faker->numberBetween($min = 1, $max = 6) . '.jpg',
        'description' => $faker->text($maxNbChars = 200),
        'text' => $faker->text($maxNbChars = 800),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
