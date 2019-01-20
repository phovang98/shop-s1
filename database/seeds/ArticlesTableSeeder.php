<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 50; $i++) {
            \App\Model\Article::create([
                'title' => $faker->realText($maxNbChars = 50, $indexSize = 1),
                'slug' => $faker->slug(),
                'image' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
                'video' => $faker->url,
                'author' => $faker->name,
                'overview' => $faker->realText($maxNbChars = 200, $indexSize = 1),
                'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            ]);
        }

    }
}
