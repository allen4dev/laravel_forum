<?php

use Faker\Generator as Faker;

$factory->define(App\Serie::class, function (Faker $faker) {
    return [
        "skill_id" => function () {
            return factory(App\Skill::class)->create();
        },
        "name" => $faker->sentence,
        "description" => $faker->text,
        "level" => $faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
    ];
});
