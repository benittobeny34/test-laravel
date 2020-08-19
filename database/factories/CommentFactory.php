<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //
        'post_id'=>random_int(1,130),
        'comment'=>$faker->text,
    ];
});
