<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Author;

class AuthorSeeder extends Seeder
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
        $author = new Author();
        $author->name = $faker->name;
        $author->status = 1;

        $author->save();
      }
    }
}
