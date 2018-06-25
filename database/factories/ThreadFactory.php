<?php

use Faker\Generator as Faker;

$factory->define(App\Thread::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'skill_id' => function () {
            return factory(App\Skill::class)->create()->id;
        },
        'best_reply' => null,
        'serie_id' => function () {
            return factory(App\Serie::class)->create()->id;            
        },
        "title" => $faker->sentence,
        "description" => $faker->paragraph,
        "body" => $faker->text,
    ];
});
