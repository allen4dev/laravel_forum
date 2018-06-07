<?php

use Faker\Generator as Faker;

$factory->define(App\Reply::class, function (Faker $faker) {
    return [
        "thread_id" => function () {
            return factory(App\Thread::class)->create()->id;
        },
        "body" => $faker->text,
    ];
});
