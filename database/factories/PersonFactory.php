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
$factory->define(App\Person::class, function (Faker\Generator $faker) {

    return [
        'photo' => 'images/team' . $faker->numberBetween($min = 1, $max = 4) . '.jpg',
        'name' => $faker->name,
        'position' => $faker->jobTitle,
        'description' => $faker->text($maxNbChars = 200),
        'facebook' => 'sania.kovalchuk',
        'twitter' => 'AlexMammut',
        'linkedin' => 'alex-mammut',
        'instagram' => 'mammutcave',
    ];
});
