<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Category;

class CategorySeeder extends Seeder
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
        $category = new Category();
        $category->name = $faker->randomElement($array = array ('Fiction','Love','History'));
        $category->description = $faker->realText($maxNbChars = 80, $indexSize = 2);
        $category->status = 1;

        $category->save();
      }
    }
}
