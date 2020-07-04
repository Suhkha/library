<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
      'name' => $faker->sentence,
      'user_id' => factory('App\User')->create()->id,
      'category_id' => factory('App\Category')->create()->id,
      'author_id' => factory('App\Author')->create()->id,
      'published_date' => now(),
      'status' => 1
    ];
});
