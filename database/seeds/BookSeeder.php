<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for ($i=0; $i < 5; $i++) 
      {
        $book = new Book();
        $book->name = $faker->word;
        $book->category_id = $faker->numberBetween($min = 1, $max = 5);
        $book->author_id =  $faker->numberBetween($min = 1, $max = 5);
        $book->published_date = $faker->date($format = 'Y-m-d', $max = 'now');
        $book->status = 0;

        $book->save();
      }
    }
}
