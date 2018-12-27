<?php

use Illuminate\Database\Seeder;

class logSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker
  $limit = 20; //batasan berapa banyak data
  
  for ($i = 0; $i < $limit; $i++) {
			DB::table('users')->insert([ //mengisi data di database
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $faker->password,
				 //email unique sehingga tidak ada yang sama
			]);
		}
    }
}
