<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
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
        $user = new User();
        $user->name = $faker->name;
        $user->email = $faker->safeEmail;
        $user->type = 0;
        $user->password = crypt("iwantmybook", "");

        $user->save();
      }

      $user = new User();
      $user->name = "Maniak";
      $user->email = "admin@maniak.co";
      $user->type = 1;
      $user->password = crypt("iwantmybook", "");
      $user->save();

    }
}
