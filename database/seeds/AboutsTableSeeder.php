<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            \App\Model\About::create([
                'title' => $faker->realText($maxNbChars = 50, $indexSize = 1),
                'slug' => $faker->slug(),
                'overview' => $faker->realText($maxNbChars = 200, $indexSize = 1),
                'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            ]);
        }

    }
}
