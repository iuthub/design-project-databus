<?php

use Illuminate\Database\Seeder;

class UniversalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=10; $i++):
            DB::table('announcements')
                ->insert([
                    'title' => $faker->sentence(3),
                    'content' => $faker->sentence(15),
                    'city_id' => $faker->numberBetween(0, 10),
                    'views' => 0,
                    'district_id' => $faker->numberBetween(0, 10),
                    'likes' => 0,
                    'dislikes' => 0,
                    'type' => $faker->numberBetween(0, 3),
                    'user_id' => 0,
                    'status' => $faker->numberBetween(0, 3),
                    'date' => $faker->dateTime,
                    'extra' => 0,
                    'lat' => $faker->randomFloat(),
                    'lng' => $faker->randomFloat()
                ]);
        endfor;
    }
}
