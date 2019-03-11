<?php

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title'=>$faker->realText($maxNbChars = 15),
        'slug'=>$faker->slug(),
        'body'=>$faker->realText($maxNbChars = 200),
        'published'=>$faker->boolean($chanceOfGettingTrue = 50),
    ];
});
