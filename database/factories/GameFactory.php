<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Games::class, function (Faker $faker) {
    return [
        'name' => $faker->text(10),
        'description' => $faker->text(100),
        'topic_id' => \App\Model\Topics::get()->random(1)->first(),
        'version' => 1.0
        ];
});
