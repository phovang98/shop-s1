<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            \App\Model\Slide::create([
                'title' => $faker->realText($maxNbChars = 50, $indexSize = 1),
                'image' => $faker->imageUrl(),
                'alt' => $faker->realText($maxNbChars = 50, $indexSize = 1),
            ]);
        }

    }
}
